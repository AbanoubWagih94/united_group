<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Models\Website\ContactUs;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function update(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'office_hours' => 'required',
            'map_link' => 'required',
        ]);

        $contactUs = ContactUs::find(1);

        $row = $contactUs->update([
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'office_hours' => $request->office_hours,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'youtube_link' => $request->youtube_link,
            'map_link' => $request->map_link,
        ]);

        if($row) {
            return redirect()->back()->with('success', 'Contact Us updated successfully');
        }
    }
}
