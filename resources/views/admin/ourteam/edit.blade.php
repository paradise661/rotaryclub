@extends('layouts.admin.master')
@section('title', 'Ourteams')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Ourteam </h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.ourteams.index') }}"><i
                            class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.ourteams.update', $ourteam->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id=""
                                    type="text" value="{{ old('name', $ourteam->name) }}" name="name" placeholder="">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Position</label>
                                <input class="form-control @error('position') is-invalid @enderror" id=""
                                    type="text" value="{{ old('position', $ourteam->position) }}" name="position"
                                    placeholder="">
                                @error('position')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id=""
                                    type="email" value="{{ old('email', $ourteam->email) }}" name="email"
                                    placeholder="">
                                @error('email')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Phone</label>
                                <input class="form-control @error('phone') is-invalid @enderror" id=""
                                    type="number" value="{{ old('phone', $ourteam->phone) }}" name="phone"
                                    placeholder="">
                                @error('phone')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="status-select">Status</label>
                                <select class="form-select @error('status') is-invalid @enderror" id="status-select"
                                    name="status">
                                    <option {{ old('status', $ourteam->status) == 2 ? 'selected' : '' }} value="2">
                                        Current Board</option>
                                    <option {{ old('status', $ourteam->status) == 1 ? 'selected' : '' }} value="1">
                                        Past
                                        Board</option>
                                    <option {{ old('status', $ourteam->status) == 0 ? 'selected' : '' }} value="0">
                                        Current Members</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Order</label>
                                <input class="form-control @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $ourteam->order) }}">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Address</label>
                                <input class="form-control @error('address') is-invalid @enderror" id=""
                                    type="text" value="{{ old('address', $ourteam->address) }}" name="address"
                                    placeholder="">
                                @error('address')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="status-select">Blood Group</label>
                                <select class="form-select @error('bloodgroup') is-invalid @enderror" id="status-select"
                                    name="bloodgroup">
                                    <option value="" disabled
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == '' ? 'selected' : '' }}>Select Blood
                                        group</option>
                                    <option value="A+"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="B+"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'B+' ? 'selected' : '' }}>B+</option>
                                    <option value="AB+"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'AB+' ? 'selected' : '' }}>AB+
                                    </option>
                                    <option value="O+"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'O+' ? 'selected' : '' }}>O+</option>
                                    <option value="A-"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'A-' ? 'selected' : '' }}>A-</option>
                                    <option value="B-"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'B-' ? 'selected' : '' }}>B-</option>
                                    <option value="AB-"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'AB-' ? 'selected' : '' }}>AB-
                                    </option>
                                    <option value="O-"
                                        {{ old('bloodgroup', $ourteam->bloodgroup) == 'O-' ? 'selected' : '' }}>O-</option>
                                </select>
                                @error('bloodgroup')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="status-select">Profession</label>
                                <select class="form-select @error('profession') is-invalid @enderror" id="status-select"
                                    name="profession">
                                    <option value="" disabled
                                        {{ old('profession', $ourteam->profession) == '' ? 'selected' : '' }}>Select
                                        Profession</option>
                                    <option value="NGO / INGO / Social work"
                                        {{ old('profession', $ourteam->profession) == 'NGO / INGO / Social work' ? 'selected' : '' }}>
                                        NGO / INGO / Social work
                                    </option>
                                    <option value="Software Development / IT / Telecommunication"
                                        {{ old('profession', $ourteam->profession) == 'Software Development / IT / Telecommunication' ? 'selected' : '' }}>
                                        Software Development / IT / Telecommunication
                                    </option>
                                    <option value="Student- Finance/Management/Account/IT"
                                        {{ old('profession', $ourteam->profession) == 'Student- Finance/Management/Account/IT' ? 'selected' : '' }}>
                                        Student- Finance/Management/Account/IT
                                    </option>
                                    <option value="Student -Medical/Science"
                                        {{ old('profession', $ourteam->profession) == 'Student -Medical/Science' ? 'selected' : '' }}>
                                        Student -Medical/Science
                                    </option>
                                    <option value="Student-Engineering (Civil/ Mechanical/ Computer/Communication)"
                                        {{ old('profession', $ourteam->profession) == 'Student-Engineering (Civil/ Mechanical/ Computer/Communication)' ? 'selected' : '' }}>
                                        Student-Engineering (Civil/ Mechanical/ Computer/Communication)
                                    </option>
                                    <option value="Student- Legal Service"
                                        {{ old('profession', $ourteam->profession) == 'Student- Legal Service' ? 'selected' : '' }}>
                                        Student- Legal Service
                                    </option>
                                    <option value="Teaching/ Education"
                                        {{ old('profession', $ourteam->profession) == 'Teaching/ Education' ? 'selected' : '' }}>
                                        Teaching/ Education
                                    </option>
                                    <option value="Banker/ Administration/ Account/ Management/Insurance/Financial"
                                        {{ old('profession', $ourteam->profession) == 'Banker/ Administration/ Account/ Management/Insurance/Financial' ? 'selected' : '' }}>
                                        Banker/ Administration/ Account/ Management/Insurance/Financial
                                    </option>
                                    <option value="Business/ Entrepreneur/Human Resource Management"
                                        {{ old('profession', $ourteam->profession) == 'Business/ Entrepreneur/Human Resource Management' ? 'selected' : '' }}>
                                        Business/ Entrepreneur/Human Resource Management
                                    </option>
                                    <option value="Healthcare/ Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab"
                                        {{ old('profession', $ourteam->profession) == 'Healthcare/ Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab' ? 'selected' : '' }}>
                                        Healthcare/ Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab
                                    </option>
                                    <option value="Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic"
                                        {{ old('profession', $ourteam->profession) == 'Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic' ? 'selected' : '' }}>
                                        Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic
                                    </option>
                                    <option value="Engineer (Civil/ Mechanical/ Computer/Communication)"
                                        {{ old('profession', $ourteam->profession) == 'Engineer (Civil/ Mechanical/ Computer/Communication)' ? 'selected' : '' }}>
                                        Engineer (Civil/ Mechanical/ Computer/Communication)
                                    </option>
                                </select>

                                @error('profession')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Date of Birth</label>
                                <input class="form-control flatpicker @error('dob') is-invalid @enderror" id=""
                                    type="text" value="{{ old('dob', $ourteam->dob) }}" name="dob"
                                    placeholder="">
                                @error('dob')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Join Date</label>
                                <input class="form-control flatpicker @error('joindate') is-invalid @enderror"
                                    id="" type="text" value="{{ old('joindate', $ourteam->joindate) }}"
                                    name="joindate" placeholder="">
                                @error('joindate')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Rota Year <span
                                        style="font-weight: 600">(Not for
                                        member)</span> </label>
                                <input class="form-control @error('oldyear') is-invalid @enderror" id=""
                                    type="text" value="{{ old('oldyear', $ourteam->oldyear) }}" name="oldyear"
                                    placeholder="">
                                @error('oldyear')
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
                            rows="8" placeholder="">{{ old('description', $ourteam->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Image <span class="fw-bold">(150 x
                                150px)</span></label>
                        <input class="form-control @error('image') is-invalid @enderror image" id=""
                            type="file" name="image">
                        <img class="view-image mt-2" src="" height="60" alt="">
                        @if ($ourteam->image)
                            <img class="mt-2 old-image" src="{{ asset('admin/images/team/' . $ourteam->image) }}"
                                width="100">
                        @endif
                        @error('image')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-4">
                            <label class="form-label" for="basic-default-fullname">Facebook Link</label>
                            <input class="form-control @error('facebook_link') is-invalid @enderror" id=""
                                type="text" name="facebook_link"
                                value="{{ old('facebook_link', $ourteam->facebook_link) }}" placeholder="">
                            @error('facebook_link')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="basic-default-fullname">Twitter Link</label>
                            <input class="form-control @error('twitter_link') is-invalid @enderror" id=""
                                type="text" name="twitter_link"
                                value="{{ old('twitter_link', $ourteam->twitter_link) }}" placeholder="">
                            @error('twitter_link')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="basic-default-fullname">Instagram Link</label>
                            <input class="form-control @error('instagram_link') is-invalid @enderror" id=""
                                type="text" name="instagram_link"
                                value="{{ old('instagram_link', $ourteam->instagram_link) }}" placeholder="">
                            @error('instagram_link')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-rotate"></i>
                        Update</button>
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
