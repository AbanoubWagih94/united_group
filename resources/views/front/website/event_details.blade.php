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
inner-pages hd-white homepage-9 hp-6 homepage-1
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

      .head-tr.bottom {
        background: rgba(255, 255, 255, 0.12) !important;
        border-top: 1px solid rgba(255, 255, 255, 0.2) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    .photo-overlay {
        position: relative;
        overflow: hidden;
    }
    .photo-overlay::before {
        content: "";
        position: absolute;
        background: rgba( var(--theme-primary-color-rgba), 0.9);
        height: 100%;
        left: 20%;
        right: 20%;
        top: 0;
        bottom: 0;
        opacity: 0;
    }
    .photo-overlay:hover::before {
        opacity: 1;
        left: 0;
        right: 0;
    }
    .photo-overlay a.photo-view {
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 100%;
        background: #e2b16e;
        position: absolute;
        display: block;
        z-index: 10;
        text-align: center;
        opacity: 0;
        top: 50%;
        left: 50%;
    }
    .photo-overlay:hover a.photo-view {
        opacity: 1;
        margin-left: -24px;
    }
   </style>
@endpush

@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>{{$event->{'title_'.$lang} }}</h1>
                <h2><a href="{{url($prefix)}}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث' : 'events')) }}">{{ trans('home.events') }} </a> &nbsp;/&nbsp; {{$event->{'title_'.$lang} }}</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES FOR RENT -->
    <section class="featured portfolio bg-white-3 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>{{$event->{'title_'.$lang} }}</h2>
                <p>{{ trans('about_us.choose_us_text') }}</p>
            </div>
            <div class="full-row pt-0">
                <div class="container">
                    @if (count($event->event_images)>0)
                        
                    <div class="row row-cols-md-3 row-cols-1 g-4">
                    @for ($i = 0; $i < count($event->event_images); $i+=3)
                        <div class="col">
                        <div class="row row-cols-1 g-4">
                            @if (isset($event->event_images[$i]))
                            <div class="col">
                                <div class="gallery-one">
                                    <div class="photo-overlay">
                                        <a href="{{ asset('uploads/'.$event->event_images[$i]->image ) }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                            <i class="fas fa-eye" style="color: white"></i>
                                        </a>
                                        <img src="{{asset('uploads/'.$event->event_images[$i]->image ) }}" alt="real estate template">
                                    </div>
                                    <div class="portfolio-info mt-3">
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if (isset($event->event_images[$i+1]))
                            <div class="col">
                                <div class="gallery-one">
                                    <div class="photo-overlay">
                                        <a href="{{ asset('uploads/'.$event->event_images[$i+1]->image ) }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                            <i class="fas fa-eye" style="color: white"></i>
                                        </a>
                                        <img src="{{ asset('uploads/'.$event->event_images[$i+1]->image )}}" alt="real estate template">
                                    </div>
                                    <div class="portfolio-info mt-3">

                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            @if (isset($event->event_images[$i+2]))
                            <div class="col">
                                <div class="gallery-one">
                                    <div class="photo-overlay">
                                        <a href="{{ asset('uploads/'.$event->event_images[$i+2]->image ) }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                            <i class="fas fa-eye" style="color: white"></i>
                                        </a>
                                        <img src="{{ asset('uploads/'.$event->event_images[$i+2]->image )}}" alt="real estate template">
                                    </div>
                                    <div class="portfolio-info mt-3">

                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        </div>     
                    @endfor
                </div>
                   
                    @else
                                   
                    <p style="text-align: center;">{{$lang == 'ar'? 'لايوجد صور لهذا الحدث': 'No Iamges found for this event'}}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR RENT -->
@endsection

@push('custom-js-scripts')

@endpush