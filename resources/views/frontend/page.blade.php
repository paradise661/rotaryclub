  @extends('layouts.frontend.master')

  @section('seo')
      <title>{{ $page->seo_title ?? 'Rotary' }}</title>
      <meta name="keywords" content="{{ $page->meta_keywords ?? 'Rotary' }}">
      <meta name="description" content="{{ $page->meta_keywords ?? 'Rotary' }}">
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
                      <li><span>{{ $page->title ?? '' }}</span></li>
                  </ul>
                  <h2 class="page-header__title">{{ $page->title ?? '' }}</h2>
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
                  <div class="col-xl-12 col-lg-12">
                      <div class="course-details__inner">
                          {{-- <h3 class="course-details__title">{{ $page->title ?? '' }}</h3> --}}
                          <div class="course-details__image">
                              <img src="{{ $page->image ? asset('admin/images/page/' . $page->image) : asset('frontend/assets/images/courses/course-d-1-2.jpg') }}"
                                  alt="{{ $page->title ?? '' }}">
                          </div>
                          <div class="course-details__main-tab-box tabs-box">
                              <div class="tabs-content">
                                  <div class="tab active-tab fadeInUp animated" id="overview" data-wow-delay="200ms"
                                      style="display: block;">
                                      <div class="course-details__description wow fadeInUp" data-wow-duration="1500ms">
                                          <div class="course-details__description__inner">
                                              <p class="course-details__description__text">{!! $page->description !!}</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection
