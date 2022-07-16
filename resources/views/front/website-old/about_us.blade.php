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
                <h1>About Our Company</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; About Us</h2>
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
                        <h2 class="text-left mb-4">About <span>Find Houses</span></h2>
                    </div>
                    <div class="pftext">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                    </div>
                    <div class="box bg-2">
                        <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                        <img src="{{ asset('front/website/img/signature.png') }}" class="ml-5" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="image" src="{{ asset('front/website/img/bg-video.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- END SECTION ABOUT -->

<!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white-1">
        <div class="container">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="{{ asset('front/website/img/i-1.svg') }}" alt="">
                            <h3>Passion</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{ asset('front/website/img/i-2.svg') }}" alt="">
                            <h3>Honesty</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="{{ asset('front/website/img/i-3.svg') }}" alt="">
                            <h3>Logic</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
<!-- END SECTION WHY CHOOSE US -->

<!-- START SECTION AGENTS -->
    <section class="team bg-white-2">
        <div class="container">
            <div class="sec-title">
                <h2><span>Our </span>Team</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row team-all">
                <div class="col-lg-3 col-md-6 team-pro">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('front/website/img/t-5.jpg') }}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Carls Jhons</h3>
                                <p>Financial Advisor</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="team-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('front/website/img/t-6.jpg') }}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Arling Tracy</h3>
                                <p>Acountant</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="team-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro pb-none">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('front/website/img/t-7.jpg') }}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Mark Web</h3>
                                <p>Founder &amp; CEO</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="team-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro kat">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('front/website/img/t-8.jpg') }}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Katy Grace</h3>
                                <p>Team Leader</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="team-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- END SECTION AGENTS -->

<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white-3">
    <div class="container">
        <div class="sec-title">
            <h2><span>Our </span>Partners</h2>
            <p>The Companies That Represent Us.</p>
        </div>
        <div class="owl-carousel style2">
            <div class="owl-item"><img src="{{ asset('front/website/img/100.jpg') }}" alt=""></div>
            <div class="owl-item"><img src="{{ asset('front/website/img/101.jpg') }}" alt=""></div>
            <div class="owl-item"><img src="{{ asset('front/website/img/102.jpg') }}" alt=""></div>
            <div class="owl-item"><img src="{{ asset('front/website/img/103.jpg') }}" alt=""></div>
            <div class="owl-item"><img src="{{ asset('front/website/img/104.jpg') }}" alt=""></div>
            <div class="owl-item"><img src="{{ asset('front/website/img/105.jpg') }}" alt=""></div>
            <div class="owl-item"><img src="{{ asset('front/website/img/106.jpg') }}" alt=""></div>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->
@endsection

@push('custom-js-scripts')

@endpush