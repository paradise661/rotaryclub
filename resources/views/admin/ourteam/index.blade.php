@extends('layouts.admin.master')
@section('title', 'Ourteams')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Ourteams ({{ $ourteams->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.ourteams.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <a class="btn btn-secondary" href="{{ route('admin.ourteams.index') }}">
                    All
                </a>
                <a class="btn btn-primary" href="{{ route('admin.ourteams.index', ['status' => 0]) }}">
                    Current Members
                </a>
                <a class="btn btn-success" href="{{ route('admin.ourteams.index', ['status' => 2]) }}">
                    Current Board
                </a>
                <a class="btn btn-danger" href="{{ route('admin.ourteams.index', ['status' => 1]) }}">
                    Past Board
                </a>
            </div>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($ourteams->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($ourteams as $key => $ourteam)
                            <tr>
                                <td><strong>{{ $key + $ourteams->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('admin/images/team') }}/{{ $ourteam->image ?: 'avatar.png' }}">
                                        <img src="{{ asset('admin/images/team') }}/{{ $ourteam->image ?: 'avatar.png' }}"
                                            alt="{{ $ourteam->name }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $ourteam->name ?? '' }}</strong></td>
                                <td>{{ $ourteam->order ?? '' }}</td>
                                <td> <span
                                        class="badge 
                                    {{ $ourteam->status == 0 ? 'bg-label-primary' : ($ourteam->status == 1 ? 'bg-label-danger' : 'bg-label-success') }}">
                                        {{ $ourteam->status == 0 ? 'Current Members' : ($ourteam->status == 1 ? 'Past Board' : 'Current Board') }}
                                    </span>
                                </td>
                                <td>{{ $ourteam->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.ourteams.edit', $ourteam->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('admin.ourteams.destroy', $ourteam->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_ourteam mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $ourteams->links() }}
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
        $('.delete_ourteam').click(function(e) {
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
