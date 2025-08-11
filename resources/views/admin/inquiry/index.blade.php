@extends('layouts.admin.master')
@section('title', 'Inquiry Persons')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Inquiry Persons ({{ $inquiries->total() }})</h5>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($inquiries->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($inquiries as $key => $inquiry)
                            <tr>
                                <td><strong>{{ $key + $inquiries->firstItem() }}</strong></td>

                                <td><strong>{{ $inquiry->name ?? '' }}</strong></td>
                                <td>{{ $inquiry->email ?? '' }}</td>
                                <td>{{ $inquiry->phone ?? '' }}</td>
                                <td>{{ $inquiry->subject ?? '' }}</td>
                                <td style="white-space: break-spaces;">{{ $inquiry->message ?? '' }}</td>
                                <td>{{ $inquiry->updated_at->diffForHumans() }}</td>
                                <td>
                                    <form class="delete-form" action="{{ route('admin.inquiries.destroy', $inquiry->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_inquiry mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $inquiries->links() }}
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete_inquiry').click(function(e) {
            e.preventDefault();
            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(this).closest("form").submit();
                    }
                });

        });
    </script>
@endsection
