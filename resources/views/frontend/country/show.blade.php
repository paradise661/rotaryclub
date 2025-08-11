a @extends('layouts.frontend.master')

@section('seo')
    <title>{{ $country->seo_title ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $country->meta_keywords ?? 'Rotary' }}">
    <meta name="description" content="{{ $country->meta_description ?? 'Rotary' }}">
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
                        <span class="eduhive-breadcrumb__icon"></span><a href="{{ route('countries') }}">Courses</a>
                    </li>
                    <li><span>{{ $country->name ?? '' }}</span></li>
                </ul>
                <h2 class="page-header__title">{{ $country->name ?? '' }}</h2>
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
                            <img src="{{ $country->image ? asset('admin/images/country/' . $country->image) : asset('frontend/assets/images/courses/course-d-1-2.jpg') }}"
                                alt="{{ $country->name ?? '' }}">
                        </div>
                        <h3 class="course-details__title">{{ $country->name ?? '' }}</h3>
                        <div class="course-details__main-tab-box tabs-box">
                            <div class="tabs-content">
                                <div class="tab active-tab fadeInUp animated" id="overview" data-wow-delay="200ms"
                                    style="display: block;">
                                    <div class="course-details__description wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="course-details__description__inner">
                                            <p class="course-details__description__text">{!! $country->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="course-details__info">
                        <h3 class="course-details__info__title">Other Countries</h3>
                        <ul class="sidebar__posts list-unstyled">
                            @foreach ($morecountries as $x)
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <a href="{{ route('country.show', $x->slug) }}">
                                            <img src="{{ $x->image ? asset('admin/images/country/' . $x->image) : asset('frontend/assets/images/blog/blog-lp-1-1.jpg') }}"
                                                alt="{{ $x->title ?? '' }}">
                                        </a>
                                    </div>
                                    <div class="sidebar__posts__content">
                                        <h4 class="sidebar__posts__title"><a
                                                href="{{ route('country.show', $x->slug) }}">{{ $x->name ?? '' }}</a>
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
