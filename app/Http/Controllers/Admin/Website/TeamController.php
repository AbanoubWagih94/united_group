<?php

namespace App\Http\Controllers\Admin\Website;

use App\Models\Website\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function create() {
        return view('admin.website.team.create');
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

        $row = Team::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $fileName
        ]);

        if($row) {
            return redirect()->route('udg.team')->with('success', 'Team created successfully');            
        }
    }

    public function edit($id) {
        $team = Team::findorFail($id);
        return view('admin.website.team.edit', compact('team'));
    }

    public function update(Request $request, $id) {
        $team = Team::findorFail($id);

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

            if($team->image !== NULL) {
                if(file_exists('uploads/'. $team->image)) {
                    unlink('uploads/'. $team->image);
                }
            }
        }

        $row = $team->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => isset($fileName) ? $fileName : $team->image,
        ]);

        if($row) {
            return redirect()->route('udg.team')->with('success', 'Team updated successfully');            
        }
    }

    public function delete($id) {
        $team = Team::findorFail($id);

        if($team->image !== NULL) {
            if(file_exists('uploads/'. $team->image)) {
                unlink('uploads/'. $team->image);
            }
        }

        $row = $team->delete();

        if($row) {
            return redirect()->route('udg.team')->with('success', 'Team deleted successfully');            
        }
    }
}
