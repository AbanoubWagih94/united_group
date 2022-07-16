@extends('admin.layouts.master')

@section('title')
    Home Sliders
@endsection

@push('custom-css-scripts')
  
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="card-title">Home Sliders</h4>
                    </div>
                    <div class="col-md-2 text-right">
                        <a class="btn btn-primary btn-round" href="{{ route('udg.create_slider') }}">Add Home Slider</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                @if(count($homeSliders))
                <table class="table">
                <thead class=" text-primary">
                    <th>
                    ID
                    </th>
                    <th>
                    Name
                    </th>
                    <th>
                    Description
                    </th>
                    <th>
                    Button
                    </th>
                    <th>
                    Image
                    </th>
                    <th class="text-right">
                        Control
                    </th>
                </thead>
                @foreach ($homeSliders as $homeSlider)
                <tbody>
                    <tr>
                    <td>
                        {{$homeSlider->id}}
                    </td>
                    <td>
                        {{$homeSlider->title_en}}
                    </td>
                    <td>
                        {{$homeSlider->description_en}}
                    </td>
                    <td>
                        {{$homeSlider->button_en}}
                    </td>
                    <td>
                        <img src="{{ asset('uploads/' . $homeSlider->image) }}" width="100px" height="100px">
                    </td>
                    <td class="td-actions text-right">
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('udg.edit_slider', $homeSlider->id) }}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                <form action="{{ route('udg.delete_slider', $homeSlider->id) }}" method="POST">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="dropdown-item show_confirm" type="submit" data-toggle="tooltip" title='Delete'><i class="bx bx-trash me-1"></i> Delete</button>
                                </form>
                            </div>
                          </div>
                    </td>
                    </tr>
                </tbody>
                @endforeach
                </table>
                    @else
                    <h3 class="text-center">No Home Sliders Found</h3>
                @endif
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('custom-js-scripts')
    <script>
        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
@endpush