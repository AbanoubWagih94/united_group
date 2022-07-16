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

@endphp

<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="">
    <meta name="description" content="{{ $setting->description_en }}">
    <meta name="keywords" content="{{ $setting->keywords_en }}">

    <title>@yield('title')</title>

    @include('front.website.layouts.scripts.css')

    <!-- Page CSS -->
    @stack('custom-css-scripts')

    {!! $setting->header_code !!}

    <style>
        .portfolio .homes-content .homes-address a i {
            margin-{{ $dir2 }}: 10px !important;
            margin-{{ $dir }}: 0px !important;
        }

        .inner-pages .portfolio .homes-content .homes-list {
            padding-{{ $dir }}: 0px;
        }

        .portfolio .homes-content .homes-list li {
            float: {{ $dir }};
        }

        .blog-section .admin p {
            margin-{{ $dir2 }}: 1rem;
        }

        .inner-pages .recent-img img {
            margin-{{ $dir2 }}: 1rem;
            margin-{{ $dir }}: 0;
        }

        @if($lang == 'ar')
            .homepage-9 section.portfolio {
                direction:ltr
            }

            .inner-pages .portfolio .homes-content {
                direction:rtl
            }
        @endif
    </style>

  </head>

  <body class="@yield('body_class')">
    <div id="wrapper" class="int_main_wraapper">

            @include('front.website.layouts.header')

            @yield('content')

            @include('front.website.layouts.footer')

            <a data-scroll href="https://wa.me/+2{{ $setting->mobile }}" target="_blank" class="go-up">
                <i class="fab fa-whatsapp" style="font-size: 40px; color: #25D366;"></i>
            </a>

            {{-- <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div> --}}

            {{-- <a href="https://wa.me/+2{{ $setting->mobile }}" target="_blank" class="float">
              <i class="fab fa-whatsapp my-float" style="font-size: 40px; color: #25D366;"></i>
            </a> --}}

            @include('front.website.layouts.scripts.js')

            @stack('custom-js-scripts')

    </div>
  </body>
</html>
