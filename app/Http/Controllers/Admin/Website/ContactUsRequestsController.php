<?php

namespace App\Http\Controllers\Admin\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Website\ContactUsRequest;

class ContactUsRequestsController extends Controller
{
    public function show($id) {
        $contactUsRequest = ContactUsRequest::findorFail($id);

        return view('admin.website.contact_us_requests.show', compact('contactUsRequest'));
    }

    public function delete($id) {
        $contactUsRequest = ContactUsRequest::findorFail($id);

        $row = $contactUsRequest->delete();

        if($row) {
            return redirect()->route('udg.contact_us_requests')->with('success', 'Contact Us Request deleted successfully');            
        }
    }
}
