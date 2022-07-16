@extends('admin.layouts.master')

@section('title')
    Create Facility
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Facility</h3>
            </div>


            <!--begin::Form-->
            <form action="{{ route('e-tower.store_facility') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-50">
                            <label class="text-bold-600"> Display Type <span class="text-danger">*</span> </label>
                            <select name="type" id="type" class="form-control m-input">
                                <option name="small_block" value="small_block">Small Block</option>
                                <option name="big_block" value="big_block">Big Block</option>
                            </select> 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 {{ $errors->has('name') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Name <span class="text-danger">*</span> </label>

                            <input type="text" name="name" id="name" class="form-control m-input" required="required"
                                value="{{ old('name') }}" placeholder=" Name">

                            @if ($errors->has('name'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('name') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 {{ $errors->has('image') ? ' has-error' : '' }} mb-50">
                            <label class="text-bold-600"> Image <span class="text-danger">*</span></label>

                            <input type="file" name="image" id="image" class="form-control m-input" required="required"
                                >
                                <div class="mt-2">
                                    <img id="image-preview" width="200px" />
                                </div>
                            @if ($errors->has('image'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('image') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div id="small_block">

                    </div>
                    <div id="big_block" style="display: none">
                        <div class="row">
                            <div class="col-lg-6 {{ $errors->has('description') ? ' has-error' : '' }} mb-50">
                                <label class="text-bold-600"> Description <span class="text-danger">*</span> </label>
                                
                                <div id="full-editor"></div>
                                <textarea style="display: none" name="description" id="description" class="form-control m-input"
                                    ></textarea>
    
                                @if ($errors->has('description'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('description') }} </strong>
                                    </span>
                                @endif
                            </div>
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

        $('#type').change(function(){
            if($('#type').val() == 'small_block') {
                $('#small_block').show(); 
                $('#big_block').hide(); 
            } else {
                $('#big_block').show(); 
                $('#small_block').hide(); 
            } 
        });
    </script>
@endpush