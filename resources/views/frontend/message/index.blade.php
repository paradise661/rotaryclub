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
                    <h2>Messages</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>Messages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Services One Start -->
        <section class="services-one service-page1">
            <div class="container">
                <div class="row">
                    @foreach ($messages as $key => $msg)
                        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
                            <div class="services-one__single">
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="{{ $msg->image ? asset('/admin/images/message/' . $msg->image) : asset('frontend/assets/images/services/services-1-1.jpg') }}"
                                            alt="" height="350px">
                                    </div>
                                    <div class="services-one__content">
                                        <div class="services-one__content-inner">
                                            <h3 class="services-one__title"><a
                                                    href="{{ route('message.show', $msg->slug) }}">Message From
                                                    {{ $msg->name ?? '' }}</a></h3>
                                            <p class="services-one__text">{{ $msg->position ?? '' }}</p>
                                            <div class="services-one__arrow">
                                                <a href="{{ route('message.show', $msg->slug) }}"><span
                                                        class="icon-arrow-up"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Services One End -->
    </main>
@endsection
