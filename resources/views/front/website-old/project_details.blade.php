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
inner-pages sin-1 homepage-1 hd-white
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
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{ asset('front/website/img/s-1.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front/website/img/s-1.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front/website/img/s-2.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front/website/img/s-2.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front/website/img/s-3.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front/website/img/s-3.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front/website/img/s-4.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front/website/img/s-4.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front/website/img/s-5.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front/website/img/s-5.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('front/website/img/s-6.jpg') }}" class="grid image-link">
                    <img src="{{ asset('front/website/img/s-6.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
        </div>

        <div class="swiper-pagination swiper-pagination-white"></div>

        <div class="swiper-button-next swiper-button-white mr-3"></div>
        <div class="swiper-button-prev swiper-button-white ml-3"></div>
    </div>
<!-- END SECTION HEADINGS -->

<!-- START SECTION PROPERTIES LISTING -->
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- Star Description -->
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                            </div>
                            <!-- End Description -->
                        </div>
                    </div>
                    <!-- Star Property Details -->
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Property Details</h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <span class="font-weight-bold mr-1">Property ID:</span>
                                <span class="det">V254680</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Type:</span>
                                <span class="det">House</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property status:</span>
                                <span class="det">For Sale</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Price:</span>
                                <span class="det">$230,000</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Rooms:</span>
                                <span class="det">6</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bedrooms:</span>
                                <span class="det">7</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bath:</span>
                                <span class="det">4</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Garages:</span>
                                <span class="det">2</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Year Built:</span>
                                <span class="det">10/6/2020</span>
                            </li>
                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Amenities</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Air Cond</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Balcony</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Internet</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Dishwasher</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Bedding</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Cable TV</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Parking</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Pool</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Fridge</span>
                            </li>
                        </ul>
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Floor Plans</h5>
                        <img alt="image" src="{{ asset('front/website/img/floor-plan-1.png') }}" style="min-width: 100%;">
                    </div>
                    <div class="property wprt-image-video w50 pro vid-si2">
                        <h5>Property Video</h5>
                        @php
                            $youtube_link = $pageDetail->youtube_link;
                            $youtube_embed = substr($youtube_link, strpos($youtube_link, "=") + 1);    
                        @endphp
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$youtube_embed}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="property-location map">
                        <h5>Location</h5>
                        @php
                            $location_link = $pageDetail->location_link;
                            $location_embed = substr($location_link, strpos($location_link, "=") + 1);    
                        @endphp
                       <iframe src="https://www.google.com/maps/embed?pb={{$location_embed}}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Star Add Review -->
                    <section class="single reviews leve-comments details">
                        <div id="add-review" class="add-review-box">
                            <!-- Add Review -->
                            <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                            <span class="leave-rating-title">Your rating for this listing</span>
                            <!-- Rating / Upload Button -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <!-- Leave Rating -->
                                    <div class="clearfix"></div>
                                    <div class="leave-rating margin-bottom-30">
                                        <input type="radio" name="rating" id="rating-1" value="1" />
                                        <label for="rating-1" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-2" value="2" />
                                        <label for="rating-2" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-3" value="3" />
                                        <label for="rating-3" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-4" value="4" />
                                        <label for="rating-4" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-5" value="5" />
                                        <label for="rating-5" class="fa fa-star"></label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Uplaod Photos -->
                                    <div class="add-review-photos margin-bottom-30">
                                        <div class="photoUpload">
                                            <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                            <input type="file" class="upload" />
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Add Review -->
                </div>
            </div>
        </div>
    </section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection

@push('custom-js-scripts')

@endpush