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
                    <h2>FAqs</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>Frequently Asked Questions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--FAQ One Start -->
        <section class="faq-one mb-5 pt-4">
            <div class="container">
                <div class="faq-one__inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="faq-one__left">
                                <div class="section-title text-left sec-title-animation animation-style2"
                                    style="margin-bottom: 30px">
                                    <h2 class="section-title__title title-animation">Frequently Asked Questions.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="faq-one__right">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    @foreach ($faqs as $key => $faq)
                                        <div class="accrodion  {{ $key === 0 ? 'active' : '' }}">
                                            <div class="accrodion-title">
                                                <h4>{{ $faq->title ?? '' }}</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>{!! $faq->description ?? '' !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End -->
    </main>
@endsection
