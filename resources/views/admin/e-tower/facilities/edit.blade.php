@extends('admin.layouts.master')

@section('title')
    Edit Facility
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Update Facility</h3>
                </div>


                <!--begin::Form-->
                <form action="{{ route('e-tower.update_facility', $facility->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 {{ $errors->has('name') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Name <span class="text-danger">*</span> </label>

                                <input type="text" name="name" class="form-control m-input" required="required"
                                    value="{{ $facility->name }}" placeholder=" Name">

                                @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('name') }} </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 {{ $errors->has('image') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Image <span class="text-danger">*</span></label>

                                <input type="file" name="image" id="image" class="form-control m-input"
                                    >
                                    <div class="mt-2">
                                        <img id="image-preview" width="200px" />
                                    </div>
                                    {{-- @if($facility->image !== NULL)
                                        <div class="col text-center">
                                            <img src="{{ asset('uploads/' . $facility->image) }}" width="100px" height="100px;">
                                        </div>
                                    @endif --}}
                                @if ($errors->has('image'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('image') }} </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if($facility->description !== NULL)
                            <div class="row">
                                <div class="col-lg-6 {{ $errors->has('description') ? ' has-error' : '' }} mb-50">
                                    <label class="text-bold-600"> Description <span class="text-danger">*</span> </label>
        
                                    <div id="full-editor">{!! $facility->description !!}</div>
                                    <textarea style="display: none" name="description" id="description" class="form-control m-input" required="required"
                                        >{{ $facility->description }}</textarea>

        
                                    @if ($errors->has('description'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('description') }} </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif
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
</script>
@endpush