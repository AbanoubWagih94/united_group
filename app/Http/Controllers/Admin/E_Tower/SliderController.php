<?php

namespace App\Http\Controllers\Admin\E_Tower;

use App\Models\E_Tower\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function create() {
        return view('admin.e-tower.sliders.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }

        $row = Slider::create([
            'image' => $fileName
        ]);

        if($row) {
            return redirect()->route('e-tower.sliders')->with('success', 'Image created successfully');            
        }
    }

    public function delete($id) {
        $slider = Slider::findorFail($id);

        if($slider->image !== NULL) {
            if(file_exists('uploads/'. $slider->image)) {
                unlink('uploads/'. $slider->image);
            }
        }

        $row = $slider->delete();

        if($row) {
            return redirect()->route('e-tower.sliders')->with('success', 'Image deleted successfully');            
        }
    }
}
