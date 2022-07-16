@extends('admin.layouts.master')

@section('title')
    View Message
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>View Message</h3>
            </div>


            <!--begin::Form-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Name <span class="text-danger">*</span> </label>

                            <input type="text" name="name" class="form-control m-input"
                                value="{{ $message->name }}" placeholder=" Name" readonly>

                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Email <span class="text-danger">*</span></label>

                            <input type="email" name="email" class="form-control m-input"
                                value="{{ $message->email }}" placeholder=" Email" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Mobile <span class="text-danger">*</span> </label>

                            <input type="number" name="mobile" class="form-control m-input"
                                value="{{ $message->mobile }}" placeholder=" Mobile" readonly>

                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Message </label>
                            <textarea name="message" rows="5" cols="5" class="form-control m-input" placeholder="Message" readonly>{{ $message->message }}</textarea>
                        </div>
                    </div>
                </div>

            <!--end::Form-->
        </div>

        <!--end::Card-->
    </div>
</div>
@endsection

@push('custom-js-scripts')

@endpush