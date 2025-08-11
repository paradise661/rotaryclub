@extends('layouts.admin.master')
@section('title', 'Achievements')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Achievements </h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.achievements.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($achievements->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($achievements as $key => $achievement)
                            <tr>
                                <td><strong>{{ $key + $achievements->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('admin/images/achievement') }}/{{ $achievement->image ?: 'avatar.png' }}">
                                        <img src="{{ asset('admin/images/achievement') }}/{{ $achievement->image ?: 'avatar.png' }}"
                                            alt="{{ $achievement->name }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $achievement->title ?? '' }}</strong></td>
                                <td><span
                                        class="badge {{ $achievement->status == 0 ? 'bg-label-danger' : 'bg-label-success' }}">{{ $achievement->status == 0 ? 'Draft' : 'Published' }}</span>
                                </td>
                                <td>{{ $achievement->order ?? '-' }}</td>
                                <td>{{ $achievement->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.achievements.edit', $achievement->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form"
                                        action="{{ route('admin.achievements.destroy', $achievement->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_achievement mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $achievements->links() }}
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
        $('.delete_achievement').click(function(e) {
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
