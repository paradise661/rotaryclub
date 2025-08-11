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
                    <h2>What we Do</h2>
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

        <!--Services Two Start -->
        <section class="services-two" style="background: white">
            {{-- <div class="services-two__shape-1 float-bob-x">
                <img src="{{ asset('frontend/assets/images/shapes/services-two-shape-1.png') }}" alt="">
            </div> --}}
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-2"></div>
                        <span class="section-title__tagline">What we Do</span>
                    </div>
                    <h2 class="section-title__title title-animation">Transforming Lives Through .</h2>
                </div>

                <div class="row">
                    @foreach ($whatwedo as $key => $wedo)
                        <div class="col-md-4 col-sm-12">
                            <!--Services Two Single Start-->
                            <div class="item">
                                <div class="services-two__single">
                                    <div class="services-two__icon">
                                        <img src="{{ $wedo->image ? asset('/admin/images/whychooseus/' . $wedo->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                            alt="" style="width:100%; height: 220px;">
                                        {{-- <span class="icon-clean-water"></span> --}}
                                    </div>
                                    <h3 class="services-two__title"><a
                                            href="{{ route('whychooseus.show', $wedo->slug) }}">{{ $wedo->title ?? '' }}</a>
                                    </h3>
                                    <p class="services-two__text">{{ $wedo->short_description ?? '' }}
                                    </p>
                                    <div class="services-two__read-more">
                                        <div class="services-two__read-more-shape"></div>
                                        <a href="{{ route('whychooseus.show', $wedo->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!--Services Two End -->
    </main>
@endsection
