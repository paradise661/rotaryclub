@extends('layouts.admin.master')
@section('title', 'Ourteams')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Ourteam</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.ourteams.index') }}"><i
                            class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.ourteams.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id=""
                                    type="text" name="name" value="{{ old('name') }}" placeholder="">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Position</label>
                                <input class="form-control @error('position') is-invalid @enderror" id=""
                                    type="text" name="position" value="{{ old('position') }}" placeholder="">
                                @error('position')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id=""
                                    type="email" name="email" value="{{ old('email') }}" placeholder="">
                                @error('email')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Phone</label>
                                <input class="form-control @error('phone') is-invalid @enderror" id=""
                                    type="number" name="phone" value="{{ old('phone') }}" placeholder="">
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
                                <label class="form-label" for="basic-default-fullname">address</label>
                                <input class="form-control @error('address') is-invalid @enderror" id=""
                                    type="text" name="address" value="{{ old('address') }}" placeholder="">
                                @error('address')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Order</label>
                                <input class="form-control @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order') }}">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Status</label>
                                <select class="form-select @error('status') is-invalid @enderror" id=""
                                    name="status">
                                    <option value="2">Current Board</option>
                                    <option value="1">Past Board</option>
                                    <option value="0">Current Members</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Blood Group</label>
                                <select class="form-select @error('bloodgroup') is-invalid @enderror" id=""
                                    name="bloodgroup">
                                    <option value="" disabled selected>Select Blood group</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
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
                                <label class="form-label" for="basic-default-fullname">Profession</label>
                                <select class="form-select @error('profession') is-invalid @enderror" id=""
                                    name="profession">
                                    <option value="" disabled selected>Select Profession</option>
                                    <option value="NGO / INGO / Social work">NGO / INGO / Social work</option>
                                    <option value="Software Development / IT / Telecommunication">Software Development
                                        /
                                        IT / Telecommunication</option>
                                    <option value="Student- Finance/Management/Account/IT">Student-
                                        Finance/Management/Account/IT</option>
                                    <option value="Student -Medical/Science">Student -Medical/Science</option>
                                    <option value="Student-Engineering (Civil/ Mechanical/ Computer/Communication)">
                                        Student-Engineering (Civil/ Mechanical/ Computer/Communication)</option>
                                    <option value="Student- Legal Service">Student- Legal Service</option>
                                    <option value="Teaching/ Education">Teaching/ Education</option>
                                    <option value="Banker/ Administration/ Account/ Management/Insurance/Financial">
                                        Banker/ Administration/ Account/ Management/Insurance/Financial</option>
                                    <option value="Business/ Entrepreneur/Human Resource Management">Business/
                                        Entrepreneur/Human Resource Management</option>
                                    <option value="Healthcare/ Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab">Healthcare/
                                        Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab</option>
                                    <option value="Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic">
                                        Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic</option>
                                    <option value="Engineer (Civil/ Mechanical/ Computer/Communication)">Engineer
                                        (Civil/ Mechanical/ Computer/Communication)</option>
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
                                    type="date" name="dob" value="{{ old('dob') }}" placeholder=""
                                    autocomplete="off">
                                @error('dob')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="basic-default-fullname">Joined Date</label>
                                <input class="form-control flatpicker @error('joindate') is-invalid @enderror"
                                    id="" type="date" name="joindate" value="{{ old('joindate') }}"
                                    placeholder="" autocomplete="off">
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
                                    type="text" name="oldyear" value="{{ old('oldyear') }}" placeholder="">
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
                            rows="8" placeholder="">{{ old('description') }}</textarea>
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
                        <img class="view-image mt-2" src="" height="100" alt="">
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
                                type="text" name="facebook_link" value="{{ old('facebook_link') }}" placeholder="">
                            @error('facebook_link')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="basic-default-fullname">Twitter link</label>
                            <input class="form-control @error('twitter_link') is-invalid @enderror" id=""
                                type="text" name="twitter_link" value="{{ old('twitter_link') }}" placeholder="">
                            @error('twitter_link')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="basic-default-fullname">Instagram link</label>
                            <input class="form-control @error('instagram_link') is-invalid @enderror" id=""
                                type="text" name="instagram_link" value="{{ old('instagram_link') }}"
                                placeholder="">
                            @error('instagram_link')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $(".image").change(function() {
                input = this;
                var nthis = $(this);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        nthis.siblings('.view-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        })
    </script>
@endsection
