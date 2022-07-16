@php

$lang = app()->getLocale();

$dir = 'left';
$dir2 = 'right';
$prefix = '/';

if($lang == 'en') {
    $dir = 'left';
    $dir2 = 'right';
    $prefix = 'ar/';
} else {
    $dir = 'right';
    $dir2 = 'left';
    $prefix = '/';
}

$sliders = App\Models\Website\HomeSlider::get();
$aboutUs = App\Models\Website\AboutUsDetail::first();
$whyChooseUs = App\Models\Website\WhyChooseUs::get();
$latestProject = App\Models\Website\HomeLatestProject::first();
$contactUs = App\Models\Website\ContactUs::first();

@endphp

@extends('front.website.layouts.master')

@section('title')
    United Group
@endsection

@section('body_class')
int_white_bg h19 homepage-5 homepage-19 homepage-9 hp-6 homepage-1 inner-pages hd-white
@endsection

@push('custom-css-scripts')
   <style>

       @if($lang == 'ar')
          .rev_slider_wrapper, .rev_slider_wrapper *{direction:ltr;}
       @endif

      .float {
         position: fixed !important;
         width: 75px;
         height: 75px;
         bottom: 20px;
         {{$dir2}}: 40px;
         color: #000;
         border-radius: 50px;
         text-align: center;
         font-size: 30px;
         z-index: 100;
         background-color: #075E54;
      }

      .my-float {
         margin-top: 16px;
         margin-{{ $dir}}: 2px;
      }
   </style>
@endpush

@section('content')
   <!-- SLIDER START -->
   <div id="rev_slider_26_1_wrapper " class="rev_slider_wrapper fullscreen-container home-rev-slider" data-alias="mask-showcase" data-source="gallery">
         <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
         <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>

                @php
                    $counter = 1;
                    $slider_counter = 73;
                @endphp
                @foreach($sliders as $slider)
                    @php
                        $slider_name = explode(' ', $slider->title_en, 2);
                    @endphp
                        <li data-index="rs-{{$slider_counter}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('uploads/' . $slider->image) }}" data-rotate="0" data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('uploads/' . $slider->image) }}" data-bgcolor='#f8f8f8' style='' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                                <!-- LAYER 1  right image overlay dark-->
                                <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" id="slide-73-layer-1" data-x="['{{$dir2}}','{{$dir2}}','{{$dir2}}','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontweight="['100','100','400','400']" data-width="['full','full','full','full']" data-height="['full','full','full','full']" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:0;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['{{$dir}}','{{$dir}}','{{$dir}}','{{$dir}}']" data-paddingtop="[0,0,0,0]" data-padding{{$dir2}}="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-padding{{$dir}}="[0,0,0,0]" style="z-index: 6;text-transform:{{$dir}};background-color:rgba(0,0,0,0.5);">
                                </div>

                                <!-- LAYERS 2 number block-->
                                <div class="tp-caption rev-btn  tp-resizeme slider-block sx-bg-primary" id="slide-73-layer-2" data-x="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['-220','-220','-220','50']" data-fontweight="['600','600','600','600']" data-fontsize="['120','120','80','80']" data-lineheight="['120','120','80','80']" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textAlign="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-paddingtop="[20,20,20,20]" data-padding{{$dir2}}="[10,10,10,10]" data-paddingbottom="[0,0,0,0]" data-padding{{$dir}}="[10,10,10,10]" style="z-index: 10; font-family: 'Poppins', sans-serif;">0{{$counter}}</div>

                                <!-- LAYER 3  Thin text title-->
                                <div class="tp-caption   tp-resizeme slider-tag-line" id="slide-74-layer-3" data-x="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['-80','-80','-80','170']" data-fontsize="['64','64','60','40']" data-lineheight="['74','74','70','50']" data-width="['700','650','620','380']" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfrom{{$dir}}","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blockto{{$dir}}","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-paddingtop="[10,10,10,10]" data-padding{{$dir2}}="[20,20,20,0]" data-paddingbottom="[10,10,10,10]" data-padding{{$dir}}="[0,0,0,0]" style="z-index: 10; font-weight:200; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase">{{$slider_name[0]}}</div>

                                <!-- LAYER 4  Bold Title-->
                                <div class="tp-caption   tp-resizeme" id="slide-74-layer-4" data-x="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['10','10','10','230']" data-fontsize="['64','64','60','40']" data-lineheight="['74','74','70','50']" data-width="['700','700','700','700']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfrom{{$dir}}","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blockto{{$dir}}","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-paddingtop="[20,20,20,20]" data-padding{{$dir2}}="[20,20,20,10]" data-paddingbottom="[30,30,30,30]" data-padding{{$dir}}="[0,0,0,10]" style="z-index: 10; text-transform:uppercase; letter-spacing:10px; white-space: normal;font-weight: 600; color: #fff;font-family: 'Poppins', sans-serif;">{{$slider_name[1]}}</div>

                                <!-- LAYER 5  Paragraph-->
                                <div class="tp-caption   tp-resizeme" id="slide-74-layer-5" data-x="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['90','90','90','300']" data-fontsize="['20','20','20','20']" data-lineheight="['30','30','30','30']" data-width="['600','600','600','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfrom{{$dir}}","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blockto{{$dir}}","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-paddingtop="[20,20,20,20]" data-padding{{$dir2}}="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-padding{{$dir}}="[0,0,0,0]" style="z-index: 10; white-space: normal; color: #fff;font-family: 'Poppins', sans-serif;">{{ $slider->description_en }}</div>

                                <!-- LAYER 6  Read More-->
                                <div class="tp-caption rev-btn  tp-resizeme" id="slide-74-layer-6" data-x="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['180','180','180','410']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textAlign="['{{$dir}}','{{$dir}}','{{$dir}}','center']" data-paddingtop="[0,0,0,0]" data-padding{{$dir2}}="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-padding{{$dir}}="[0,0,0,0]" style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button-secondry btn-half"><span> Read More</span></a></div>

                                <!-- Border {{$dir}} Part -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-74-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-padding{{$dir2}}="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-padding{{$dir}}="[0,0,0,0]" style="z-index:8;background-color:rgba(0, 0, 0, 0);border-{{$dir}}:40px solid #eef1f2;"> </div>

                                <!-- Border bottom Part -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-74-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-padding{{$dir2}}="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-padding{{$dir}}="[0,0,0,0]" style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>
                        </li>
                    @php
                        $counter++;
                        $slider_counter++;
                    @endphp
                @endforeach

            </ul>
            <div class="tp-bannertimer"></div>
            <!-- left side social bar-->
            <div class="slide-left-social">
               <ul class="clearfix">
                     <li><a href="{{ $contactUs->linkedin_link }}" target="_blank" class="sx-title-swip" data-hover="Linkedin">Linkedin</a></li>
                     <li><a href="{{ $contactUs->twitter_link }}" target="_blank" class="sx-title-swip" data-hover="Twitter">Twitter</a></li>
                     <li><a href="{{ $contactUs->facebook_link }}" target="_blank" class="sx-title-swip" data-hover="Facebook">Facebook</a></li>
                     <li><a href="{{ $contactUs->instagram_link }}" target="_blank" class="sx-title-swip" data-hover="Instagram">Instagram</a></li>
               </ul>
            </div>

         </div>
   </div>
   <!-- SLIDER END -->

   <!-- START SECTION ABOUT -->
   <section class="about-us fh">
      <div class="container">
          <div class="row">
               <div class="col-lg-6 col-md-12 col-xs-12">
                     <div class="wprt-image-video w50">
                        <img alt="image" src="{{ asset('uploads/'. $aboutUs->image ) }}">
                     </div>
               </div>
              <div class="col-lg-6 col-md-12 who-1">
                  <div>
                      <h5><strong>About Us</strong></h5><br>
                      <h2 class="text-{{$dir}}  mb-4">
                        <span>
                            @if($lang == 'en')
                                {{ $aboutUs->title_en }}
                            @else
                                {{ $aboutUs->title_ar }}                            
                            @endif
                        </span>
                    </h2>
                  </div>
                  <div class="pftext">
                      <p>{{ $aboutUs->description_en }}</p>
                  </div>
                  <div class="box bg-2">
                      <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">{{ $aboutUs->button_en }}</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- END SECTION ABOUT -->

   <!-- START SECTION WHY CHOOSE US -->
   <section class="how-it-works bg-white-2">
      <div class="container">
         <div class="row">
              <div class="section-title col-md-5">
                  <h3>Why</h3>
                  <h2>Choose Us</h2>
              </div>
          </div>
          <div class="row service-1">
                @foreach($whyChooseUs as $chooseUs)
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{ asset('uploads/'. $chooseUs->image) }}" alt="">
                                <h3>{{ $chooseUs->title_en }}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $chooseUs->description_en }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
          </div>
      </div>
  </section>
  <!-- END SECTION WHY CHOOSE US -->

   <!-- START SECTION INFO-HELP -->
   <section class="info-help h17">
         <div class="container">
            <div class="row info-head">
               <div class="col-lg-6 col-md-8 col-xs-8">
                     <div class="info-text" data-aos="fade-{{$dir2}}">
                        <h3>{{ $latestProject->title_en }}</h3>
                        <p class="pt-2">{{ $latestProject->description_en }}</p>
                        <div class="inf-btn pro">
                           <a href="contact-us.html" class="btn btn-pro btn-secondary btn-lg">{{ $latestProject->button_en }}</a>
                        </div>
                     </div>
               </div>
               <div class="col-md-6 col-sm-3"></div>
            </div>
         </div>
   </section>
   <!-- END SECTION INFO-HELP -->

   <!-- START SECTION POPULAR PLACES -->
   <section class="feature-categories bg-white rec-pro">
      <div class="container-fluid">
          <div class="sec-title">
              <h2><span>Exhibitions </span>& Events</h2>
          </div>
          <div class="row">
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                  <div class="small-category-2">
                      <div class="small-category-2-thumb img-1">
                          <a href="properties-map.html"><img src="{{ asset('front/website/img/12.jpg') }}" alt=""></a>
                      </div>
                      <div class="sc-2-detail">
                          <h4 class="sc-jb-title"><a href="properties-map.html">New York</a></h4>
                          <span>203 Properties</span>
                      </div>
                  </div>
              </div>
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                  <div class="small-category-2">
                      <div class="small-category-2-thumb img-2">
                          <a href="properties-map.html"><img src="{{ asset('front/website/img/13.jpg') }}" alt=""></a>
                      </div>
                      <div class="sc-2-detail">
                          <h4 class="sc-jb-title"><a href="properties-map.html">Los Angeles</a></h4>
                          <span>307 Properties</span>
                      </div>
                  </div>
              </div>
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                  <div class="small-category-2">
                      <div class="small-category-2-thumb img-3">
                          <a href="properties-map.html"><img src="{{ asset('front/website/img/14.jpg') }}" alt=""></a>
                      </div>
                      <div class="sc-2-detail">
                          <h4 class="sc-jb-title"><a href="properties-map.html">San Francisco</a></h4>
                          <span>409 Properties</span>
                      </div>
                  </div>
              </div>
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                  <div class="small-category-2 mob-mt">
                      <div class="small-category-2-thumb img-8">
                          <a href="properties-map.html"><img src="{{ asset('front/website/img/15.jpg') }}" alt=""></a>
                      </div>
                      <div class="sc-2-detail">
                          <h4 class="sc-jb-title"><a href="properties-map.html">Miami</a></h4>
                          <span>145 Properties</span>
                      </div>
                  </div>
              </div>
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                  <div class="small-category-2">
                      <div class="small-category-2-thumb img-10">
                          <a href="properties-map.html"><img src="{{ asset('front/website/img/10.jpg') }}" alt=""></a>
                      </div>
                      <div class="sc-2-detail">
                          <h4 class="sc-jb-title"><a href="properties-map.html">Chicago</a></h4>
                          <span>112 Properties</span>
                      </div>
                  </div>
              </div>
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                  <div class="small-category-2 si-mt">
                      <div class="small-category-2-thumb img-11">
                          <a href="properties-map.html"><img src="{{ asset('front/website/img/5.jpg') }}" alt=""></a>
                      </div>
                      <div class="sc-2-detail">
                          <h4 class="sc-jb-title"><a href="properties-map.html">Houston</a></h4>
                          <span>254 Properties</span>
                      </div>
                  </div>
              </div>
              <!-- Single category -->
              <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                  <div class="small-category-2">
                     <div class="small-category-2-thumb img-10">
                        <a href="properties-map.html"><img src="{{ asset('front/website/img/10.jpg') }}" alt=""></a>
                     </div>
                     <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-map.html">Chicago</a></h4>
                        <span>112 Properties</span>
                     </div>
                  </div>
               </div>
               <!-- Single category -->
               <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                     <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-11">
                           <a href="properties-map.html"><img src="{{ asset('front/website/img/5.jpg') }}" alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                           <h4 class="sc-jb-title"><a href="properties-map.html">Houston</a></h4>
                           <span>254 Properties</span>
                        </div>
                     </div>
               </div>
          </div>
          <!-- /row -->
      </div>
   </section>
   <!-- END SECTION POPULAR PLACES -->

   <!-- START SECTION BLOG -->
   <section class="blog-section bg-white-1">
         <div class="container">
            <div class="section-title">
               <h3>Latest</h3>
               <h2>News</h2>
            </div>
            <div class="news-wrap">
               <div class="row">
                     <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="200">
                           <a href="blog-details.html" class="news-img-link">
                                 <div class="news-item-img">
                                    <img class="img-responsive" src="{{ asset('front/website/img/b-10.jpg') }}" alt="blog image">
                                 </div>
                           </a>
                           <div class="news-item-text">
                                 <a href="blog-details.html"><h3>Explore The World</h3></a>
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
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                       <p>By, Karl Smith</p>
                                       <img src="images/testimonials/ts-6.jpg" alt="">
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="300">
                           <a href="blog-details.html" class="news-img-link">
                                 <div class="news-item-img">
                                    <img class="img-responsive" src="{{ asset('front/website/img/b-11.jpg') }}" alt="blog image">
                                 </div>
                           </a>
                           <div class="news-item-text">
                                 <a href="blog-details.html"><h3>Find Good Places</h3></a>
                                 <div class="dates">
                                    <span class="date">May 20, 2020 &nbsp;/</span>
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
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                       <p>By, Lis Jhonson</p>
                                       <img src="images/testimonials/ts-5.jpg" alt="">
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item no-mb" data-aos="fade-up" data-aos-delay="400">
                           <a href="blog-details.html" class="news-img-link">
                                 <div class="news-item-img">
                                    <img class="img-responsive" src="{{ asset('front/website/img/b-12.jpg') }}" alt="blog image">
                                 </div>
                           </a>
                           <div class="news-item-text">
                                 <a href="blog-details.html"><h3>All Places In Town</h3></a>
                                 <div class="dates">
                                    <span class="date">Jun 30, 2020 &nbsp;/</span>
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
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                       <p>By, Ted Willians</p>
                                       <img src="images/testimonials/ts-4.jpg" alt="">
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
   </section>
   <!-- END SECTION BLOG -->

   <!-- START SECTION CONTACT US -->
   <section class="contact-us bg-white-2">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-12">
                  <h2 class="mb-4 mt-3">Contact Us</h2>
                  <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                      <div id="success" class="successform">
                          <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                      </div>
                      <div id="error" class="errorform">
                          <p>Something went wrong, try refreshing and submitting the form again.</p>
                      </div>
                      <div class="form-group">
                          <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                      </div>
                      <div class="form-group">
                          <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                      </div>
                      <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                  </form>
              </div>
              <div class="col-lg-4 col-md-12 bgc">
                  <div class="call-info">
                      <h3>Contact Details</h3>
                      <p class="mb-5">Please find below contact details and contact us today!</p>
                      <ul>
                          <li>
                              <div class="info">
                                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  <p class="in-p">{{ $contactUs->address }}</p>
                              </div>
                          </li>
                          <li>
                              <div class="info">
                                  <i class="fa fa-phone" aria-hidden="true"></i>
                                  <p class="in-p">{{ $contactUs->mobile }}</p>
                              </div>
                          </li>
                          <li>
                              <div class="info">
                                  <i class="fa fa-envelope" aria-hidden="true"></i>
                                  <p class="in-p ti">{{ $contactUs->email }}</p>
                              </div>
                          </li>
                          <li>
                              <div class="info cll">
                                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                                  <p class="in-p ti">{{ $contactUs->office_hours }}</p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div><br><br>
  </section>
  <!-- END SECTION CONTACT US -->
   <section class="bg-white-3">
      <div class="container">
         <h2 class="mt-3 mb-3">Our Location</h2>
         <div class="property-location">
            <div class="divider-fade"></div>
            @php
               $location_link = $contactUs->map_link;
               $location_embed = substr($location_link, strpos($location_link, "=") + 1);
            @endphp
            <iframe src="https://www.google.com/maps/embed?pb={{$location_embed}}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </section>
@endsection

@push('custom-js-scripts')

@endpush
