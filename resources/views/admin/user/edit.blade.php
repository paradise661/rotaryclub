@extends('layouts.admin.master')
@section('title', 'Users')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit User</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.users.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="" type="text"
                            name="name" value="{{ old('name', $user->name) }}" placeholder="">
                        @error('name')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="" type="text"
                            name="email" value="{{ old('email', $user->email) }}" placeholder="">
                        @error('email')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="" type="password"
                            name="password" value="{{ old('password') }}" placeholder="">
                        @error('password')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Confirm Password</label>
                        <input class="form-control @error('confirm_password') is-invalid @enderror" id=""
                            type="password" name="confirm_password" value="{{ old('confirm_password') }}" placeholder="">
                        @error('confirm_password')
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
    <script></script>
@endsection
