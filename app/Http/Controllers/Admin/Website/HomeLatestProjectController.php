<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Website\HomeLatestProject;

class HomeLatestProjectController extends Controller
{
    public function update(Request $request) {  
        
        $home_latest_project = HomeLatestProject::find(1);

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

            if($home_latest_project->image !== NULL) {
                if (file_exists('uploads/'. $home_latest_project->image)) {
                    unlink('uploads/'. $home_latest_project->image);
                }
            }
        }

        $row = $home_latest_project->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'button_en' => $request->button_en,
            'button_ar' => $request->button_ar,
            'image' => isset($fileName) ? $fileName : $home_latest_project->image,
        ]);

        if($row) {
            return redirect()->back()->with('success', 'Home Latest Project updated successfully');
        }
    }
}
