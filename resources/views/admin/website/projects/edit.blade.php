@extends('admin.layouts.master')

@section('title')
    Edit Project
@endsection

@push('custom-css-scripts')
  <style>
    .image-area {
        position: relative;
    }
    .remove-image {
        display: none;
        position: absolute;
        top: -10px;
        right: 120px;
        border-radius: 10em;
        padding: 2px 6px 3px;
        text-decoration: none;
        font: 700 21px/20px sans-serif;
        background: #555;
        border: 3px solid #fff;
        color: #FFF;
        box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 2px 4px rgba(0,0,0,0.3);
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        -webkit-transition: background 0.5s;
        transition: background 0.5s;
        }
        .remove-image:hover {
        background: #E54E4E;
        padding: 3px 7px 5px;
        top: -11px;
        right: 120px;
        }
        .remove-image:active {
        background: #E54E4E;
        top: -10px;
        right: 120px;
     }
  </style>
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
                    <h3>Update Project</h3>
                </div>


                <!--begin::Form-->
                <form action="{{ route('udg.update_projects', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 {{ $errors->has('title_en') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> English Name <span class="text-danger">*</span> </label>

                                <input type="text" name="title_en" class="form-control m-input" required="required"
                                    value="{{ $project->title_en }}" placeholder="English Name">

                                @if ($errors->has('title_en'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('title_en') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{ $errors->has('title_ar') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Arabic Name <span class="text-danger">*</span> </label>

                                <input type="text" name="title_ar" class="form-control m-input" required="required"
                                    value="{{ $project->title_ar }}" placeholder="Arabic Name">

                                @if ($errors->has('title_ar'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('title_ar') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{ $errors->has('description_en') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> English Description <span class="text-danger">*</span> </label>

                                <textarea rows="5" name="description_en" id="description_en" class="form-control" required="required" placeholder="English Description">{{ $project->description_en }}</textarea>

                                @if ($errors->has('description_en'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('description_en') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{ $errors->has('description_ar') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Arabic Description <span class="text-danger">*</span> </label>

                                <textarea rows="5" name="description_ar" id="description_ar" class="form-control" required="required" placeholder="Arabic Description">{{ $project->description_ar }}</textarea>

                                @if ($errors->has('description_ar'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('description_ar') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{ $errors->has('video') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Video Link <span class="text-danger">*</span> </label>
    
                                <input type="text" name="video" id="video" class="form-control m-input" required="required"
                                    value="{{ $project->video }}" placeholder=" Video Link">
    
                                @if ($errors->has('video'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('video') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{ $errors->has('location') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Location Link <span class="text-danger">*</span> </label>
    
                                <input type="text" name="location" id="location" class="form-control m-input" required="required"
                                    value="{{ $project->location }}" placeholder=" Location Link">
    
                                @if ($errors->has('location'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('location') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12 {{ $errors->has('image') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Main Image <span class="text-danger">*</span></label>

                                <input type="file" name="image" id="image" class="form-control m-input">
                                    <div class="mt-2">
                                        <img src="{{ $project->image != '' ? asset('uploads/' . $project->image) :  '' }}" id="image-preview" width="200px" height="200px" />
                                    </div>
                                @if ($errors->has('image'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('image') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12 {{ $errors->has('images[]') ? ' has-error' : '' }}">
                                <label class="text-bold-600"> Project Images <span class="text-danger">*</span> </label><br>
                                <input type="file" class="form-control" name="images[]" id="images" multiple>
                                <div class="row mt-2" id="result">
                                    @foreach($project->project_images as $project_image)
                                        <div class="col-md-3 mt-2 image-area">
                                            <img src="{{ asset('uploads/' . $project_image->image) }}" width="200px" height="200px" />
                                            <span class="remove-image" data-href="{{ route('udg.remove_project_image', $project_image->id) }}" style="display: inline; cursor: pointer;"><i class="menu-icon tf-icons bx bx-minus-circle" style="margin-right: 0px !important; font-size: 1.20rem !important;"></i></span>
                                        </div>
                                    @endforeach
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
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
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
        // output.innerHTML = "";
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

    $('.remove-image').click(function() {
        var element = $(this);

        swal({
            title: `Are you sure you want to delete this image?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = element.attr("data-href");
            }
        });
    });
</script>
@endpush