@extends('admin.layouts.master')

@section('title')
    Settings
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Settings</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('e-tower.update_settings') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('website_name_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600">English Website Name <span class="text-danger">*</span> </label>

                            <input type="text" name="website_name_en" class="form-control m-input" required="required"
                                value="{{ $setting->website_name_en != null ? $setting->website_name_en : old('website_name_en') }}" placeholder="English Website Name">

                            @if ($errors->has('website_name_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('website_name_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('website_name_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600">Arabic Website Name<span class="text-danger">*</span> </label>

                            <input type="text" name="website_name_ar" class="form-control m-input" required="required"
                                value="{{ $setting->website_name_ar != null ? $setting->website_name_ar : old('website_name_ar') }}" placeholder="Arabic Website Name">

                            @if ($errors->has('website_name_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('website_name_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('email') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Email <span class="text-danger">*</span> </label>

                            <input type="email" name="email" class="form-control m-input" required="required"
                                value="{{ $setting->email != null ? $setting->email : old('email') }}" placeholder="  Email  ">

                            @if ($errors->has('email'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('email') }} </strong>
                                </span>
                            @endif
                        </div>


                        <div class="col-lg-6 {{ $errors->has('mobile') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Mobile <span class="text-danger">*</span> </label>

                            <input type="number" name="mobile" class="form-control m-input" required="required"
                                value="{{ $setting->mobile != null ? $setting->mobile : old('mobile') }}" placeholder=" Mobile ">

                            @if ($errors->has('mobile'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('mobile') }} </strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('address') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Address <span class="text-danger">*</span> </label>

                            <input type="text" name="address" class="form-control m-input" required="required"
                                value="{{ $setting->address != null ? $setting->address : old('address') }}" placeholder=" Address ">

                            @if ($errors->has('address'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('address') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('facebook_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Facebook Link </label>

                            <input type="text" name="facebook_link" class="form-control m-input"
                                value="{{ $setting->facebook_link != null ? $setting->facebook_link : old('facebook_link') }}" placeholder=" Facebook Link">

                            @if ($errors->has('facebook_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('facebook_link') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('twitter_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Twitter Link </label>

                            <input type="text" name="twitter_link" class="form-control m-input"
                                value="{{ $setting->twitter_link != null ? $setting->twitter_link : old('twitter_link') }}" placeholder=" twitter Link">

                            @if ($errors->has('twitter_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('twitter_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('instagram_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Instagram Link </label>

                            <input type="text" name="instagram_link" class="form-control m-input"
                                value="{{ $setting->instagram_link != null ? $setting->instagram_link : old('instagram_link') }}" placeholder=" instagram Link">

                            @if ($errors->has('instagram_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('instagram_link') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('linkedin_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Linkedin Link </label>

                            <input type="text" name="linkedin_link" class="form-control m-input"
                                value="{{ $setting->linkedin_link != null ? $setting->linkedin_link : old('linkedin_link') }}" placeholder=" linkedin Link">

                            @if ($errors->has('linkedin_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('linkedin_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('youtube_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Youtube Link </label>

                            <input type="text" name="youtube_link" class="form-control m-input"
                                value="{{ $setting->youtube_link != null ? $setting->youtube_link : old('youtube_link') }}" placeholder=" youtube Link">

                            @if ($errors->has('youtube_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('youtube_link') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('map_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Map Link </label>

                            <input type="text" name="map_link" class="form-control m-input"
                                value="{{ $setting->map_link != null ? $setting->map_link : old('map_link') }}" placeholder=" map Link">

                            @if ($errors->has('map_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('map_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('logo_image') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Logo Image </label>

                            <input type="file" name="logo_image" id="logo_image" class="form-control m-input"
                                >
                                <div class="mt-2">
                                    <img id="logo-image-preview" width="200px" />
                                </div>
                                @if($setting->logo_image !== NULL)
                                    <div class="col text-center">
                                        <img src="{{ asset('uploads/' . $setting->logo_image) }}" width="100px" height="100px;">
                                    </div>
                                @endif

                            @if ($errors->has('logo_image'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('logo_image') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('description_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English Description </label>

                            <textarea rows="5" cols="5" name="description_en" class="form-control m-input"
                                value="" placeholder="English Description">{{ $setting->description_en != null ? $setting->description_en : old('description_en') }}</textarea>

                            @if ($errors->has('description_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('description_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic Description </label>

                            <textarea cols="5" rows="5" name="description_ar" class="form-control m-input"
                                value="" placeholder="Arabic Description">{{ $setting->description_ar != null ? $setting->description_ar : old('description_ar') }}</textarea>

                            @if ($errors->has('description_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('keywords_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English keywords </label>

                            <textarea rows="5" cols="5" name="keywords_en" class="form-control m-input"
                                value="" placeholder="English keywords">{{ $setting->keywords_en != null ? $setting->keywords_en : old('keywords_en') }}</textarea>

                            @if ($errors->has('keywords_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('keywords_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('keywords_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic keywords </label>

                            <textarea cols="5" rows="5" name="keywords_ar" class="form-control m-input"
                                value="" placeholder="Arabic keywords">{{ $setting->keywords_ar != null ? $setting->keywords_ar : old('keywords_ar') }}</textarea>

                            @if ($errors->has('keywords_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('keywords_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('header_code') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Header Code </label>

                            <textarea rows="5" cols="5" name="header_code" class="form-control m-input"
                                value="" placeholder="Header Code">{{ $setting->header_code != null ? $setting->header_code : old('header_code') }}</textarea>

                            @if ($errors->has('header_code'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('header_code') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('footer_code') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Footer Code </label>

                            <textarea cols="5" rows="5" name="footer_code" class="form-control m-input"
                                value="" placeholder="Footer Code">{{ $setting->footer_code != null ? $setting->footer_code : old('footer_code') }}</textarea>

                            @if ($errors->has('footer_code'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('footer_code') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                </div>
            </form>
            <!--end::Form-->
        </div>

        <!--end::Card-->
    </div>
</div>
@endsection

@push('custom-js-scripts')
    <script>
        function readURLs7(input) {
            var id = '#logo-image-preview';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(id).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#logo_image").change(function() {
            readURLs7(this);
        });
    </script>
@endpush