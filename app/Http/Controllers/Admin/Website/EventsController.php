<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Website\Event;
use App\Models\Website\EventImages;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function create() {
        return view('admin.website.events.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title_en' => 'required|unique:events',
            'title_ar' => 'required|unique:events',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
            'images.*'=> 'required|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }
   
        $row = Event::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $fileName,
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $file = $image;
                $fileName = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads', $fileName);
                EventImages::create([
                    'event_id' => $row->id,
                    'image' => $fileName,
                ]);
            }
        }

        if($row) {
            return redirect()->route('udg.events')->with('success', 'Event created successfully');            
        }
    }

    public function edit($id) {
        $event = Event::findorFail($id);
        return view('admin.website.events.edit', compact('event'));
    }

    public function update(Request $request, $id) {
        $event = Event::findorFail($id);

        $this->validate($request, [
            'title_en' => 'required|unique:events,title_en,'.$id,
            'title_ar' => 'required|unique:events,title_ar,'.$id,
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
            'images.*'=> 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($event->image !== NULL) {
                if(file_exists('uploads/'. $event->image)) {
                    unlink('uploads/'. $event->image);
                }
            }
        }

        $row = $event->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => isset($fileName) ? $fileName : $event->image,
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $file = $image;
                $fileName = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads', $fileName);
                EventImages::create([
                    'event_id' => $event->id,
                    'image' => $fileName,
                ]);
            }
        }

        if($row) {
            return redirect()->route('udg.events')->with('success', 'Event updated successfully');            
        }
    }

    public function delete($id) {
        $event = Event::findorFail($id);

        if($event->image !== NULL) {
            if(file_exists('uploads/'. $event->image)) {
                unlink('uploads/'. $event->image);
            }
        }

        foreach($event->event_images as $eventImage) {
            if(file_exists('uploads/'. $eventImage->image)) {
                unlink('uploads/'. $eventImage->image);
            }
        }
        
        $row = $event->event_images()->delete();
        
        $row = $event->delete();

        if($row) {
            return redirect()->route('udg.events')->with('success', 'Event deleted successfully');            
        }
    }

    public function removeImage($imageId) {
        $eventImage = EventImages::findorFail($imageId);

        if(file_exists('uploads/'. $eventImage->image)) {
            unlink('uploads/'. $eventImage->image);
        }

        $row = $eventImage->delete();

        if($row) {
            return redirect()->back()->with('success', 'Event Image deleted successfully');            
        }
    }

    public function changeToSlug($name) {
        $slug = str_replace(' ', '-', $name);
        return $slug;
    }
}
