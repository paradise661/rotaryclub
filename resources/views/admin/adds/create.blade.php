@extends('layouts.admin.master')
@section('title', 'Advertisements')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Advertisements</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.adds.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.adds.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label class="form-label" for="basic-default-fullname">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="" type="text"
                                            name="name" value="{{ old('name') }}" placeholder="">
                                        @error('name')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label" for="basic-default-fullname">Inpage</label>
                                        <select class="form-select @error('inpage') is-invalid @enderror" id=""
                                            name="inpage">
                                            <option value="home">Home</option>
                                            <option value="about">About</option>
                                            <option value="project">Project</option>
                                            <option value="blog">Blogs</option>
                                        </select>
                                        @error('inpage')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        {{-- <input class="form-control @error('inpage') is-invalid @enderror" id=""
                                            type="text" name="inpage" value="{{ old('inpage') }}" placeholder="">
                                        @error('inpage')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Order</label>
                                        <input class="form-control @error('order') is-invalid @enderror" id="" type="number"
                                            name="order" value="{{ old('order') }}" placeholder="">
                                        @error('order')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Status</label>
                                        <select class="form-select @error('status') is-invalid @enderror" id=""
                                            name="status">
                                            <option value="1">Published</option>
                                            <option value="0">Draft</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="basic-default-message">Small Image <span
                                                class="fw-bold">(310 x
                                                250px)</label>
                                        <input class="form-control @error('side_image') is-invalid @enderror image" id=""
                                            type="file" name="side_image">
                                        <img class="view-image mt-2" src="" height="100" alt="">
                                        @error('side_image')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="basic-default-message">Long Image <span
                                                class="fw-bold">(1320 x
                                                150px)</label>
                                        <input class="form-control @error('full_image') is-invalid @enderror image" id=""
                                            type="file" name="full_image">
                                        <img class="view-image mt-2" src="" width="100%" height="100" alt="View Image" style="display:none;">
                                        @error('full_image')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> Create</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function () {
            $(".image").change(function () {
                let input = this;
                let nthis = $(this);

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        // set src and show image
                        nthis.siblings('.view-image')
                            .attr('src', e.target.result)
                            .show();
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    // hide again if no file
                    nthis.siblings('.view-image').hide();
                }
            });
        });
    </script>
@endsection