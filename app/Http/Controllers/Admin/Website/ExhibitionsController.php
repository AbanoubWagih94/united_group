<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Website\Exhibition;
use App\Http\Controllers\Controller;
use App\Models\Website\ExhibitionImages;

class ExhibitionsController extends Controller
{
    public function create() {
        return view('admin.website.exhibitions.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
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
   
        $row = Exhibition::create([
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
                ExhibitionImages::create([
                    'exhibition_id' => $row->id,
                    'image' => $fileName,
                ]);
            }
        }

        if($row) {
            return redirect()->route('udg.exhibitions')->with('success', 'Exhibition created successfully');            
        }
    }

    public function edit($id) {
        $exhibition = Exhibition::findorFail($id);
        return view('admin.website.exhibitions.edit', compact('exhibition'));
    }

    public function update(Request $request, $id) {
        $exhibition = Exhibition::findorFail($id);

        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
            'images.*'=> 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($exhibition->image !== NULL) {
                if(file_exists('uploads/'. $exhibition->image)) {
                    unlink('uploads/'. $exhibition->image);
                }
            }
        }

        $row = $exhibition->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => isset($fileName) ? $fileName : $exhibition->image,
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $file = $image;
                $fileName = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads', $fileName);
                ExhibitionImages::create([
                    'exhibition_id' => $exhibition->id,
                    'image' => $fileName,
                ]);
            }
        }

        if($row) {
            return redirect()->route('udg.exhibitions')->with('success', 'Exhibition updated successfully');            
        }
    }

    public function delete($id) {
        $exhibition = Exhibition::findorFail($id);

        if($exhibition->image !== NULL) {
            if(file_exists('uploads/'. $exhibition->image)) {
                unlink('uploads/'. $exhibition->image);
            }
        }

        foreach($exhibition->exhibition_images as $exhibitionImage) {
            if(file_exists('uploads/'. $exhibitionImage->image)) {
                unlink('uploads/'. $exhibitionImage->image);
            }
        }
        
        $row = $exhibition->exhibition_images()->delete();
        
        $row = $exhibition->delete();

        if($row) {
            return redirect()->route('udg.exhibitions')->with('success', 'Exhibition deleted successfully');            
        }
    }

    public function removeImage($imageId) {
        $exhibitionImage = ExhibitionImages::findorFail($imageId);

        if(file_exists('uploads/'. $exhibitionImage->image)) {
            unlink('uploads/'. $exhibitionImage->image);
        }

        $row = $exhibitionImage->delete();

        if($row) {
            return redirect()->back()->with('success', 'Exhibition Image deleted successfully');            
        }
    }

    public function changeToSlug($name) {
        $slug = str_replace(' ', '-', $name);
        return $slug;
    }
}
