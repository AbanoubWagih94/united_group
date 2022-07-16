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
   </style>
@endpush

@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Events</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Events</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES FOR RENT -->
    <section class="featured portfolio bg-white-3 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>Events</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-12.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single" data-aos="fade-up" data-aos-delay="250">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-11.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single" data-aos="fade-up" data-aos-delay="350">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-8.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single no-mb" data-aos="fade-up" data-aos-delay="450">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-12.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single no-mb" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-11.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single no-mb last" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-8.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-12.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="{{ asset('front/website/img/fp-11.jpg') }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Beds</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Baths</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث/e-tower' : 'events/e-tower')) }}">$ 120,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
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