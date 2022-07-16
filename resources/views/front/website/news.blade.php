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
            <h1>News</h1>
            <h2><a href="index.html">Home </a> &nbsp;/&nbsp; News</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog-section bg-white-1">
    <div class="container">
        <div class="news-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-10.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Lisa Jhonson</p>
                                    <img src="{{ asset('front/website/img/b-10.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-11.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-11.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-12.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, katy Teddy</p>
                                    <img src="{{ asset('front/website/img/b-12.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row space port">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-10.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-10.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-11.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-11.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-12.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-12.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-10.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-10.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-11.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-11.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12 no-mb">
                    <div class="news-item">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{ asset('front/website/img/b-12.jpg') }}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}"><h3>Real Estate News</h3></a>
                            <div class="dates">
                                <span class="date">April 11, 2020 &nbsp;/</span>
                                <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار/e-tower' : 'news/e-tower')) }}" class="news-link">Read more...</a>
                                <div class="admin">
                                    <p>By, Karl Smith</p>
                                    <img src="{{ asset('front/website/img/b-12.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="..." class="pt-5">
            <ul class="pagination mt-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection

@push('custom-js-scripts')

@endpush