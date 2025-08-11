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
                    <h2>{{ $message->name ?? '' }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li><a href="{{ route('messages') }}">Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="volunteer-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="volunteer-details__left">
                            <div class="volunteer-details__img">
                                <img src="{{ $message->image ? asset('/admin/images/message/' . $message->image) : asset('frontend/assets/images/team/team-details-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="volunteer-details__right">
                            <h2 class="mb-3">{{ $message->name ?? '' }}</h2>
                            <p class="volunteer-details__text">{!! $message->description ?? '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
