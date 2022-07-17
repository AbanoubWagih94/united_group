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
                <h1>{{ $new->{'title_' . $lang} }}</h1>
                <h2><a href="{{ url($prefix) }}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; <a
                        href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار' : 'news')) }}">{{ trans('home.news') }}</a>
                    &nbsp;/&nbsp; {{ $new->{'title_' . $lang} }}</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog blog-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="news-item details no-mb2">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{ asset('uploads/' . $new->image) }}"
                                            alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text details pb-0">
                                    <a href="blog-details.html">
                                        <h3>{{ $new->{'title_' . $lang} }}</h3>
                                    </a>
                                    <div class="dates">
                                        <span
                                            class="date">{{ Carbon\Carbon::parse($new->creadted_at)->format('M d Y') }}</span>
                                    </div>
                                    <div class="news-item-descr big-news details visib mb-0"
                                        style="height: auto !important">
                                        <p class="mb-3">{{ $new->{'description_' . $lang} }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="leve-comments wpb">
                        <h3 class="mb-5">{{ trans('news.comment') }}</h3>
                        <div class="row">
                            <div class="col-md-12 data">
                                <form action="#">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="{{trans('contact_us.first_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="{{trans('contact_us.last_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="{{trans('contact_us.email')}}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="{{trans('contact_us.message')}}" required></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg mt-2">{{ trans('news.submit') }}</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
              @if (count($news)>0)
              <aside class="col-lg-3 col-md-12">
                <div class="widget">
                    <div class="recent-post pt-5">
                        <h5 class="font-weight-bold mb-4">{{ trans('news.recent') }}</h5>
                        @foreach ($news as $latestnew)
                            <div class="recent-main">
                                <div class="recent-img">
                                    <a href=" {{url($prefix . ($lang == 'en' ? 'news/' : 'الاخبار/') . $latestnew->{'slug_' . $lang})}}"><img src="{{ asset('uploads/'. $latestnew->image) }}"
                                            alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ url($prefix . ($lang == 'en' ? 'news/' : 'الاخبار/') . $latestnew->{'slug_' . $lang})}}">
                                        <h6>{{$latestnew->{'title_'.$lang} }}</h6>
                                    </a>
                                    <p>{{Carbon\Carbon::parse($latestnew->creadted_at)->format('M d Y')}}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </aside>
              @endif
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection

@push('custom-js-scripts')
@endpush
