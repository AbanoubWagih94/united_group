<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Models\Website\Career;
use App\Http\Controllers\Controller;

class CareersController extends Controller
{
    public function show($id) {
        $career = Career::findorFail($id);

        return view('admin.website.careers.show', compact('career'));
    }

    public function delete($id) {
        $career = Career::findorFail($id);

        if($career->cv !== NULL) {
            if(file_exists('uploads/'. $career->cv)) {
                unlink('uploads/'. $career->cv);
            }
        }

        $row = $career->delete();

        if($row) {
            return redirect()->route('udg.careers')->with('success', 'Career deleted successfully');            
        }
    }
}
