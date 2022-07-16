@extends('admin.layouts.master')

@section('title')
    About Us Details
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
                <h3>About Us Details</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('udg.update_details') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('title_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English Name <span class="text-danger">*</span> </label>

                            <input type="text" name="title_en" class="form-control m-input" required="required"
                                value="{{ $aboutUsDetail->title_en != null ? $aboutUsDetail->title_en : old('title_en') }}" placeholder="English Name">

                            @if ($errors->has('title_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('title_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('title_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic Name <span class="text-danger">*</span> </label>

                            <input type="text" name="title_ar" class="form-control m-input" required="required"
                                value="{{ $aboutUsDetail->title_ar != null ? $aboutUsDetail->title_ar : old('title_ar') }}" placeholder="Arabic Name">

                            @if ($errors->has('title_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('title_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('description_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English Description <span class="text-danger">*</span> </label>

                            <textarea rows="5" name="description_en" id="description_en" class="form-control" required="required" placeholder="English Description">{{ $aboutUsDetail->description_en != null ? $aboutUsDetail->description_en : old('description_en') }}</textarea>

                            @if ($errors->has('description_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('description_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic Description <span class="text-danger">*</span> </label>

                            <textarea rows="5" name="description_ar" id="description_ar" class="form-control" required="required" placeholder="Arabic Description">{{ $aboutUsDetail->description_ar != null ? $aboutUsDetail->description_ar : old('description_ar') }}</textarea>

                            @if ($errors->has('description_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('button_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English Button <span class="text-danger">*</span> </label>

                            <input type="text" name="button_en" class="form-control m-input" required="required"
                                value="{{ $aboutUsDetail->button_en != null ? $aboutUsDetail->button_en : old('button_en') }}" placeholder="English Button">

                            @if ($errors->has('button_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('button_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('button_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic Button <span class="text-danger">*</span> </label>

                            <input type="text" name="button_ar" class="form-control m-input" required="required"
                                value="{{ $aboutUsDetail->button_ar != null ? $aboutUsDetail->button_ar : old('button_ar') }}" placeholder="Arabic Button">

                            @if ($errors->has('button_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('button_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('image') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Image <span class="text-danger">*</span></label>

                            <input type="file" name="image" id="image" class="form-control m-input">
                                <div class="mt-2">
                                    <img src="{{ $aboutUsDetail->image != '' ? asset('uploads/' . $aboutUsDetail->image) :  '' }}" id="image-preview" width="200px" height="200px" />
                                </div>
                            @if ($errors->has('image'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('image') }} </strong>
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
            var id = '#image-preview';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(id).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            readURLs7(this);
        });
    </script>
@endpush