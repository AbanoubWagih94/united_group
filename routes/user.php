<?php

    Route::get('/', function() {
        $link = '/ar';
        return view('front.website.welcome', compact('link'));
    });

    Route::get('/about-us', function() {
        $link = '/ar/من-نحن';
        return view('front.website.about_us', compact('link'));
    });

    Route::get('/projects', function() {
        $link = '/ar/المشاريع';
        return view('front.website.projects', compact('link'));
    });

    Route::get('/projects/e-tower', function() {
        $link = '/ar/المشاريع';
        return view('front.website.project_details', compact('link'));
    });

    Route::get('/events', function() {
        $link = '/ar/الاحداث';
        return view('front.website.events', compact('link'));
    });

    Route::get('/events/e-tower', function() {
        $link = '/ar/الاحداث';
        return view('front.website.event_details', compact('link'));
    });

    Route::get('/exhibitions', function() {
        $link = '/ar/المعارض';
        return view('front.website.exhibitions', compact('link'));
    });

    Route::get('/exhibitions/e-tower', function() {
        $link = '/ar/المعارض';
        return view('front.website.exhibition_details', compact('link'));
    });

    Route::get('/news', function() {
        $link = '/ar/الاخبار';
        return view('front.website.news', compact('link'));
    });

    Route::get('/news/e-tower', function() {
        $link = '/ar/الاخبار';
        return view('front.website.news_details', compact('link'));
    });

    Route::get('/careers', function() {
        $link = '/ar/الوظائف';
        return view('front.website.careers', compact('link'));
    });

    Route::get('/contact-us', function() {
        $link = '/ar/تواصل-معنا';
        return view('front.website.contact_us', compact('link'));
    });
    

?>