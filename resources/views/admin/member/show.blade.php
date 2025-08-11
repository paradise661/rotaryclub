@extends('layouts.admin.master')
@section('title', 'Studentregister')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Member Details</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.members.index') }}"><i class="fa-solid fa-arrow-left"></i>
                    Back</a>
            </small>
        </div>
        <div class="container">
            <div class="table-responsive " style="overflow:hidden;">
                <div class="row">
                    <div class="col-4">
                        <h5><span class="fw-bolder">Image</span>: <img class="mt-2"
                                src="{{ asset('admin/images/member/') }}/{{ $member->image ?: 'avatar.png' }}"
                                alt="" style="height: 320px; width:100%;">
                        </h5>
                    </div>
                    <div class="col-8">
                        <div class="row mt-3">
                            <div class="col-6">
                                <h5><span class="fw-bolder">Full Name</span>: {{ $member->name ?? '' }}</h5>
                            </div>
                            <div class="col-6">
                                <h5><span class="fw-bolder">Email</span>: {{ $member->email ?? '' }}</h5>
                            </div>
                            <div class="col-6">
                                <h5><span class="fw-bolder">Current Address</span>: {{ $member->current_address ?? '' }}
                                </h5>
                            </div>
                            <div class="col-6">
                                <h5><span class="fw-bolder">Permanent Address</span>: {{ $member->permanent_address ?? '' }}
                                </h5>
                            </div>
                            <div class="col-6">
                                <h5><span class="fw-bolder">Date of Birth (A.D.)</span>: {{ $member->dobad ?? '' }}</h5>
                            </div>
                            <div class="col-6">
                                <h5><span class="fw-bolder">Date of Birth (B.S.)</span>: {{ $member->dobbs ?? '' }}</h5>
                            </div>
                            <div class="col-6">
                                <h5><span class="fw-bolder">Gender</span>: {{ $member->gender ?? '' }}</h5>
                            </div>
                            <div class="col-3">
                                <h5><span class="fw-bolder">Blood Group</span>: {{ $member->blood ?? '' }}</h5>
                            </div>
                            <div class="col-12">
                                <h5><span class="fw-bolder">Profession</span>: {{ $member->profession ?? '' }}</h5>
                            </div>
                            <div class="col-12">
                                <h5><span class="fw-bolder">How did you know about Rotary?</span>:
                                    {{ $member->known ?? '' }}
                                </h5>
                            </div>
                            <div class="col-3">
                                <h5><span class="fw-bolder">Message</span>: {{ $member->comments ?? '' }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
