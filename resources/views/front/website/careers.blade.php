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

$contactUs = App\Models\Website\ContactUs::first();
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
            <h1>{{ trans('home.careers') }}</h1>
            <h2><a href="{{url($prefix)}}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; {{ trans('home.careers') }}</h2>
        </div>
    </div>
</section>

<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT US -->
<section class="contact-us bg-white-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h2 class="mb-4">{{ trans('contact_us.contact') }}</h2><hr>
                <h3><a href="{{url($prefix)}}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; {{ trans('home.careers') }}</h3><hr><br>
                <form id="careerform" class="contact-form" action="{{url($prefix.'career-request')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">{{trans('contact_us.success_message')}}</p>
                    </div>
                    <h5 class="mt-3">{{ trans('contact_us.send_message') }}</h5>
                    <hr>
                    <div id="error" class="errorform">
                        <p>{{trans('contact_us.error_message')}}</p>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>{{ trans('contact_us.full_name') }}</label>
                            <input type="text" required class="form-control input-custom input-full" value="{{old('name')}}" name="name" placeholder="{{trans('contact_us.full_name')}}">
                            @if ($errors->has('name'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('name') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ trans('contact_us.email') }}</label>
                            <input type="email" class="form-control input-custom input-full" value="{{old('email')}}" name="email" placeholder="{{trans('contact_us.email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('email') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('contact_us.phone') }}</label>
                        <input type="text" class="form-control input-custom input-full" name="phone" value="{{old('phone')}}"
                            placeholder="{{trans('contact_us.phone')}}" required>
                            @if ($errors->has('phone'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('phone') }} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>{{ trans('contact_us.current_salary') }}</label>
                            <input type="number" required class="form-control input-custom input-full" value="{{old('current_salary')}}" name="current_salary" placeholder="{{trans('contact_us.current_salary')}}">
                            @if ($errors->has('current_salary'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('current_salary') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ trans('contact_us.expected_salary') }}</label>
                            <input type="number" required class="form-control input-custom input-full" value="{{old('expected_salary')}}" name="expected_salary" placeholder="{{trans('contact_us.expected_salary')}}">
                            @if ($errors->has('expected_salary'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('expected_salary') }} </strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('contact_us.graduation_year') }}</label>
                        <input type="date" required class="form-control input-custom input-full" value="{{old('graduation_year')}}" name="graduation_year" placeholder="{{trans('contact_us.graduation_year')}}" >
                        @if ($errors->has('message'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('message') }} </strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                        <label>{{ trans('contact_us.message') }}</label>
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="{{trans('contact_us.message')}}">{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('message') }} </strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                        <h4>{{ trans('contact_us.upload_cv') }} : </h4>
                        <input type="file" class="" name="file" required>
                        @if ($errors->has('file'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('file') }} </strong>
                        </span>
                    @endif
                    </div>
                    <button type="submit" id="careerform" class="btn btn-primary btn-lg">{{trans('contact_us.submit')}}</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>{{trans('contact_us.contact_details')}}</h3>
                        <p class="mb-5">{{ trans('contact_us.details_message') }}</p>
                    <ul>
                        <li>
                            <p>{{ trans('contact_us.address') }} :</p>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="in-p">{{ $contactUs->address }}</p>
                            </div>
                        </li>
                        <li>
                            <p>{{ trans('contact_us.number') }} :</p>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">{{ $contactUs->mobile }}</p>
                            </div>
                        </li>
                        <li>
                            <p>{{ trans('contact_us.email') }} :</p>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">{{ $contactUs->email }}</p>
                            </div>
                        </li>
                        <li>
                            <p>{{ trans('contact_us.bussiness_hours') }} :</p>
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