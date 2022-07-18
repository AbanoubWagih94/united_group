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
                <h1>{{ trans('home.news') }}</h1>
                <h2><a href="{{ url($prefix) }}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; {{ trans('home.news') }}
                </h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog-section bg-white-1">
        <div class="container">
            <div class="news-wrap">

                <div class="row space port">
                    @foreach ($news as $new)
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="news-item">
                                <a href="{{ url($prefix . ($lang == 'en' ? 'news/' : 'الاخبار/') . $new->{'slug_' . $lang}) }}"
                                    class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{ asset('uploads/' . $new->image) }}"
                                            alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a
                                        href="{{ url($prefix . ($lang == 'en' ? 'news/' : 'الاخبار/') . $new->{'slug_' . $lang}) }}">
                                        <h3>{{ $new->{'title_' . $lang} }}</h3>
                                    </a>
                                    <div class="dates">
                                        <span
                                            class="date">{{ Carbon\Carbon::parse($new->creadted_at)->format('M d Y') }}</span>
                                        {{-- <ul class="action-list pl-0">
                                    <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul> --}}
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p class="three_lines">{{ $new->{'description_' . $lang} }}</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="{{ url($prefix . ($lang == 'en' ? 'news/' : 'الاخبار/') . $new->{'slug_' . $lang}) }}"
                                            class="news-link">{{ trans('home.read_more') }}...</a>
                                        <!--<div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="images/testimonials/ts-6.jpg" alt="">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <nav aria-label="..." class="pt-5">
                <ul class="pagination">
                    @if ($news->currentPage() != 1)
                        <li class="page-item prev">
                            <a class="page-link" href="{{ $news->previousPageUrl() }}">
                                {{ trans('home.prev') }}
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#">{{ trans('home.prev') }}</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $news->lastPage(); $i++)
                        @if ($i == $news->currentPage())
                            <li class="page-item active"><a class="page-link">{{ $i }} <span
                                        class="sr-only">(current)</span></a></li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $news->url($i) }}">
                                    {{ $i }}&nbsp;
                                </a>
                            </li>
                        @endif
                    @endfor

                    <li class="page-item next">
                        @if ($news->currentPage() != $news->lastPage())
                            <a class="page-link" href="{{ $news->nextPageUrl() }}">
                                {{ trans('home.next') }}
                            </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            {{ trans('home.next') }}
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection

@push('custom-js-scripts')
@endpush
