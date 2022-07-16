@extends('admin.layouts.master')

@section('title')
    Page Details
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
                <h3>Page Details</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('e-tower.update_page_details') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 {{ $errors->has('name') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600">Name <span class="text-danger">*</span> </label>

                            <input type="text" name="name" class="form-control m-input" required="required"
                                value="{{ $pageDetail->name != null ? $pageDetail->name : old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('name') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 {{ $errors->has('description') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600">Description <span class="text-danger">*</span> </label>
                            <div id="full-editor">{!! $pageDetail->description !!}</div>
                            <textarea style="display: none" name="description" id="description" class="form-control m-input"
                                >{{ $pageDetail->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('youtube_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Youtube Link <span class="text-danger">*</span></label>

                            <input type="text" name="youtube_link" class="form-control m-input" required="required"
                                value="{{ $pageDetail->youtube_link != null ? $pageDetail->youtube_link : old('youtube_link') }}" placeholder=" Youtube Link">

                            @if ($errors->has('youtube_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('youtube_link') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('location_link') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Location Link <span class="text-danger">*</span></label>

                            <input type="text" name="location_link" class="form-control m-input" required="required"
                                value="{{ $pageDetail->location_link != null ? $pageDetail->location_link : old('location_link') }}" placeholder=" Location Link">

                            @if ($errors->has('location_link'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('location_link') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('brochure_text_name') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Brochure Text Name <span class="text-danger">*</span></label>

                            <input type="text" name="brochure_text_name" class="form-control m-input" required="required"
                                value="{{ $pageDetail->brochure_text_name != null ? $pageDetail->brochure_text_name : old('brochure_text_name') }}" placeholder=" Brochure Text Name">

                            @if ($errors->has('brochure_text_name'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('brochure_text_name') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('brochure_button_name') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Brochure Button Name <span class="text-danger">*</span></label>

                            <input type="text" name="brochure_button_name" class="form-control m-input" required="required"
                                value="{{ $pageDetail->brochure_button_name != null ? $pageDetail->brochure_button_name : old('brochure_button_name') }}" placeholder=" Brochure Text Name">

                            @if ($errors->has('brochure_button_name'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('brochure_button_name') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('brochure_file') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Brochure File <span class="text-danger">*</span></label>

                            <input type="file" name="brochure_file" class="form-control m-input"
                                >
                                <a href="{{ asset('uploads/' . $pageDetail->brochure_file) }}" target="_blank">Open the pdf!</a>

                            @if ($errors->has('brochure_file'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('brochure_file') }} </strong>
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