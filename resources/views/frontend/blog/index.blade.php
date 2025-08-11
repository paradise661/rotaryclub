@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $settings['blogs_seo_title'] ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $settings['blogs_seo_keywords'] ?? 'Rotary' }}">
    <meta name="description" content="{{ $settings['blogs_seo_description'] ?? 'Rotary' }}">
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
                    <h2>Blogs</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-two p-0 mt-5">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $key => $blog)
                        <div class="col-md-4 col-sm-12 mb-5">
                            <div class="item ">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                        <div class="blog-two__img">
                                            <img src="{{ $blog->image ? asset('/admin/images/blog/' . $blog->image) : asset('frontend/assets/images/blog/blog-2-1.jpg') }}"
                                                alt="{{ $blog->title ?? '' }}" style="height: 325px;">
                                        </div>
                                        {{-- <div class="blog-two__date">
                                            <div class="blog-two__date-shape-1">
                                                <img src="{{ asset('frontend/assets/images/shapes/blog-two-date-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="blog-two__date-shape-2">
                                                <img src="{{ asset('frontend/assets/images/shapes/blog-two-date-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="blog-two__content">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <i class="fa-solid fa-calendar-days" style="color: #f9136b;"></i>
                                            <h5>{{ date('d M Y', strtotime($blog->date)) }}</h5>

                                        </div>
                                        <h3 class="blog-two__title"><a
                                                href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title ?? '' }}</a>
                                        </h3>
                                        <p class="blog-desc"> {{ $blog->short_description ?? '' }}</p>
                                        <div class="blog-two__comment-and-arrow mt-3">
                                            <div class="blog-two__comment">
                                                <a href="{{ route('blog.show', $blog->slug) }}">Read more</a>
                                            </div>
                                            <div class="blog-two__arrow">
                                                <a href="{{ route('blog.show', $blog->slug) }}"><span
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
    </main>
@endsection
