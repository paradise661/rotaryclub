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
                      <li><span>Countries</span></li>
                  </ul>
                  <h2 class="page-header__title">Countries</h2>
              </div>
          </div>
          <img class="page-header__shape-one" src="{{ asset('frontend/assets/images/shapes/page-header-shape-1.png') }}"
              alt="shape" />
          <img class="page-header__shape-two" src="{{ asset('frontend/assets/images/shapes/page-header-shape-2.png') }}"
              alt="shape" />
          <div class="page-header__shape-three"></div>
          <div class="page-header__shape-four"></div>
      </section>

      <section class="country-one section-space-top2" id="courses">
          <div class="container">
              <div class="row">
                  @foreach ($countries as $key => $country)
                      <div class="col-md-4 col-sm-12">
                          <div class="item mb-5">
                              <div class="course-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                  <div class="course-card__image">
                                      <img src="{{ $country->image ? asset('admin/images/country/' . $country->image) : asset('frontend/assets/images/courses/course-1-1.jpg') }}"
                                          alt="{{ $country->name ?? '' }}">
                                  </div>
                                  <div class="country-card__hover"
                                      style="background-image: url({{ asset('frontend/assets/images/shapes/course-card-bg-1-1.png') }});">
                                      <div class="course-card__hover__content">
                                          <h3 class="course-card__title course-card__title--hover"><a
                                                  href="{{ route('country.show', $country->slug) }}">{{ $country->name ?? '' }}</a>
                                          </h3>
                                          <p class="country-card__text">{{ $country->short_description ?? '' }}</p>
                                          <a class="course-card__btn eduhive-btn eduhive-btn--border"
                                              href="{{ route('country.show', $country->slug) }}">
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
          <img class="courses-one__shape" src="{{ asset('frontend/assets/images/shapes/courses-shape-1-1.png') }}"
              alt="shape">
      </section>
  @endsection
