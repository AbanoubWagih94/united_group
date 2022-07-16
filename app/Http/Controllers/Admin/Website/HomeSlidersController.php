<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Models\Website\HomeSlider;
use App\Http\Controllers\Controller;

class HomeSlidersController extends Controller
{
    public function create() {
        return view('admin.website.sliders.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'button_en' => 'required',
            'button_ar' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }

        $row = HomeSlider::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'button_en' => $request->button_en,
            'button_ar' => $request->button_ar,
            'image' => $fileName
        ]);

        if($row) {
            return redirect()->route('udg.sliders')->with('success', 'Home Slider created successfully');            
        }
    }

    public function edit($id) {
        $homeSlider = HomeSlider::findorFail($id);
        return view('admin.website.sliders.edit', compact('homeSlider'));
    }

    public function update(Request $request, $id) {
        $homeSlider = HomeSlider::findorFail($id);

        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'button_en' => 'required',
            'button_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($homeSlider->image !== NULL) {
                if(file_exists('uploads/'. $homeSlider->image)) {
                    unlink('uploads/'. $homeSlider->image);
                }
            }
        }

        $row = $homeSlider->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'button_en' => $request->button_en,
            'button_ar' => $request->button_ar,
            'image' => isset($fileName) ? $fileName : $homeSlider->image,
        ]);

        if($row) {
            return redirect()->route('udg.sliders')->with('success', 'Home Slider updated successfully');            
        }
    }

    public function delete($id) {
        $homeSlider = HomeSlider::findorFail($id);

        if($homeSlider->image !== NULL) {
            if(file_exists('uploads/'. $homeSlider->image)) {
                unlink('uploads/'. $homeSlider->image);
            }
        }

        $row = $homeSlider->delete();

        if($row) {
            return redirect()->route('udg.sliders')->with('success', 'Home Slider deleted successfully');            
        }
    }
}
