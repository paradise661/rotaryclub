@extends('layouts.admin.master')
@section('title', 'Dashboard')
@section('content')
    <style>
        .icon-style {
            font-size: 40px;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Hello Admin!</h5>
                            <p class="mb-4">
                                Welcome to <span class="fw-bold">Rotary</span> Admin panel.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">

                                    <span> <i class="menu-icon tf-icons bx bxl-product-hunt icon-style"></i></span>

                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Projects</span>

                            <h3 class="card-title mb-2">{{ $projects ?? 0 }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class="menu-icon tf-icons bx bx-user-plus icon-style"></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Teams</span>
                            <h3 class="card-title mb-2">{{ $teams ?? 0 }}</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class="menu-icon tf-icons bx bx-support icon-style"></i>

                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Testimonials</span>
                            <h3 class="card-title mb-2">{{ $testimonials ?? 0 }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class="menu-icon tf-icons bx bx-cube-alt icon-style"></i>

                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Blogs</span>
                            <h3 class="card-title mb-2">{{ $blogs ?? 0 }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
