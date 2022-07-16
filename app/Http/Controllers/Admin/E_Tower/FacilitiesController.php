<?php

namespace App\Http\Controllers\Admin\E_Tower;

use App\Models\E_Tower\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilitiesController extends Controller
{
    public function create() {
        return view('admin.e-tower.facilities.create');
    }

    public function store(Request $request) {        
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }

        $row = Facility::create([
            'name' => $request->name,
            'image' => $fileName,
            'description' => $request->description
        ]);

        if($row) {
            return redirect()->route('e-tower.facilities')->with('success', 'Facility created successfully');            
        }
    }

    public function edit($id) {
        $facility = Facility::findorFail($id);
        return view('admin.e-tower.facilities.edit', compact('facility'));
    }

    public function update(Request $request, $id) {
        $facility = Facility::findorFail($id);

        $this->validate($request, [
            'name' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($facility->image !== NULL) {
                if(file_exists('uploads/'. $facility->image)) {
                    unlink('uploads/'. $facility->image);
                }
            }
        }

        if($request->description) {
            $description = $request->description;
        } else {
            $description = NULL;
        }

        $row = $facility->update([
            'name' => $request->name,
            'image' => isset($fileName) ? $fileName : $facility->image,
            'description' => $description
        ]);

        if($row) {
            return redirect()->route('e-tower.facilities')->with('success', 'Facility updated successfully');            
        }
    }

    public function delete($id) {
        $facility = Facility::findorFail($id);

        if($facility->image !== NULL) {
            if(file_exists('uploads/'. $facility->image)) {
                unlink('uploads/'. $facility->image);
            }
        }

        $row = $facility->delete();

        if($row) {
            return redirect()->route('e-tower.facilities')->with('success', 'Facility deleted successfully');            
        }
    }
}
