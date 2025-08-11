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
                    <h2>Galleries</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>Galleries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery mt-4">
            <div class="container">
                <div class="single-gallery mt-48">
                    @if ($galleries->isNotEmpty())
                        <div class="row">
                            @foreach ($galleries as $key => $photo)
                                <div class="col-md-3 col-12 mb-4">
                                    <a data-fancybox="gallery"
                                        data-src="{{ asset('admin/images/gallery/' . $photo->image) }}" data-caption="">
                                        <img src="{{ asset('admin/images/gallery/' . $photo->image) }}" alt=""
                                            style="width: 100%; height:220px;" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <!--gallery end-->
    </main>
@endsection
