@php

$lang = app()->getLocale();

$setting = App\Models\E_Tower\Setting::first();

$pageDetail = App\Models\E_Tower\PageDetail::first();

@endphp

@extends('front.website.layouts.master')

@section('title')
    {{ $setting->website_name_en }}
@endsection

@section('body_class')
inner-pages hd-white
@endsection

@push('custom-css-scripts')
   <style>
      .float {
         position: fixed !important;
         width: 75px;
         height: 75px;
         bottom: 20px;
         right: 40px;
         color: #000;
         border-radius: 50px;
         text-align: center;
         font-size: 30px;
         z-index: 100;
         background-color: #075E54;
      }

      .my-float {
         margin-top: 16px;
         margin-left: 2px;
      }
   </style>
@endpush

@section('content')

<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Careers</h1>
            <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Careers</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT US -->
<section class="contact-us bg-white-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h2 class="mb-4">Contact</h2><hr>
                <h3><a href="index.html">Home </a> &nbsp;/&nbsp; Careers</h3><hr><br>
                <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <h5 class="mt-3">Send Message</h5>
                    <hr>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <h4>Upload your CV : </h4>
                        <input type="file" class="" name="file">
                    </div>
                    <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>Get in Touch</h3>
                    <p class="mb-5">Please find below contact details and contact us today!</p>
                    <ul>
                        <li>
                            <p>Office Address :</p>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="in-p">95 South Park Ave, USA</p>
                            </div>
                        </li>
                        <li>
                            <p>Contact Number :</p>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">+456 875 369 208</p>
                            </div>
                        </li>
                        <li>
                            <p>Email Address :</p>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">support@findhouses.com</p>
                            </div>
                        </li>
                        <li>
                            <p>Career Info :</p>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT US -->

@endsection

@push('custom-js-scripts')

@endpush