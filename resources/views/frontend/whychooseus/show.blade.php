@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Rotary' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Rotary' }}">
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
                    <h2>{{ $whatwedo->title ?? '' }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>our services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="blog-details__img">
                    <img src="{{ $whatwedo->image ? asset('/admin/images/whychooseus/' . $whatwedo->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                        alt="{{ $whatwedo->title }}" style="height: 490px">

                </div>
                <div class="blog-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="blog-details__content-left">
                                <h3 class="mb-3">{{ $whatwedo->title }}</h3>
                                <p class="blog-details__text-1">{!! $whatwedo->description ?? '' !!}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="sidebar">
                                <div class="sidebar__single sidebar__all-category">
                                    <h3 class="sidebar__title">Our Other Services</h3>
                                    <ul class="sidebar__all-category-list list-unstyled">
                                        @foreach ($whatwedomore as $key => $more)
                                            <li class="row">
                                                <a href="{{ route('whychooseus.show', $more->slug) }}">
                                                    <div class="col-4">
                                                        <img src="{{ $more->image ? asset('/admin/images/whychooseus/' . $more->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                                            alt="" style="width:95%; height:70px;">
                                                    </div>
                                                    <div class="col-8">
                                                        <h5>
                                                            {{ $more->title ?? '' }}
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
            </div>
        </section>
        <!--Blog Details End-->

    </main>
@endsection
