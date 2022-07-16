@extends('front.e-tower.layouts.master')

@section('title')
    {{ $setting->website_name_en }}
@endsection

@push('custom-css-scripts')
<style>
    body {
        text-align:right;
        direction:rtl
    }
    
    body, html, h1, h2, h3, h4, h5, h6, p, a, li, .btn  
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

    .fa-brands, .fab {
        font-family: "Font Awesome 6 Brands" !important;
    }

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
    <!-- Property Single Slider -->
    <section class="section-padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 col-md-8">
                 <div class="card">
                    <div class="card-body site-slider pl-0 pr-0 pt-0 pb-0">
                       <div id="sitesliderz" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                             <li data-target="#sitesliderz" data-slide-to="0" class="active"></li>
                             <li data-target="#sitesliderz" data-slide-to="1"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                              @foreach($sliders as $key => $slider)
                                <div class="carousel-item rounded {{ $key == 0 ? 'active' : '' }}" style="background-image: url('uploads/{{$slider->image}}')"></div>
                             @endforeach
                          </div>
                          <a class="carousel-control-prev" href="#sitesliderz" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#sitesliderz" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                          </a>
                       </div>
                    </div>
                 </div>

                 <div class="card padding-card">
                    <div class="card-body">
                       <h5 class="card-title mb-3">{{ $pageDetail->name }}</h5>
                       {!! $pageDetail->description !!}
                    </div>
                 </div>
                 
              </div>
              <div class="col-lg-4 col-md-4">
                  <div class="card sidebar-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">سجل الآن وسيتم التواصل فوراً لشرح جميع التفاصيل</h5>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <input type="text" name="name" id="name" placeholder="الاسم بالكامل" class="form-control">
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <input type="email" name="email" id="email" placeholder="الايميل"  class="form-control">
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <input type="number" name="mobile" id="mobile" placeholder="رقم الهاتف"  class="form-control">
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <textarea rows="5" cols="50" name="message" id="message" class="form-control" placeholder="الرسالة"></textarea>
                              </div>
                           </div>
                           <button class="btn btn-block" style="background-color: #7a593c; color: white" id="sendRequest">أرسل الأن</button>
                     </div>
                  </div>
                  <div class="card sidebar-card">
                     <div class="card-body">
                        <div id="featured-properties">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="card card-list">
                                    <a href="#">
                                       <img class="card-img-top" src="{{ asset('uploads/' . $setting->logo_image) }}" alt="Card image cap">
                                       <div class="card-body pb-0">
                                          <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-phone"></i> {{ $setting->mobile }}</h6>
                                          <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-email"></i> {{ $setting->email }}</h6>
                                          <h6 class="card-subtitle text-muted"><i class="mdi mdi-link"></i> {{ $setting->address }}</h6><br>
                                          @if($setting->facebook_link !== null)
                                             <a href="{{ $setting->facebook_link }}" target="_blank"><i class="mdi mdi-facebook" style="font-size: 25px;"></i></a>
                                          @endif
                                          @if($setting->twitter_link !== null)
                                             <a href="{{ $setting->twitter_link }}" target="_blank"><i class="mdi mdi-twitter" style="font-size: 25px;"></i></a>
                                          @endif
                                          @if($setting->instagram_link !== null)
                                             <a href="{{ $setting->instagram_link }}" target="_blank"><i class="mdi mdi-instagram" style="font-size: 25px;"></i></a>
                                          @endif
                                          @if($setting->linkedin_link !== null)
                                             <a href="{{ $setting->linkedin_link }}" target="_blank"><i class="mdi mdi-linkedin" style="font-size: 25px;"></i></a>
                                          @endif
                                          @if($setting->youtube_link !== null)
                                             <a href="{{ $setting->youtube_link }}" target="_blank"><i class="mdi mdi-youtube-play" style="font-size: 25px;"></i></a>
                                          @endif
                                          @if($setting->map_link !== null)
                                             <a href="{{ $setting->map_link }}" target="_blank"><i class="mdi mdi-google-maps" style="font-size: 25px;"></i></a>
                                          @endif
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
              </div>
              <div class="col-lg-12 col-md-12">
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">فيديو</h5>
                           @php
                                 $youtube_link = $pageDetail->youtube_link;
                                 $youtube_embed = substr($youtube_link, strpos($youtube_link, "=") + 1);    
                           @endphp
                           <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$youtube_embed}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                     </div>
                     <div class="row">
                        @foreach($bigBlockFacilities as $bigBlockFacility)
                           <div class="col-lg-4 col-md-4">
                              <div class="list-icon" style="min-height: 350px;">
                                 <img src="{{ asset('uploads/' . $bigBlockFacility->image) }}" style="height: 250px; width: 300px;"><br><br>
                                 {{-- <i class="mdi mdi-move-resize-variant"></i> --}}
                                 <strong>{{ $bigBlockFacility->name }}</strong><br><br>
                                 {!! $bigBlockFacility->description !!}
                              </div>
                           </div>
                        @endforeach
                     </div>
                     <br><br>
                     <div class="row">
                        @foreach($smallBlockFacilities as $smallBlockFacility)
                           <div class="col-lg-4 col-md-4">
                              <div class="list-icon">
                                 <img src="{{ asset('uploads/' . $smallBlockFacility->image) }}" style="width: 50px !important; height: 50px !important">
                                 {{-- <i class="mdi mdi-move-resize-variant"></i> --}}
                                 <strong>{{ $smallBlockFacility->name }}</strong>
                              </div>
                           </div>
                        @endforeach
                     </div>                 

                 <!-- Join Team -->
                 <div class="card padding-card">
                 <section class="py-5  bg-primary" style="background-color: #7a593c !important;">
                    <div class="container">
                       <div class="row align-items-center text-center text-md-left">
                          <div class="col-md-8">
                             <h2 class="text-white my-2">{{ $pageDetail->brochure_text_name }}</h2>
                          </div>
                          <div class="col-md-4 text-center text-md-right">
                             <a href="{{ route('download-brochure') }}" class="btn btn-outline-light my-2">{{ $pageDetail->brochure_button_name }}</a>
                             {{-- <button type="button" class="btn btn-outline-light my-2">{{ $pageDetail->brochure_button_name }}</button> --}}
                          </div>
                       </div>
                    </div>
                 </section>
                 </div>
                 <!-- End Join Team -->

                 <div class="card padding-card">
                    <div class="card-body">
                       <h5 class="card-title mb-3">العنوان</h5>
                        @php
                              $location_link = $pageDetail->location_link;
                              $location_embed = substr($location_link, strpos($location_link, "=") + 1);    
                        @endphp
                       <iframe src="https://www.google.com/maps/embed?pb={{$location_embed}}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                 </div>
                 <div class="card padding-card">
                    <div class="card-body">
                       <h5 class="card-title mb-4">سجل الآن وسيتم التواصل فوراً لشرح جميع التفاصيل</h5>
                          <div class="row">
                             <div class="control-group form-group col-lg-4 col-md-4">
                                <div class="controls">
                                   <input type="text" name="name" id="name_2" placeholder="الاسم بالكامل" class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group col-lg-4 col-md-4">
                                <div class="controls">
                                   <input type="email" name="email" id="email_2" placeholder="الايميل" class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group col-lg-4 col-md-4">
                                <div class="controls">
                                   <input type="number" name="mobile" id="mobile_2" placeholder="رقم الهاتف"  class="form-control" required>
                                </div>
                             </div>
                          </div>
                          <div class="control-group form-group">
                             <div class="controls">
                                <textarea rows="10" cols="100" name="message" id="message_2" class="form-control" placeholder="الرسالة"></textarea>
                             </div>
                          </div>
                          <button class="btn" style="background-color: #7a593c; color: white" id="sendRequest2">أرسل الأن</button>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End Property Single Slider -->
@endsection

@push('custom-js-scripts')
     <script>
      $(document).ready(function() {
         $("#sendRequest").click(function() {
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var message = $('#message').val();
            
            $.ajax({
               url: '{{ asset('admin_panel/messages') }}',
               method: "post",
               data: {
                  _token: '{{ csrf_token() }}',
                  name: name,
                  email: email,
                  mobile: mobile,
                  message: message
               },
               dataType: "json",
               success: function(response) {
                  if(response.success) {
                     swal({
                        title: "Success",
                        type: "success",
                        text: response.success,
                        confirmButtonClass: "sweet-alert-button",
                        confirmButtonText: "Ok",
                     });
                     $('#name').val('');
                     $('#email').val('');
                     $('#mobile').val('');
                     $('#message').val('');
                  } else {
                     swal({
                        title: "Error",
                        type: "error",
                        confirmButtonClass: "sweet-alert-button",
                        confirmButtonText: "Ok",
                        text: response.error,
                     });
                  }
               }
            });
         });
        
         $("#sendRequest2").click(function() {
               var name_2 = $('#name_2').val();
               var email_2 = $('#email_2').val();
               var mobile_2 = $('#mobile_2').val();
               var message_2 = $('#message_2').val();
               
               $.ajax({
                  url: '{{ asset('admin_panel/messages') }}',
                  method: "post",
                  data: {
                     _token: '{{ csrf_token() }}',
                     name: name_2,
                     email: email_2,
                     mobile: mobile_2,
                     message: message_2
                  },
                  dataType: "json",
                  success: function(response) {
                     if(response.success) {
                        swal({
                           title: "Success",
                           type: "success",
                           text: response.success,
                           confirmButtonClass: "sweet-alert-button",
                           confirmButtonText: "Ok",
                        });
                        $('#name_2').val('');
                        $('#email_2').val('');
                        $('#mobile_2').val('');
                        $('#message_2').val('');
                     } else {
                        swal({
                           title: "Error",
                           type: "error",
                           confirmButtonClass: "sweet-alert-button",
                           confirmButtonText: "Ok",
                           text: response.error,
                        });
                     }
                  }
               });
         });
      });
      </script>
@endpush