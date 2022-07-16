<?php

namespace App\Http\Controllers\Admin\E_Tower;

use App\Models\E_Tower\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function update(Request $request) {        
        $this->validate($request, [
            'website_name_en' => 'required',
            'website_name_ar' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:11',
            'address' => 'required',
            'logo_image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        $setting = Setting::find(1);

        $requestArray = $request->all();

        if($request->hasFile('logo_image')) {
            $file = $request->file('logo_image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads', $fileName);

            if($setting->logo_image !== NULL) {
                if (file_exists('uploads/'. $setting->logo_image)) {
                    unlink('uploads/'. $setting->logo_image);
                }
            }
        }

        $row = $setting->update([
            'website_name_en' => $request->website_name_en,
            'website_name_ar' => $request->website_name_ar,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'logo_image' => isset($fileName) ? $fileName : $setting->logo_image,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'youtube_link' => $request->youtube_link,
            'map_link' => $request->map_link,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'keywords_en' => $request->keywords_en,
            'keywords_ar' => $request->keywords_ar,
            'header_code' => $request->header_code,
            'footer_code' => $request->footer_code,
        ]);

        if($row) {
            return redirect()->back()->with('success', 'Settings updated successfully');
        }
    }
}
