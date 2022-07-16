<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title')</title>

    <meta name="description" content="{{ $setting->description_en }}">
    <meta name="keywords" content="{{ $setting->keywords_en }}">
    
    @include('front.e-tower.layouts.scripts.css')

    <!-- Page CSS -->
    @stack('custom-css-scripts')

    {!! $setting->header_code !!}
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <!--/ Content -->

            <a href="https://wa.me/+2{{ $setting->mobile }}" target="_blank" class="float">
                <i class="fab fa-whatsapp my-float" style="font-size: 40px; color: #25D366;"></i>
            </a>

            <!-- Footer -->
                @include('front.e-tower.layouts.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    @include('front.e-tower.layouts.scripts.js')

    @stack('custom-js-scripts')

  </body>
</html>
