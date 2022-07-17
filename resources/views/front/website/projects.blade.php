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
                <h1>{{ trans('home.projects') }}</h1>
                <h2><a href="{{url($prefix)}}">{{ trans('home.home') }} </a> &nbsp;/&nbsp; {{ trans('home.projects') }}</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

   <!-- START SECTION PROPERTIES LISTING -->
   <section class="properties-list featured portfolio blog ho-17 bg-white-1">
       @if (count($projects) >  0) 
    <div class="container">
        <div class="row portfolio-items">
         @foreach ($projects as $project)
         <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
            <div class="project-single mb-0" data-aos="fade-up">
                <a href="{{ url($prefix . ($lang == 'ar' ? 'المشاريع/' : 'projects/'). $project->{'slug_'.$lang} ) }}" class="recent-16">
                    <div class="recent-img16 img-center" style="background-image: url({{ asset('uploads/' . $project->image) }});"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">{{ $project->{'title_'.$lang} }}</div>
                        {{-- <div class="recent-price">$230,000</div>
                        <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div> --}}
                    </div>
                    <div class="view-proper">{{ trans('home.view_details') }}</div>
                </a>
            </div>
        </div>
         @endforeach
          
        </div>
        <nav aria-label="..." class="pt-33">
            <ul class="pagination">
                @if($projects->currentPage() != 1)
                <li class="page-item prev">
                    <a class="page-link" href="{{ $projects->previousPageUrl() }}">
                      {{ trans('home.prev') }}
                    </a>
                </li>
                    @else
                  <li class="page-item disabled">
                    <a class="page-link" href="#">{{ trans('home.prev') }}</a>
                  </li>
                    @endif

                  @for($i=1; $i<=$projects->lastPage(); $i++)

                    @if($i == $projects->currentPage())
                        <li class="page-item active"><a class="page-link">{{ $i }} <span class="sr-only">(current)</span></a></li>
                    @else
                        <li class="page-item">
                          <a class="page-link" href="{{ $projects->url($i) }}">
                            {{ $i }}&nbsp;
                          </a>
                        </li>
                    @endif
                  @endfor

                  <li class="page-item next">
                    @if($projects->currentPage() != $projects->lastPage())
                    <a class="page-link" href="{{ $projects->nextPageUrl() }}">
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
    @else
    <p style="text-align: center">{{$lang == 'ar'? 'لايوجد مشاريع': 'No Prjects found'}}</p>
    @endif
</section>
       
<!-- END SECTION PROPERTIES LISTING -->
@endsection

@push('custom-js-scripts')

@endpush