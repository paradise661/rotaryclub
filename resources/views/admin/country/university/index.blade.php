@extends('layouts.admin.master')
@section('title', 'Universities')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Universities in "{{ $country->name ?? '' }}" </h5>
            <div>
                <small class="text-muted " style="margin-right: 15px">
                    <a class="btn  btn-danger" href="{{ route('admin.countries.index') }}"><i
                            class="fa-solid fa-left-long"></i>
                        Back</a>
                </small>
                <small class="text-muted ">
                    <a class="btn btn-primary" href="{{ route('admin.country.university.create', $country->id) }}"><i
                            class="fa-solid fa-plus"></i>
                        Create</a>
                </small>
            </div>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($universities->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Order</th>
                            <th>Description</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($universities as $key => $university)
                            <tr>
                                <td><strong>{{ $key + $universities->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ $university->image ?: 'avatar.png' }}">
                                        <img src="{{ $university->image ?: 'avatar.png' }}" alt="{{ $university->title }}"
                                            width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $university->title ?? '' }}</strong></td>
                                <td>{{ $university->order ?? '' }}</td>
                                <td>{!! $university->description ?? '' !!}</td>

                                <td>{{ $university->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.country.university.edit', ['countryuniversity' => $university->id, 'country_id' => $university->country_id]) }}"
                                        style="float: left;margin-right: 5px;">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>

                                    <form class="delete-form"
                                        action="{{ route('admin.country.university.destroy', ['countryuniversity' => $university->id, 'country_id' => $university->country_id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_country_universities mr-2"
                                            id="" data-type="confirm" type="submit" title="Delete"><i
                                                class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $universities->links() }}
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
        $('.delete_country_universities').click(function(e) {
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
