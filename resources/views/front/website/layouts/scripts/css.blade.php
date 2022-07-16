@php
    $lang = app()->getLocale();
@endphp

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="{{ asset('front/website/css/jquery-ui.css') }}">

<link rel="stylesheet" href="{{ asset('front/website/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/font-awesome.min.css') }}">
<!-- Slider Revolution CSS Files -->
<link rel="stylesheet" href="{{ asset('front/website/revolution/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/revolution/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/revolution/css/navigation.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ asset('front/website/css/'.$lang.'-slider-home18.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/'.$lang.'-search.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/aos2.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/lightcase.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/owl-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/'.$lang.'-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/'.$lang.'-menu.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/'.$lang.'-styles.css') }}">
<link rel="stylesheet" href="{{ asset('front/website/css/'.$lang.'-maps.css') }}">
<link rel="stylesheet" id="color" href="{{ asset('front/website/css/colors/light-black.css') }}">

<link href="{{asset('front/website/css')}}/droidarabickufi.css" rel="stylesheet" type="text/css" />


@if($lang == 'ar')
    <style>

        #navigation {
            margin-right: 70px;
        }

        body {
            direction: rtl;
            text-align: right
        }

        body, html, h1, h2, h3, h4, h5, h6, p, a, li, .btn  ,
        .submit-contact , button , .more-link, select ,
        .ec-category-section .ec-cat-tab-nav .cat-link .cat-desc span ,
        .ec-category-section .ec-cat-tab-nav .cat-link .cat-desc span + span ,
        .btn-primary, input[type="submit"],
        #header.cloned.sticky ul li a
        {
            font-family: 'DroidArabicKufiRegular', sans-serif !important;
        }

        ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            font-family: 'DroidArabicKufiRegular', sans-serif !important;
        }
        ::-moz-placeholder {
            /* Firefox 19+ */
            font-family: 'DroidArabicKufiRegular', sans-serif !important;
        }
        :-ms-input-placeholder {
            /* IE 10+ */
            font-family: 'DroidArabicKufiRegular', sans-serif !important;
        }
        :-moz-placeholder {
            /* Firefox 18- */
            font-family: 'DroidArabicKufiRegular', sans-serif !important;
        }

        p span {
            font-family: 'DroidArabicKufiRegular', sans-serif !important;
        }

        input {
            text-align: right !important
        }

    </style>
@endif
