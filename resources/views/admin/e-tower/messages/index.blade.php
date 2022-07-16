@extends('admin.layouts.master')

@section('title')
    Messages
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
                    <div class="col-md-8">
                        <h4 class="card-title">Messages</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                @if(count($messages))
                <table class="table">
                <thead class=" text-primary">
                    <th>
                    ID
                    </th>
                    <th>
                    Name
                    </th>
                    <th>
                    Email
                    </th>
                    <th>
                        Mobile
                    </th>
                    <th>
                        Message
                    </th>
                    <th>
                        Sent at
                    </th>
                    <th class="text-right">
                        Control
                    </th>
                </thead>
                @foreach ($messages as $message)
                <tbody>
                    <tr>
                    <td>
                        {{$message->id}}
                    </td>
                    <td>
                        {{$message->name}}
                    </td>
                    <td>
                        {{$message->email}}
                    </td>
                    <td>
                        {{$message->mobile}}
                    </td>
                    @if($message->message !== NULL)
                        @if(strlen($message->message) > 25)
                            <td>
                                {!! mb_substr(nl2br(e($message->message)), 0, 25) !!}...
                            </td>
                        @else
                            <td>
                                {!! nl2br(e($message->message)) !!}
                            </td>
                        @endif
                    @else
                        <td> - </td>
                    @endif
                    <td>
                        {{ $message->created_at->diffForHumans() }}
                    </td>
                    <td class="td-actions text-right">
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('e-tower.view_message', $message->id) }}"
                                    ><i class="bx bx-search-alt me-1"></i> View</a
                                    >
                                <form action="{{ route('e-tower.delete_message', $message->id) }}" method="POST">
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
                    <h3 class="text-center">No Messages Found</h3>
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