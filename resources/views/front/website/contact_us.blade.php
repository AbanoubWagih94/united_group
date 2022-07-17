@php

$lang = app()->getLocale();

$dir = 'left';
$dir2 = 'right';
$prefix = '';

if ($lang == 'en') {
    $dir = 'left';
    $dir2 = 'right';
    $prefix = '/';
} else {
    $dir = 'right';
    $dir2 = 'left';
    $prefix = 'ar/';
}

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
            <h1>{{ trans('home.contact_us') }}</h1>
            <h2><a href="{{url($prefix)}}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; {{ trans('home.contact_us') }}</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<section class="bg-white-3">
    <div class="container">
       <h3 class="mt-3 mb-3">{{ trans('contact_us.our_location') }}</h3>
       <div class="property-location">
          <div class="divider-fade"></div>
          @php
             $location_link = $pageDetail->location_link;
             $location_embed = substr($location_link, strpos($location_link, "=") + 1);    
          @endphp
          <iframe src="https://www.google.com/maps/embed?pb={{$location_embed}}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </div>
</section>

<!-- START SECTION CONTACT US -->
<section class="contact-us bg-white-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="mb-4">{{ trans('home.contact_us') }}</h3>
                <form  id="contact-form" method="post" action="{{url($prefix.'contact-us-request')}}">
                    @csrf
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">{{trans('contact_us.success_message')}}</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>{{trans('contact_us.error_message')}}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="name"
                            placeholder="{{trans('contact_us.first_name')}}" required>
                            @if ($errors->has('name'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('name') }} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="lastname"
                            placeholder="{{trans('contact_us.last_name')}}" required>
                            @if ($errors->has('last_name'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('last_name') }} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-custom input-full" name="email"
                            placeholder="{{trans('contact_us.email')}}" required>
                            @if ($errors->has('email'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('email') }} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-custom input-full" name="phone"
                            placeholder="{{trans('contact_us.phone')}}" required>
                            @if ($errors->has('phone'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('phone') }} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8"
                            placeholder="{{trans('contact_us.message')}}" required></textarea>
                            @if ($errors->has('message'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('message') }} </strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" id="contact-form" class="btn btn-primary btn-lg">{{trans('contact_us.submit')}}</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>{{trans('contact_us.contact_details')}}</h3>
                    <p class="mb-5">{{ trans('contact_us.details_message') }}</p>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="in-p">{{ $contactUs->address }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">{{ $contactUs->mobile }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">{{ $contactUs->email }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p ti">{{ $contactUs->office_hours }}</p>
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