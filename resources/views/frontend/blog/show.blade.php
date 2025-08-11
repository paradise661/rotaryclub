@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $blog->seo_title ? $blog->seo_title : $blog->title ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $blog->meta_keywords ?? 'Rotary' }}">
    <meta name="description" content="{{ $blog->meta_description ?? 'Rotary' }}">



    <meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $title ?? '' }}" />
@if ($blog)
    <meta property="og:description" content="{{ $blog->description ?? '' }}" />
@endif
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:site_name" content="{{ $blog->title ?? '' }}" />
<meta property="article:publisher" content="" />
<meta property="article:modified_time" content="{{ $blog->updated_at }}" />

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
                    <h2>{{ $blog->title }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="blog-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="blog-details__img">
                                <img src="{{ $blog->image ? asset('/admin/images/blog/' . $blog->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                    alt="{{ $blog->title }}" style="height: 500px;object-fit:fill;">
                                {{-- <div class="blog-details__date">
                                    <div class="blog-details__date-shape-1">
                                        <img src="{{ asset('frontend/assets/images/shapes/blog-details-date-shape-1.png') }}"
                                            alt="">
                                    </div>
                                    <span>{{ date('d M Y', strtotime($blog->date)) }}</span>
                                </div> --}}
                            </div>
                            <div class="blog-details__content-left">
                                <div class="d-flex align-items-center gap-2 mt-4">
                                    <i class="fa-solid fa-calendar-days" style="color: #f9136b;"></i>
                                    <h5>{{ date('d M Y', strtotime($blog->date)) }}</h5>

                                </div>
                                <h3 class="my-3">{{ $blog->title }}</h3>
                                <p class="blog-details__text-1">{!! $blog->description ?? '' !!}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="sidebar">
                                <div class="sidebar__single sidebar__all-category">
                                    <h3 class="sidebar__title">More Blogs :</h3>
                                    <ul class="sidebar__all-category-list list-unstyled">
                                        @foreach ($moreblogs as $key => $moreb)
                                            <li class="row">
                                                <a href="{{ route('blog.show', $moreb->slug) }}">
                                                    <div class="col-4">
                                                        <img src="{{ $moreb->image ? asset('/admin/images/blog/' . $moreb->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                                            alt="" style="width:95%; height:70px;">
                                                    </div>
                                                    <div class="col-8">
                                                        <h5>
                                                            {{ $moreb->title ?? '' }}
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
