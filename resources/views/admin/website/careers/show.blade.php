@extends('admin.layouts.master')

@section('title')
    Show Career
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Career</h3>
                </div>


                <!--begin::Form-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Name</label>
                            <input type="text" name="name" class="form-control m-input"
                                value="{{ $career->name }}" placeholder="Name" readonly>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Email</label>
                            <input type="text" name="email" class="form-control m-input"
                                value="{{ $career->email }}" placeholder="Email" readonly>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Phone</label>
                            <input type="text" name="phone" class="form-control m-input"
                                value="{{ $career->phone }}" placeholder="Phone" readonly>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Graduation Year</label>
                            <input type="number" name="graduation_year" class="form-control m-input"
                                value="{{ $career->graduation_year }}" placeholder="Graduation Year" readonly>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Current Salary</label>
                            <input type="number" name="current_salary" class="form-control m-input"
                                value="{{ $career->current_salary }}" placeholder="Current Salary" readonly>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> Expected Salary</label>
                            <input type="number" name="expected_salary" class="form-control m-input"
                                value="{{ $career->expected_salary }}" placeholder="Expected Salary" readonly>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <label class="text-bold-600"> CV File </label><br>
                            <a href="{{ asset('uploads/cvs/' . $career->cv) }}" class="btn btn-primary" target="_blank">View CV</a>
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