@extends('layouts.admin.master')
@section('title', 'Ourteams')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Ourteam </h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.messages.index') }}"><i
                            class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.messages.update', $message->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="" type="text"
                            value="{{ old('name', $message->name) }}" name="name" placeholder="">
                        @error('name')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="basic-default-fullname">Position</label>
                                <input class="form-control @error('position') is-invalid @enderror" id=""
                                    type="text" value="{{ old('position', $message->position) }}" name="position"
                                    placeholder="">
                                @error('position')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="basic-default-fullname">Order</label>
                                <input class="form-control @error('order') is-invalid @enderror" id=""
                                    type="number" value="{{ old('order', $message->order) }}" name="order"
                                    placeholder="">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Description</label>
                        <textarea class="form-control ckeditor @error('description') is-invalid @enderror" id="" name="description"
                            rows="8" placeholder="">{{ old('description', $message->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Image <span class="fw-bold">(150 x
                                150px)</span></label>
                        <input class="form-control @error('image') is-invalid @enderror image" id="" type="file"
                            name="image">
                        <img class="view-image mt-2" src="" height="60" alt="">
                        @if ($message->image)
                            <img class="mt-2 old-image" src="{{ asset('admin/images/message/' . $message->image) }}"
                                width="100">
                        @endif
                        @error('image')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
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
