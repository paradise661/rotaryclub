@extends('layouts.admin.master')
@section('title', 'Events')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Event </h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.events.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.events.update', $event->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-fullname">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id=""
                                        type="text" value="{{ old('name', $event->name) }}" name="name"
                                        placeholder="">
                                    @error('name')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-fullname">Location</label>
                                    <input class="form-control @error('location') is-invalid @enderror" id=""
                                        type="text" value="{{ old('location', $event->location) }}" name="location"
                                        placeholder="">
                                    @error('location')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">

                                <div class="col-md-3">
                                    <label class="form-label" for="basic-default-fullname">Date</label>
                                    <input class="form-control flatpicker @error('date') is-invalid @enderror"
                                        id="" type="text" value="{{ old('date', $event->date) }}" name="date"
                                        placeholder="">
                                    @error('date')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="basic-default-fullname">Start Time</label>
                                    <input class="form-control timepicker @error('time') is-invalid @enderror"
                                        id="" type="time" value="{{ old('time', $event->time) }}" name="time"
                                        placeholder="">
                                    @error('time')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="basic-default-fullname">End Time</label>
                                    <input class="form-control timepicker @error('time_to') is-invalid @enderror"
                                        id="" type="time" value="{{ old('time_to', $event->time_to) }}"
                                        name="time_to" placeholder="">
                                    @error('time_to')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="basic-default-fullname">Status</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id=""
                                        name="status">
                                        <option {{ $event->status == 1 ? 'selected' : '' }} value="1">
                                            Published
                                        </option>
                                        <option {{ $event->status == 0 ? 'selected' : '' }} value="0">Draft
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror ckeditor" id="" name="description"
                                    rows="8" placeholder="">{{ old('description', $event->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Short Description</label>
                                <textarea class="form-control @error('short_description') is-invalid @enderror" id="" name="short_description"
                                    rows="4" placeholder="">{{ old('short_description', $event->short_description) }}</textarea>
                                @error('short_description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Image</label>
                                <input class="form-control @error('image') is-invalid @enderror image" id=""
                                    type="file" name="image">
                                <img class="view-image mt-2" src="" height="60" alt="">
                                @if ($event->image)
                                    <img class="mt-2 old-image" src="{{ asset('admin/images/event/' . $event->image) }}"
                                        width="100">
                                @endif
                                @error('image')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-body seo my-3 shadow br-8 p-4">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Seo Title</label>
                                    <input class="form-control @error('seo_title') is-invalid @enderror" id=""
                                        type="text" name="seo_title"
                                        value="{{ old('seo_title', $event->seo_title) }}" placeholder="">
                                    @error('seo_title')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" id="" name="meta_description"
                                        rows="8">{{ old('meta_description', $event->meta_description) }}</textarea>
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
                                        value="{{ old('meta_keywords', $event->meta_keywords) }}" placeholder="">
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
