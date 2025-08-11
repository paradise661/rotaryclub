@extends('layouts.frontend.master')

@section('seo')
    <title>{{ $course->seo_title ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $course->meta_keywords ?? 'Rotary' }}">
    <meta name="description" content="{{ $course->meta_description ?? 'Rotary' }}">
@endsection

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header__content">
                <ul class="eduhive-breadcrumb list-unstyled">
                    <li>
                        <span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span class="eduhive-breadcrumb__icon"></span><a href="{{ route('courses') }}">Courses</a>
                    </li>
                    <li><span>{{ $course->name ?? '' }}</span></li>
                </ul>
                <h2 class="page-header__title">{{ $course->name ?? '' }}</h2>
            </div>
        </div>
        <img class="page-header__shape-one" src="{{ asset('frontend/assets/images/shapes/page-header-shape-1.png') }}"
            alt="shape" />
        <img class="page-header__shape-two" src="{{ asset('frontend/assets/images/shapes/page-header-shape-2.png') }}"
            alt="shape" />
        <div class="page-header__shape-three"></div>
        <div class="page-header__shape-four"></div>
    </section>

    <section class="course-details section-space">
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-xl-8 col-lg-7">
                    <div class="course-details__inner">
                        <div class="course-details__image">
                            <img src="{{ $course->image ? asset('admin/images/course/' . $course->image) : asset('frontend/assets/images/courses/course-d-1-2.jpg') }}"
                                alt="{{ $course->name ?? '' }}">
                        </div>
                        <h3 class="course-details__title">{{ $course->name ?? '' }}</h3>
                        <div class="course-details__main-tab-box tabs-box">
                            <div class="tabs-content">
                                <div class="tab active-tab fadeInUp animated" id="overview" data-wow-delay="200ms"
                                    style="display: block;">
                                    <div class="course-details__description wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="course-details__description__inner">
                                            <p class="course-details__description__text">{!! $course->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="course-details__info">
                        <h3 class="course-details__info__title">Other courses</h3>
                        <ul class="sidebar__posts list-unstyled">
                            @foreach ($morecourses as $x)
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <a href="{{ route('course.show', $x->slug) }}">
                                            <img src="{{ $x->image ? asset('admin/images/course/' . $x->image) : asset('frontend/assets/images/blog/blog-lp-1-1.jpg') }}"
                                                alt="{{ $x->title ?? '' }}">
                                        </a>
                                    </div>
                                    <div class="sidebar__posts__content">
                                        <h4 class="sidebar__posts__title"><a
                                                href="{{ route('course.show', $x->slug) }}">{{ $x->name ?? '' }}</a>
                                        </h4>
                                        <p class="moretext">{{ $x->short_description ?? '' }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
