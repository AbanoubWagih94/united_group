<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Models\Website\WhyChooseUs;
use App\Http\Controllers\Controller;

class WhyChooseUsController extends Controller
{
    public function create() {
        return view('admin.website.why_choose_us.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }

        $row = WhyChooseUs::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $fileName
        ]);

        if($row) {
            return redirect()->route('udg.why_choose_us')->with('success', 'Why Choose Us created successfully');            
        }
    }

    public function edit($id) {
        $whyChooseUs = WhyChooseUs::findorFail($id);
        return view('admin.website.why_choose_us.edit', compact('whyChooseUs'));
    }

    public function update(Request $request, $id) {
        $whyChooseUs = WhyChooseUs::findorFail($id);

        $this->validate($request, [
            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($whyChooseUs->image !== NULL) {
                if(file_exists('uploads/'. $whyChooseUs->image)) {
                    unlink('uploads/'. $whyChooseUs->image);
                }
            }
        }

        $row = $whyChooseUs->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => isset($fileName) ? $fileName : $whyChooseUs->image,
        ]);

        if($row) {
            return redirect()->route('udg.why_choose_us')->with('success', 'Why Choose Us updated successfully');            
        }
    }

    public function delete($id) {
        $whyChooseUs = WhyChooseUs::findorFail($id);

        if($whyChooseUs->image !== NULL) {
            if(file_exists('uploads/'. $whyChooseUs->image)) {
                unlink('uploads/'. $whyChooseUs->image);
            }
        }

        $row = $whyChooseUs->delete();

        if($row) {
            return redirect()->route('udg.why_choose_us')->with('success', 'Why Choose Us deleted successfully');            
        }
    }
}
