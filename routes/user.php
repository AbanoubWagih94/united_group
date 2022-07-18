<?php

use App\Mail\CareerEmail;
use App\Mail\Contact_usMail;
use App\Models\Website\AboutUsDetail;
use App\Models\Website\Career;
use App\Models\Website\ContactUs;
use App\Models\Website\ContactUsRequest;
use App\Models\Website\Event;
use App\Models\Website\Exhibition;
use App\Models\Website\News;
use App\Models\Website\Partner;
use App\Models\Website\Project;
use App\Models\Website\Team;
use App\Models\Website\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

    Route::get('/', function() {
        $link = '/ar';
        return view('front.website.welcome', compact('link'));
    });

    Route::get('/about-us', function() {
        $link = '/ar/من-نحن';
        $about = AboutUsDetail::first();
        $choose_us = WhyChooseUs::get();
        $partners = Partner::get();
        $team = Team::get();
        return view('front.website.about_us', compact('link', 'about', 'choose_us', 'team','partners'));
    });

    Route::get('/projects', function() {
        $link = '/ar/المشاريع';
        $projects = Project::paginate(9);
        return view('front.website.projects', compact('link', 'projects'));
    });

    Route::get('/projects/{slug}', function($slug) {
        $project = Project::where('slug_en', $slug)->first();
        $link = '/ar/المشاريع/'.$project->slug_ar;
        return view('front.website.project_details', compact('link','project'));
    });

    Route::get('/events', function() {
        $link = '/ar/الاحداث';
        $events = Event::get();
        return view('front.website.events', compact('link','events'));
    });

    Route::get('/events/{slug}', function($slug) {
        $event = Event::where('slug_en', $slug)->first();
        $link = '/ar/الاحداث/'.$event->slug_ar;
        return view('front.website.event_details', compact('link', 'event'));
    });

    Route::get('/exhibitions', function() {
        $link = '/ar/المعارض';
        $exhibitions = Exhibition::get();
        return view('front.website.exhibitions', compact('link', 'exhibitions'));
    });

    Route::get('/exhibitions/{slug}', function($slug) {
        $exhib = Exhibition::where('slug_en', $slug)->first();
        $link = '/ar/المعارض/'.$exhib->slug_ar;
        return view('front.website.exhibition_details', compact('link','exhib'));
    });

    Route::get('/news', function() {
        $link = '/ar/الاخبار';
        $news = News::paginate(9);
        return view('front.website.news', compact('link', 'news'));
    });

    Route::get('/news/{slug}', function($slug) {
        $new = News::where('slug_en', $slug)->first();
        $link = '/ar/الاخبار/'. $new->slug_ar;
        $news = News::where('id', '!=', $new->id)->orderBy('created_at','desc')->limit(5)->get(); 
        return view('front.website.news_details', compact('link', 'new', 'news'));
    });

    Route::get('/careers', function() {
        $link = '/ar/الوظائف';
        return view('front.website.careers', compact('link'));
    });

    Route::get('/contact-us', function() {
        $link = '/ar/تواصل-معنا';
        $contactUs = ContactUs::first();
        return view('front.website.contact_us', compact('link', 'contactUs')); 
    });
    
    Route::post('contact-us-request', function(Request $request) {
        $lang = app()->getLocale();
 
         $mssages = [
             'name.required' => trans('contact_us.first_name_required'),
             'lastname.required' => trans('contact_us.last_name_required'),
             'email.required' => trans('contact_us.email_required'),
             'email.email' => trans('contact_us.email_email'),
             'message.required' => trans('contact_us.message_required'),
             'phone.required' => trans('contact_us.phone_required'),
         ];
         $request->validate([
             'name' => 'required',
             'lastname' => 'required',
             'email' => 'required|email',
             'message' => 'required',
             'phone' => 'required',
         ], $mssages);
 
         $contactUs = ContactUs::first();
 
         $ContactRequest = ContactUsRequest::create([
             'first_name'=> $request->name,
             'last_name'=> $request->lastname,
             'email'=> $request->email,
             'message'=> $request->message,
             'phone'=> $request->phone,
         ]);
         if($ContactRequest) {
             if($contactUs != null && $contactUs->email != null) {
                 Mail::to($contactUs->email)->send(new Contact_usMail($ContactRequest));
             }
             return redirect()->back()->with('success', $lang =='ar'?'تم إرسال الرسالة بنجاح': 'Your Message Send Successfully');
 
         } else {
                 return redirect()->back()->with('error', $lang =='ar'?'حدث خطا ما حاول مرة اخرى': 'Something goes wrong try again later');
     
         }
     });


     Route::post('career-request', function(Request $request) {
        $lang = app()->getLocale();
         $mssages = [    
             'name.required' => trans('contact_us.full_name_required'),
             'email.required' => trans('contact_us.email_required'),
             'email.email' => trans('contact_us.email_email'),
             'message.required' => trans('contact_us.message_required'),
             'current_salary.required' => trans('contact_us.current_salary_required'),
             'expected_salary.required' => trans('contact_us.expected_salary_required'),
             'graduation_year.required' => trans('contact_us.graduation_year_required'),
             'phone.required' => trans('contact_us.phone_required'),
             'file.required' => trans('contact_us.file_required'),
             'file.mimes' => trans('contact_us.file_type'),
         ];
         $request->validate([
             'name' => 'required',
             'current_salary' => 'required',
             'expected_salary' => 'required',
             'graduation_year' => 'required',
             'email' => 'required|email',
             'message' => 'required',
             'phone' => 'required',
             'file'=> 'required'
         ], $mssages);
 
         $contactUs = ContactUs::first();
         $fileName ='';
         
         if($request->has('file')) {
             $file = $request->file('file');
             $fileName = $request->name.'.'.$file->getClientOriginalExtension();
             $file->move('uploads/cvs', $fileName);
         if(isset($fileName)) {
             $career = Career::create([
                 'name'=> $request->name,
                 'email'=> $request->email,
                 'message'=> $request->message,
                 'phone'=> $request->phone,
                 'expected_salary'=> $request->expected_salary,
                 'current_salary'=> $request->current_salary,
                 'graduation_year'=> $request->graduation_year,
                 'cv'=> $fileName
             ]);
             if($career) {
                 if($contactUs != null && $contactUs->email != null) {
                     Mail::to($contactUs->email)->send(new CareerEmail($career));
                 }
                 return redirect()->back()->with('success', $lang =='ar'?'تم إرسال الرسالة بنجاح': 'Your Message Send Successfully');
 
             } else {
 
                 return redirect()->back()->with('error', $lang =='ar'?'حدث خطا ما حاول مرة اخرى': 'Something goes wrong try again later')->withInput();
             }
         }  }else {
             return redirect()->back()->with('error', $lang =='ar'?'حدث خطا ما حاول مرة اخرى': 'Something goes wrong try again later')->withInput();
 
         }
         
         
     });
?>