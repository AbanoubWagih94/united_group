<?php

namespace App\Http\Controllers\Admin\E_Tower;

use App\Models\E_Tower\PageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageDetailController extends Controller
{
    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'youtube_link' => 'required',
            'location_link' => 'required',
            'brochure_text_name' => 'required',
            'brochure_button_name' => 'required',
            'brochure_file' => 'mimes:pdf,xlx,csv|max:2048'
        ]);

        $pageDetail = PageDetail::find(1);

        if($request->hasFile('brochure_file')) {
            $file = $request->file('brochure_file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($pageDetail->brochure_file !== NULL) {
                if (file_exists('uploads/'. $pageDetail->brochure_file)) {
                    unlink('uploads/'. $pageDetail->brochure_file);
                }
            }
        }

        $row = $pageDetail->update([
            'name' => $request->name,
            'description' => $request->description,
            'youtube_link' => $request->youtube_link,
            'location_link' => $request->location_link,
            'brochure_text_name' => $request->brochure_text_name,
            'brochure_button_name' => $request->brochure_button_name,
            'brochure_file' => isset($fileName) ? $fileName : $pageDetail->brochure_file
        ]);

        if($row) {
            return redirect()->back()->with('success', 'Page Detail updated successfully');
        }
    }
}
