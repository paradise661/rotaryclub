@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $settings['projects_seo_title'] ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $settings['projects_seo_keywords'] ?? 'Rotary' }}">
    <meta name="description" content="{{ $settings['projects_seo_description'] ?? 'Rotary' }}">
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
                    <h2>Our Projects</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>previous projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="courses-two p-0 mt-5">
            <div class="container">
                <div class="row">
                    @foreach ($projects as $key => $project)
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="courses-two__single">
                                <div class="courses-two__img-box">
                                    <div class="courses-two__img">
                                        <img src="{{ $project->image ? asset('/admin/images/achievement/' . $project->image) : asset('frontend/assets/images/courses/courses-2-1.jpg') }}"
                                            alt="{{ $project->title ?? '' }}" style="height: 255px">
                                        <div class="courses-two__tag">
                                            <div class="courses-two__tag-shape-1">
                                                <img src="{{ asset('frontend/assets/images/shapes/courses-two-tag-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="courses-two__tag-shape-2">
                                                <img src="{{ asset('frontend/assets/images/shapes/courses-two-tag-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <span>{{ $project->date ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-two__content">
                                    <h3 class="courses-two__title"><a
                                            href="{{ route('project.show', $project->slug) }}">{{ $project->title ?? '' }}</a>
                                    </h3>
                                    <p class="courses-two__text"><span style="color: #f9136b;font-weight:600;">Location:
                                        </span>{{ $project->slogan ?? '' }}</p>
                                    <div class="courses-two__btn-box">
                                        <a class="courses-two__btn thm-btn"
                                            href="{{ route('project.show', $project->slug) }}"><span>View
                                                more</span><i class="icon-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
