  @extends('layouts.frontend.master')

  @section('seo')
      <title>{{ $settings['contact_seo_title'] ?? 'Rotary' }}</title>
      <meta name="keywords" content="{{ $settings['contact_seo_keywords'] ?? 'Rotary' }}">
      <meta name="description" content="{{ $settings['contact_seo_description'] ?? 'Rotary' }}">
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
                      <li><span>Courses</span></li>
                  </ul>
                  <h2 class="page-header__title">Courses</h2>
              </div>
          </div>
          <img class="page-header__shape-one" src="{{ asset('frontend/assets/images/shapes/page-header-shape-1.png') }}"
              alt="shape" />
          <img class="page-header__shape-two" src="{{ asset('frontend/assets/images/shapes/page-header-shape-2.png') }}"
              alt="shape" />
          <div class="page-header__shape-three"></div>
          <div class="page-header__shape-four"></div>
      </section>

      <section class="courses-page courses-page--two section-space">
          <div class="container">
              <div class="row gutter-y-30">
                  @foreach ($courses as $key => $course)
                      <div class="col-lg-6">
                          <div class="course-card course-card--two wow fadeInUp" data-wow-duration='1500ms'
                              data-wow-delay='00ms'>
                              <div class="row">
                                  <div class="col-5">
                                      <div class="course-card__image2">
                                          <img src="{{ $course->image ? asset('admin/images/course/' . $course->image) : asset('frontend/assets/images/courses/course-2-1.jpg') }}"
                                              alt="{{ $course->name ?? '' }}">
                                      </div>
                                  </div>
                                  <div class="col-7">
                                      <div class="course-card__content">
                                          <h3 class="course-card__title"><a
                                                  href="{{ route('course.show', $course->slug) }}">{{ $course->name ?? '' }}</a>
                                          </h3>

                                          <p class="course-card__text px-2">{{ $course->short_description ?? '' }}</p>

                                          <a class="course-card__btn eduhive-btn eduhive-btn--border"
                                              href="{{ route('course.show', $course->slug) }}">
                                              <span>Read more</span>
                                              <span class="eduhive-btn__icon">
                                                  <span class="eduhive-btn__icon__inner"><i
                                                          class="icon-right-arrow"></i></span>
                                              </span>
                                          </a>
                                      </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </section>
  @endsection
