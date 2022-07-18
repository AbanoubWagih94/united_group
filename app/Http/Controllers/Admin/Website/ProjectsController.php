<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Website\Project;
use App\Http\Controllers\Controller;
use App\Models\Website\ProjectImages;

class ProjectsController extends Controller
{
    public function create() {
        return view('admin.website.projects.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title_en' => 'required|unique:projects',
            'title_ar' => 'required|unique:projects',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
            'images.*'=> 'required|mimes:jpg,png,jpeg,svg',
            'video' => 'required',
            'location' => 'required'
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }
   
        $row = Project::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $fileName,
            'video' => $request->video,
            'location' => $request->location
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $file = $image;
                $fileName = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads', $fileName);
                ProjectImages::create([
                    'project_id' => $row->id,
                    'image' => $fileName,
                ]);
            }
        }

        if($row) {
            return redirect()->route('udg.projects')->with('success', 'Project created successfully');            
        }
    }

    public function edit($id) {
        $project = Project::findorFail($id);
        return view('admin.website.projects.edit', compact('project'));
    }

    public function update(Request $request, $id) {
        $project = Project::findorFail($id);

        $this->validate($request, [
            'title_en' => 'required|unique:projects,title_en,'.$id,
            'title_ar' => 'required|unique:projects,title_ar,'.$id,
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
            'images.*'=> 'nullable|mimes:jpg,png,jpeg,svg',
            'video' => 'required',
            'location' => 'required'
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($project->image !== NULL) {
                if(file_exists('uploads/'. $project->image)) {
                    unlink('uploads/'. $project->image);
                }
            }
        }

        $row = $project->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => isset($fileName) ? $fileName : $project->image,
            'video' => $request->video,
            'location' => $request->location
        ]);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $file = $image;
                $fileName = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads', $fileName);
                ProjectImages::create([
                    'project_id' => $project->id,
                    'image' => $fileName,
                ]);
            }
        }

        if($row) {
            return redirect()->route('udg.projects')->with('success', 'Project updated successfully');            
        }
    }

    public function delete($id) {
        $project = Project::findorFail($id);

        if($project->image !== NULL) {
            if(file_exists('uploads/'. $project->image)) {
                unlink('uploads/'. $project->image);
            }
        }

        foreach($project->project_images as $projectImage) {
            if(file_exists('uploads/'. $projectImage->image)) {
                unlink('uploads/'. $projectImage->image);
            }
        }
        
        $row = $project->project_images()->delete();

        $row = $project->delete();

        if($row) {
            return redirect()->route('udg.projects')->with('success', 'Project deleted successfully');            
        }
    }

    public function removeImage($imageId) {
        $projectImage = ProjectImages::findorFail($imageId);

        if(file_exists('uploads/'. $projectImage->image)) {
            unlink('uploads/'. $projectImage->image);
        }

        $row = $projectImage->delete();

        if($row) {
            return redirect()->back()->with('success', 'Project Image deleted successfully');            
        }
    }

    public function changeToSlug($name) {
        $slug = str_replace(' ', '-', $name);
        return $slug;
    }
}
