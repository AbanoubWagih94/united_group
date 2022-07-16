<?php

    Route::get('/', function() {
        $link = '/';
        return view('front.website.welcome', compact('link'));
    });

    Route::get('/من-نحن', function() {
        $link = '/about_us';
        return view('front.website.about_us', compact('link'));
    });

    Route::get('/المشاريع', function() {
        $link = '/projects';
        return view('front.website.projects', compact('link'));
    });

    Route::get('/المشاريع/e-tower', function() {
        $link = '/projects';
        return view('front.website.project_details', compact('link'));
    });

    Route::get('/الاحداث', function() {
        $link = '/events';
        return view('front.website.events', compact('link'));
    });

    Route::get('/الاحداث/e-tower', function() {
        $link = '/events';
        return view('front.website.event_details', compact('link'));
    });

    Route::get('/المعارض', function() {
        $link = '/exhibitions';
        return view('front.website.exhibitions', compact('link'));
    });

    Route::get('/المعارض/e-tower', function() {
        $link = '/exhibitions';
        return view('front.website.exhibition_details', compact('link'));
    });

    Route::get('/الاخبار', function() {
        $link = '/news';
        return view('front.website.news', compact('link'));
    });

    Route::get('/الاخبار/e-tower', function() {
        $link = '/news';
        return view('front.website.news_details', compact('link'));
    });

    Route::get('/الوظائف', function() {
        $link = '/careers';
        return view('front.website.careers', compact('link'));
    });

    Route::get('/تواصل-معنا', function() {
        $link = '/contact-us';
        return view('front.website.contact_us', compact('link'));
    });

?>