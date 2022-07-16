<!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
          <!-- Header -->
          <div id="header" class="head-tr bottom">
              <div class="container container-header">
                  <!-- Left Side Content -->
                  <div class="left-side">
                      <!-- Logo -->
                      <div id="logo">
                          <a href="{{ url($prefix . ($lang == 'ar' ? '/' : '')) }}"><img src="{{ asset('front/UDG logo - PS.png') }}" data-sticky-logo="{{ asset('front/UDG logo - PS.png') }}" alt=""></a>
                      </div>
                      <!-- Mobile Navigation -->
                      <div class="mmenu-trigger">
                          <button class="hamburger hamburger--collapse" type="button">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                          </button>
                      </div>
                      <!-- Main Navigation -->
                      <nav id="navigation" class="style-1 head-tr">
                          <ul id="responsive">
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? '/' : '')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'الرئيسية' : 'Home' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'من-نحن' : 'about-us')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'من نحن' : 'About Us' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع' : 'projects')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'المشاريع' : 'Projects' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'الاحداث' : 'events')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'الاحداث' : 'Events' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'المعارض' : 'exhibitions')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'المعارض' : 'Exhibitions' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'الاخبار' : 'news')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'الاخبار' : 'News' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'الوظائف' : 'careers')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'الوظائف' : 'Careers' }}</a></li>
                                  <li><a href="{{ url($prefix . ($lang == 'ar' ? 'تواصل-معنا' : 'contact-us')) }}" style="font-size: 25px;">{{ $lang == 'ar' ? 'تواصل معنا' : 'Contact Us' }}</a></li>
                                  <li style="background-color: #e2b16e; border-radius: 25px;"><a href="tel:{{ $setting->mobile }}" target="_blank" style="font-size: 25px;"><i class="fas fa-phone"></i></a></li>
                                  <li style="background-color: #e2b16e; border-radius: 25px;">
                                    <a href="{{ url(isset($link) ? $link : '') }}" style="font-size: 25px;">
                                        {{$lang == 'ar' ? 'ENGLISH' : 'العربية'}}
                                    </a>
                                  </li>
                          </ul>
                      </nav>
                      <!-- Main Navigation / End -->
                  </div>
                  <!-- Left Side Content / End -->

              </div>
          </div>
          <!-- Header / End -->

      </header>
      <div class="clearfix"></div>
      <!-- Header Container / End -->