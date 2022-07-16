@extends('admin.layouts.master')

@section('title')
    Create Why Choose Us
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Why Choose Us</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('udg.store_why_choose_us') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('title_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English Name <span class="text-danger">*</span> </label>

                            <input type="text" name="title_en" id="title_en" class="form-control m-input" required="required"
                                value="{{ old('title_en') }}" placeholder=" English Name">

                            @if ($errors->has('title_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('title_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('title_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic Name <span class="text-danger">*</span> </label>

                            <input type="text" name="title_ar" id="title_ar" class="form-control m-input" required="required"
                                value="{{ old('title_ar') }}" placeholder=" Arabic Name">

                            @if ($errors->has('title_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('title_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('description_en') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> English Description <span class="text-danger">*</span> </label>

                            <textarea rows="5" name="description_en" id="description_en" class="form-control" required="required" placeholder="English Description">{{ old('description_en') }}</textarea>

                            @if ($errors->has('description_en'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description_en') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('description_ar') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Arabic Description <span class="text-danger">*</span> </label>

                            <textarea rows="5" name="description_ar" id="description_ar" class="form-control" required="required" placeholder="Arabic Description">{{ old('description_ar') }}</textarea>

                            @if ($errors->has('description_ar'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('description_ar') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('image') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Image <span class="text-danger">*</span></label>

                            <input type="file" name="image" id="image" class="form-control m-input" required="required"
                                >
                                <div class="mt-2">
                                    <img id="image-preview" width="200px" height="200px" />
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
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
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