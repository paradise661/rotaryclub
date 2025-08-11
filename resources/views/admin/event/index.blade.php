@extends('layouts.admin.master')
@section('title', 'Events')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Events ({{ $events->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.events.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($events->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            {{-- <th>Image</th> --}}
                            <th>Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($events as $key => $event)
                            <tr>
                                <td><strong>{{ $key + $events->firstItem() }}</strong></td>
                                {{-- <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('admin/images/event') }}/{{ $event->image ?: 'avatar.png' }}">
                                        <img src="{{ asset('admin/images/event') }}/{{ $event->image ?: 'avatar.png' }}"
                                            alt="{{ $event->name }}" width="80px">
                                    </a>
                                </td> --}}
                                <td><strong>{{ $event->name ?? '' }}</strong></td>
                                <td>{{ $event->location ?? '' }}</td>
                                <td>{{ $event->date ?? '' }}</td>
                                <td> {{ date('g:i A', strtotime($event->time)) ?? 'N/A' }}</td>
                                <td>
                                    {{ date('g:i A', strtotime($event->time_to)) ?? 'N/A' }}
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.events.edit', $event->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form" action="{{ route('admin.events.destroy', $event->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_event mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $events->links() }}
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
        $('.delete_event').click(function(e) {
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
