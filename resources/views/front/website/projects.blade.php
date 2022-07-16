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
inner-pages agents hp-6 full hd-white
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
                <h1>Projects</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Projects</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

   <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-list featured portfolio blog ho-17 bg-white-1">
        <div class="container">
            <div class="row portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/p-6.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/p-7.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Family Apartment</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/p-8.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Villa House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/p-4.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury Condo</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people sale">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/p-5.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/s-1.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/s-2.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/s-3.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single mb-0 no-mb" data-aos="fade-up">
                        <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/e-tower' : 'projects/e-tower')) }}" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(front/website/img/s-6.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price">$230,000</div>
                                <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="pt-33">
                <ul class="pagination">
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
<!-- END SECTION PROPERTIES LISTING -->
@endsection

@push('custom-js-scripts')

@endpush