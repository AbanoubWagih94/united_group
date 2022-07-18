<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Support\Str;
use App\Models\Website\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function create() {
        return view('admin.website.news.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title_en' => 'required|unique:news',
            'title_ar' => 'required|unique:news',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);
        }

        $row = News::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $fileName
        ]);

        if($row) {
            return redirect()->route('udg.news')->with('success', 'News created successfully');            
        }
    }

    public function edit($id) {
        $news = News::findorFail($id);
        return view('admin.website.news.edit', compact('news'));
    }

    public function update(Request $request, $id) {
        $news = News::findorFail($id);

        $this->validate($request, [
            'title_en' => 'required|unique:news,title_en,'.$id,
            'title_ar' => 'required|unique:news,title_ar,'.$id,
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($news->image !== NULL) {
                if(file_exists('uploads/'. $news->image)) {
                    unlink('uploads/'. $news->image);
                }
            }
        }

        $row = $news->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'slug_en' => Str::slug($request->title_en),
            'slug_ar' => $this->changeToSlug($request->title_ar),
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => isset($fileName) ? $fileName : $news->image,
        ]);

        if($row) {
            return redirect()->route('udg.news')->with('success', 'News updated successfully');            
        }
    }

    public function delete($id) {
        $news = News::findorFail($id);

        if($news->image !== NULL) {
            if(file_exists('uploads/'. $news->image)) {
                unlink('uploads/'. $news->image);
            }
        }

        $row = $news->delete();

        if($row) {
            return redirect()->route('udg.news')->with('success', 'News deleted successfully');            
        }
    }

    public function changeToSlug($name) {
        $slug = str_replace(' ', '-', $name);
        return $slug;
    }
}
