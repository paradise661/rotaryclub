@extends('layouts.admin.master')
@section('title', 'Members')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Members ({{ $members->total() }})</h5>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($members->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($members as $key => $member)
                            <tr>
                                <td><strong>{{ $key + $members->firstItem() }}</strong></td>

                                <td><strong>{{ $member->name ?? '' }}</strong></td>
                                <td>{{ $member->email ?? '' }}</td>
                                <td>{{ $member->phone ?? '' }}</td>
                                <td>{{ $member->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('admin.members.show', $member->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-eye"></i> Show
                                    </a>

                                    <form class="delete-form" action="{{ route('admin.members.destroy', $member->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_member mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $members->links() }}
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
        $('.delete_member').click(function(e) {
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
