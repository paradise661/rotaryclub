@extends('layouts.admin.master')
@section('title', 'Achievements')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Achievement</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.achievements.index') }}"><i
                            class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.achievements.update', $achievement->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="form-label" for="basic-default-fullname">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id=""
                                            type="text" value="{{ old('title', $achievement->title) }}" name="title"
                                            placeholder="">
                                        @error('title')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Location</label>
                                        <input class="form-control @error('slogan') is-invalid @enderror" id=""
                                            type="text" name="slogan" value="{{ old('slogan', $achievement->slogan) }}"
                                            placeholder="">
                                        @error('slogan')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label" for="basic-default-message">Participation Members</label>
                                        <textarea class="form-control @error('short_description') is-invalid @enderror" id="" name="short_description"
                                            placeholder="">
                                            {{ old('short_description', $achievement->short_description) }}</textarea>
                                        @error('short_description')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="basic-default-fullname">Coordinator</label>
                                        <input class="form-control @error('coordinator') is-invalid @enderror"
                                            id="" type="text"
                                            value="{{ old('coordinator', $achievement->coordinator) }}" name="coordinator"
                                            placeholder="">
                                        @error('coordinator')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Date</label>
                                        <input class="form-control flatpicker @error('date') is-invalid @enderror"
                                            id="" type="date" name="date"
                                            value="{{ old('date', $achievement->date) }}" placeholder="">
                                        @error('date')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Order</label>
                                        <input class="form-control @error('order') is-invalid @enderror" id=""
                                            type="number" name="order" value="{{ old('order', $achievement->order) }}"
                                            placeholder="">
                                        @error('order')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Status</label>
                                        <select class="form-select @error('status') is-invalid @enderror" id=""
                                            name="status">
                                            <option {{ $achievement->status == 1 ? 'selected' : '' }} value="1">
                                                Published
                                            </option>
                                            <option {{ $achievement->status == 0 ? 'selected' : '' }} value="0">Draft
                                            </option>
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
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror ckeditor" id="" name="description"
                                        rows="8" placeholder="">{{ old('description', $achievement->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body seo my-3 shadow br-8 p-4">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Image<span
                                            class="fw-bold"></label>
                                    <input class="form-control @error('image') is-invalid @enderror image" id=""
                                        type="file" name="image">
                                    <img class="view-image mt-2" src="" height="60" alt="">
                                    @if ($achievement->image)
                                        <img class="mt-2 old-image"
                                            src="{{ asset('admin/images/achievement/' . $achievement->image) }}"
                                            width="100">
                                    @endif
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3"></label>
                                    <input class="form-control @error('secondimage') is-invalid @enderror image"
                                        id="" type="file" name="secondimage">
                                    <img class="view-image mt-2" src="" height="60" alt="">
                                    @if ($achievement->secondimage)
                                        <img class="mt-2 old-image"
                                            src="{{ asset('admin/images/achievement/' . $achievement->secondimage) }}"
                                            width="100">
                                    @endif
                                    @error('secondimage')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card card-body seo my-3 shadow br-8 p-4">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Seo Title</label>
                                    <input class="form-control @error('seo_title') is-invalid @enderror" id=""
                                        type="text" name="seo_title"
                                        value="{{ old('seo_title', $achievement->seo_title) }}" placeholder="">
                                    @error('seo_title')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" id=""
                                        name="meta_description" rows="6">{{ old('meta_description', $achievement->meta_description) }}</textarea>
                                    @error('meta_description')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Meta Keywords</label>
                                    <input class="form-control @error('meta_keywords') is-invalid @enderror"
                                        id="" type="text" name="meta_keywords"
                                        value="{{ old('meta_keywords', $achievement->meta_keywords) }}" placeholder="">
                                    @error('meta_keywords')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-rotate"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".image").change(function() {
            input = this;
            var nthis = $(this);

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    nthis.siblings('.old-image').hide();
                    nthis.siblings('.view-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endsection
