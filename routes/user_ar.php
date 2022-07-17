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
        $link = '/';
        return view('front.website.welcome', compact('link'));
    });

    Route::get('/من-نحن', function() {
        $link = 'about-us';
        $about = AboutUsDetail::first();
        $choose_us = WhyChooseUs::get();
        $partners = Partner::get();
        $team = Team::get();
        return view('front.website.about_us', compact('link', 'about', 'choose_us', 'team','partners'));
    });

    Route::get('/المشاريع', function() {
        $link = '/projects';
        $projects = Project::paginate(9);
        return view('front.website.projects', compact('link', 'projects'));
    });

    Route::get('/المشاريع/{slug}', function($slug) {
        $project = Project::where('slug_ar', $slug)->first();
        $link = '/projects/'.$project->slug_en;
        return view('front.website.project_details', compact('link','project'));
    });

    Route::get('/الاحداث', function() {
        $link = '/events';
        $events = Event::get();
        return view('front.website.events', compact('link','events'));
    });

    Route::get('/الاحداث/{slug}', function($slug) {
        $event = Event::where('slug_ar', $slug)->first();
        $link = '/events/'.$event->slug_en;
        return view('front.website.event_details', compact('link','event'));
    });

    Route::get('/المعارض', function() {
        $link = '/exhibitions';
        $exhibitions = Exhibition::get();
        return view('front.website.exhibitions', compact('link', 'exhibitions'));
    });

    Route::get('/المعارض/{slug}', function($slug) {
        $exhib = Exhibition::where('slug_ar', $slug)->first();
        $link = '/exhibitions/'.$exhib->slug_en;
        return view('front.website.exhibition_details', compact('link','exhib'));
    });

    Route::get('/الاخبار', function() {
        $link = '/news';
        $news = News::paginate(9);
        return view('front.website.news', compact('link', 'news'));
    });

    Route::get('/الاخبار/{slug}', function($slug) {
        $new = News::where('slug_ar', $slug)->first();
        $link = '/news/'. $new->slug_en;
        $news = News::where('id', '!=', $new->id)->orderBy('created_at','desc')->limit(5)->get(); 
        return view('front.website.news_details', compact('link', 'new', 'news'));
    });

    Route::get('/الوظائف', function() {
        $link = '/careers';
        return view('front.website.careers', compact('link'));
    });

    Route::get('/تواصل-معنا', function() {
        $link = '/contact-us';
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
