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
inner-pages hd-white about
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
                <h1>{{ trans('about_us.about_title') }}</h1>
                <h2><a href="{{url($prefix)}}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; {{ trans('home.about-us') }}</h2>
            </div>
        </div>
    </section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION ABOUT -->
    <section class="about-us fh">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 who-1">
                    <div>
                        <h2 class="text-{{$dir}} mb-4">{{ $about->{'title_'.$lang} }}</h2>
                    </div>
                    <div class="pftext">
                        <p>{{ $about->{'description_'.$lang} }}</p>

                    </div>
                    <div class="box bg-2">
                        {{-- <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                        <img src="{{ asset('front/website/img/signature.png') }}" class="ml-5" alt=""> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="image" src="{{ asset('uploads/' . $about->image) }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- END SECTION ABOUT -->
@if(count($choose_us)>0)
<!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white-1">
        <div class="container">
            <div class="sec-title">
                <h2><span>{{trans('home.why')}} </span>{{trans('home.choose_us')}}</h2>
                <p>{{ trans('about_us.choose_us_text') }}</p>
            </div>
            <div class="row service-1">
                @foreach ($choose_us as $chooseUs)
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="{{ asset('uploads/' . $chooseUs->image) }}" alt="">
                            <h3>{{ $chooseUs->{'title_'.$lang} }}</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">{{ $chooseUs->{'description_'.$lang} }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
            </div>
        </div>
    </section>
<!-- END SECTION WHY CHOOSE US -->
@endif

@if(count($team) > 0)
<!-- START SECTION AGENTS -->
    <section class="team bg-white-2">
        <div class="container">
            <div class="sec-title">
                <h2><span>{{ trans('about_us.team') }}</span></h2>
                <p>{{ trans('about_us.choose_us_text') }}</p>
            </div>
            <div class="row team-all">
                @foreach ($team as $member)
                <div class="col-lg-3 col-md-6 team-pro">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('uploads/' . $member->image) }}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>{{$member->{'title_'.$lang} }}</h3>
                                <p>{{$member->{'description_'.$lang} }}</p>
                                {{-- <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="team-details.html">View Profile</a></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             
           
            </div>
        </div>
    </section>
<!-- END SECTION AGENTS -->
@endif 

@if (count($partners) > 0)
    <!-- STAR SECTION PARTNERS -->
<div class="partners  bg-white-3">
    <div class="container">
        <div class="sec-title">
            <h2><span>{{ trans('about_us.partners') }} </span></h2>
            <p>{{ trans('about_us.partners_text') }}</p>
        </div>
        <div class="owl-carousel style2">
          @foreach ($partners as $partner)
          <div class="owl-item"><img src="{{ asset('uploads/' . $partner->image) }}" alt=""></div>
          
          @endforeach
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->
@endif

@endsection

@push('custom-js-scripts')

@endpush
