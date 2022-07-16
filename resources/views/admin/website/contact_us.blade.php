@extends('admin.layouts.master')

@section('title')
    Contact Us Details
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
                <h3>Contact Us Details</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('udg.update_contact_us') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('email') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Email <span class="text-danger">*</span> </label>

                            <input type="text" name="email" class="form-control m-input" required="required"
                                value="{{ $contact_us->email != null ? $contact_us->email : old('email') }}" placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('email') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('mobile') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Mobile <span class="text-danger">*</span> </label>

                            <input type="mobile" name="mobile" class="form-control m-input" required="required"
                                value="{{ $contact_us->mobile != null ? $contact_us->mobile : old('mobile') }}" placeholder="Mobile">

                            @if ($errors->has('mobile'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('mobile') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('address') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Address <span class="text-danger">*</span> </label>

                            <input type="text" name="address" class="form-control m-input" required="required"
                                value="{{ $contact_us->address != null ? $contact_us->address : old('address') }}" placeholder="Address">

                            @if ($errors->has('address'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('address') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('office_hours') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Office Hours <span class="text-danger">*</span> </label>

                            <input type="text" name="office_hours" class="form-control m-input" required="required"
                                value="{{ $contact_us->office_hours != null ? $contact_us->office_hours : old('office_hours') }}" placeholder="Office Hours">

                            @if ($errors->has('office_hours'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('office_hours') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('facebook_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Facebook Link </label>

                            <input type="text" name="facebook_link" class="form-control m-input"
                                value="{{ $contact_us->facebook_link != null ? $contact_us->facebook_link : old('facebook_link') }}" placeholder=" Facebook Link">

                            @if ($errors->has('facebook_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('facebook_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('twitter_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Twitter Link </label>

                            <input type="text" name="twitter_link" class="form-control m-input"
                                value="{{ $contact_us->twitter_link != null ? $contact_us->twitter_link : old('twitter_link') }}" placeholder=" Twitter Link">

                            @if ($errors->has('twitter_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('twitter_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('instagram_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Instagram Link </label>

                            <input type="text" name="instagram_link" class="form-control m-input"
                                value="{{ $contact_us->instagram_link != null ? $contact_us->instagram_link : old('instagram_link') }}" placeholder=" Instagram Link">

                            @if ($errors->has('instagram_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('instagram_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('linkedin_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Linkedin Link </label>

                            <input type="text" name="linkedin_link" class="form-control m-input"
                                value="{{ $contact_us->linkedin_link != null ? $contact_us->linkedin_link : old('linkedin_link') }}" placeholder=" Linkedin Link">

                            @if ($errors->has('linkedin_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('linkedin_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('youtube_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Youtube Link </label>

                            <input type="text" name="youtube_link" class="form-control m-input"
                                value="{{ $contact_us->youtube_link != null ? $contact_us->youtube_link : old('youtube_link') }}" placeholder=" Youtube Link">

                            @if ($errors->has('youtube_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('youtube_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('map_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Map Link </label>

                            <input type="text" name="map_link" class="form-control m-input"
                                value="{{ $contact_us->map_link != null ? $contact_us->map_link : old('map_link') }}" placeholder=" Map Link">

                            @if ($errors->has('map_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('map_link') }} </strong>
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

@endpush