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
                <h1>E-Tower</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Exhibitions &nbsp;/&nbsp; E-Tower</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES FOR RENT -->
    <section class="featured portfolio bg-white-3 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>E-Tower</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="full-row pt-0">
                <div class="container">
                    <div class="row row-cols-md-3 row-cols-1 g-4">
                        <div class="col">
                            <div class="row row-cols-1 g-4">
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-1.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-1.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-2.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-2.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-4.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-4.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col">
                            <div class="row row-cols-1 g-4">
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-5.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-5.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-4.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-4.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-6.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-6.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col">
                            <div class="row row-cols-1 g-4">
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-4.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-4.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-7.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-7.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gallery-one">
                                        <div class="photo-overlay">
                                            <a href="{{ asset('front/website/img/grid-1.png') }}" class="photo-view transation xy-center" data-fancybox="gallery" data-caption="Caption for image">
                                                <i class="fas fa-eye" style="color: white"></i>
                                            </a>
                                            <img src="{{ asset('front/website/img/grid-1.png') }}" alt="real estate template">
                                        </div>
                                        <div class="portfolio-info mt-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR RENT -->
@endsection

@push('custom-js-scripts')

@endpush