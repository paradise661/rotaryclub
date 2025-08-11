@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $event->seo_title ? $event->seo_title : $event->title ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $event->meta_keywords ?? 'Rotary' }}">
    <meta name="description" content="{{ $event->meta_description ?? 'Rotary' }}">
@endsection

@section('content')
    <main>
        <section class="page-header">
            <div class="page-header__bg-shape"
                style="background-image: url({{ asset('frontend/assets/images/shapes/page-header-bg-shape.png') }});">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__shape-1">
                        <img src="{{ asset('frontend/assets/images/shapes/page-header-shape-1.png') }}" alt="">
                    </div>
                    <h2>{{ $event->name ?? '' }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li><a href="{{ route('events') }}">Events</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-8 col-lg-7 mt-4">
                        <div class="project-details__info-box">
                            <div class="project-details__info-title-box">
                                <h3 class="project-details__info-title text-white">Event Details</h3>
                            </div>
                            <div class="project-details__info-and-social">
                                <div class="project-details__info">
                                    <ul class="project-details__info-list list-unstyled">
                                        <li>
                                            <p>Name:<span>{{ $event->name ?? '' }}</span></p>
                                        </li>
                                        <li>
                                            <p>Location:<span>{{ $event->location ?? '' }}</span></p>
                                        </li>
                                        <li>
                                            <p>Date:<span>{{ date('d M , Y', strtotime($event->date)) }}</span></p>
                                        </li>
                                        <li>
                                            <p>Time:<span>{{ date('g:i A', strtotime($event->time)) ?? 'N/A' }} -
                                                    {{ date('g:i A', strtotime($event->time_to)) ?? 'N/A' }}</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="project-details__left">
                            <p class="project-details__text-1 ">{!! $event->description ?? '' !!}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 mt-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__all-category">
                                <h3 class="sidebar__title"> Other Upcoming Events:</h3>
                                <ul class="sidebar__all-category-list list-unstyled">
                                    @foreach ($moreevents as $key => $moree)
                                        <li class="row">
                                            <a href="{{ route('event.show', $moree->slug) }}">
                                                <div class="col-4">
                                                    {{-- <img src="{{ $moree->image ? asset('/admin/images/event/' . $moree->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                                        alt="{{ $moree->name ?? '' }}" style="width:95%; height:70px;"> --}}
                                                    <img src="{{ asset('admin/images/event.png') }}"
                                                        style="width:95%; height:70px;" alt="">
                                                </div>
                                                <div class="col-8">
                                                    <h5>
                                                        {{ $moree->name ?? '' }}
                                                    </h5>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Project Details End-->

    </main>
@endsection
