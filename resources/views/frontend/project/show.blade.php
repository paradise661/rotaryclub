@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $project->seo_title ? $project->seo_title : $project->title ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $project->meta_keywords ?? 'Rotary' }}">
    <meta name="description" content="{{ $project->meta_description ?? 'Rotary' }}">
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
                    <h2>{{ $project->title ?? '' }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ $project->image ? asset('/admin/images/achievement/' . $project->image) : asset('frontend/assets/images/project/project-details-img-1.jpg') }}"
                            alt="{{ $project->title ?? '' }} " style="height: 500px;width:100%;">

                    </div>
                    <div class="col-md-6">
                        <img src="{{ $project->secondimage ? asset('/admin/images/achievement/' . $project->secondimage) : asset('frontend/assets/images/project/project-details-img-1.jpg') }}"
                            alt="{{ $project->title ?? '' }} " style="height: 500px;width:100%;">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xl-8 col-lg-7 mt-4">
                        <div class="project-details__info-box">
                            <div class="project-details__info-title-box">
                                <h3 class="project-details__info-title text-white">Project Details</h3>
                            </div>
                            <div class="project-details__info-and-social">
                                <div class="project-details__info">
                                    <ul class="project-details__info-list list-unstyled">
                                        <li>
                                            <p>Name:<span>{{ $project->title ?? '' }}</span></p>
                                        </li>
                                        <li>
                                            <p>Location:<span>{{ $project->slogan ?? '' }}</span></p>
                                        </li>
                                        <li>
                                            <p>Date:<span>{{ date('d M , Y', strtotime($project->date)) }}</span></p>
                                        </li>
                                        <li>
                                            <p>Project
                                                Coordinator:<span>{{ $project->coordinator ?? '' }}</span>
                                            </p>
                                        </li>
                                        {{-- <li>
                                            <p>Participant Members :<span>{{ $project->short_description ?? '' }}</span>
                                            </p>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="project-details__left">
                            <p class="project-details__text-1">{!! $project->description ?? '' !!}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 mt-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__all-category">
                                <h3 class="sidebar__title">Our Other Projects:</h3>
                                <ul class="sidebar__all-category-list list-unstyled">
                                    @foreach ($moreprojects as $key => $morep)
                                        <li class="row">
                                            <a href="{{ route('project.show', $morep->slug) }}">
                                                <div class="col-4">
                                                    <img src="{{ $morep->image ? asset('/admin/images/achievement/' . $morep->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                                        alt="" style="width:95%; height:70px;">
                                                </div>
                                                <div class="col-8">
                                                    <h5>
                                                        {{ $morep->title ?? '' }}
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
