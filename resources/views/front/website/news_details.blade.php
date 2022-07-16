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
            <h1>News Details</h1>
            <h2><a href="index.html">Home </a> &nbsp;/&nbsp; News &nbsp;/&nbsp; E-Tower</h2>
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
                                    <img class="img-responsive" src="{{ asset('front/website/img/b-10.jpg') }}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text details pb-0">
                                <a href="blog-details.html"><h3>Real Estate News</h3></a>
                                <div class="dates">
                                    <span class="date">April 11, 2020</span>
                                </div>
                                <div class="news-item-descr big-news details visib mb-0" style="height: auto !important">
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>

                                    <p class="d-none d-sm-none d-lg-block d-md-block mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>

                                    <p class="d-none d-sm-none d-lg-block d-md-block mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>

                                    <p class="d-none d-sm-none d-lg-block d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="leve-comments wpb">
                    <h3 class="mb-5">Leave a Comment</h3>
                    <div class="row">
                        <div class="col-md-12 data">
                            <form action="#">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="col-lg-3 col-md-12">
                <div class="widget">
                    <div class="recent-post pt-5">
                        <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="{{ asset('front/website/img/b-7.jpg') }}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Real Estate</h6></a>
                                <p>May 10, 2020</p>
                            </div>
                        </div>
                        <div class="recent-main my-4">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="{{ asset('front/website/img/b-11.jpg') }}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Real Estate</h6></a>
                                <p>May 10, 2020</p>
                            </div>
                        </div>
                        <div class="recent-main no-mb">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="{{ asset('front/website/img/b-12.jpg') }}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Real Estate</h6></a>
                                <p>May 10, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection

@push('custom-js-scripts')

@endpush