@extends('layouts.admin.master')
@section('title', 'Adds')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Advertisements </h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.adds.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($adds->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>In Page</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($adds as $key => $add)
                            <tr>
                                <td><strong>{{ $key + $adds->firstItem() }}</strong></td>
                                <td><strong>{{ $add->name ?? '' }}</strong></td>
                                <td><strong>{{ $add->inpage ?? '' }}</strong></td>
                                <td><span
                                        class="badge {{ $add->status == 0 ? 'bg-label-danger' : 'bg-label-success' }}">{{ $add->status == 0 ? 'Draft' : 'Published' }}</span>
                                </td>
                                <td>{{ $add->order ?? '-' }}</td>
                                <td>{{ $add->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.adds.edit', $add->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('admin.adds.destroy', $add->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_add mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $adds->links() }}
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
        $('.delete_add').click(function(e) {
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
