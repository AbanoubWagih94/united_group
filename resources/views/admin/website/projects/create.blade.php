@extends('admin.layouts.master')

@section('title')
    Create Project
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Project</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('udg.store_projects') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="col-lg-6 {{ $errors->has('video') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Video Link <span class="text-danger">*</span> </label>

                            <input type="text" name="video" id="video" class="form-control m-input" required="required"
                                value="{{ old('video') }}" placeholder=" Video Link">

                            @if ($errors->has('video'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('video') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('location') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Location Link <span class="text-danger">*</span> </label>

                            <input type="text" name="location" id="location" class="form-control m-input" required="required"
                                value="{{ old('location') }}" placeholder=" Location Link">

                            @if ($errors->has('location'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('location') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-12 {{ $errors->has('image') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Main Image <span class="text-danger">*</span></label>

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
                        <div class="col-lg-12 {{ $errors->has('images[]') ? ' has-error' : '' }}">
                            <label class="text-bold-600"> Project Images <span class="text-danger">*</span>
                            </label><br>
                            <input type="file" class="form-control" name="images[]" id="images" multiple required>
                            <div class="row mt-2" id="result">

                            </div>
                            @if ($errors->has('images[]'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('images[]') }} </strong>
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

     $('#images').change(function(event) {
            var files = event.target.files;
            var output = document.getElementById("result");
            output.innerHTML = "";
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image'))
                continue;
                var picReader = new FileReader();
                picReader.addEventListener("load", function(event) {
                var picFile = event.target;
                var div = document.createElement("div");
                div.className = "col-md-3 mt-2";
                div.innerHTML = "<img class='thumbnail' width='200px' height='200px' src='" + picFile.result + "'" +
                    "title='" + picFile.name + "'/>";
                output.insertBefore(div, null);
                });
                picReader.readAsDataURL(file);
            }
        });
 </script>
@endpush