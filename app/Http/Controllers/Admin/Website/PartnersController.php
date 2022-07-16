<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Models\Website\Partner;
use App\Http\Controllers\Controller;

class PartnersController extends Controller
{
    public function create() {
        return view('admin.website.partners.create');
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

        $row = Partner::create([
            'image' => $fileName
        ]);

        if($row) {
            return redirect()->route('udg.partners')->with('success', 'Partner created successfully');            
        }
    }

    public function edit($id) {
        $partner = Partner::findorFail($id);
        return view('admin.website.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id) {
        $partner = Partner::findorFail($id);

        $this->validate($request, [
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($partner->image !== NULL) {
                if(file_exists('uploads/'. $partner->image)) {
                    unlink('uploads/'. $partner->image);
                }
            }
        }

        $row = $partner->update([
            'image' => isset($fileName) ? $fileName : $partner->image,
        ]);

        if($row) {
            return redirect()->route('udg.partners')->with('success', 'Partner updated successfully');            
        }
    }

    public function delete($id) {
        $partner = Partner::findorFail($id);

        if($partner->image !== NULL) {
            if(file_exists('uploads/'. $partner->image)) {
                unlink('uploads/'. $partner->image);
            }
        }

        $row = $partner->delete();

        if($row) {
            return redirect()->route('udg.partners')->with('success', 'Partner deleted successfully');            
        }
    }
}
