  @extends('layouts.frontend.master2')

  @section('seo')
      <title>{{ $settings['homepage_seo_title'] ?? 'Rotary' }}</title>
      <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Rotary' }}">
      <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Rotary' }}">
  @endsection

  @section('content')
      <!--Page Header Start-->
      <section class="page-header">
          <div class="page-header__bg-shape"
              style="background-image: url({{ asset('frontend/assets/images/shapes/page-header-bg-shape.png') }});">
          </div>
          <div class="container">
              <div class="page-header__inner">
                  <div class="page-header__shape-1">
                      <img src="{{ asset('frontend/assets/images/shapes/page-header-shape-1.png') }}" alt="">
                  </div>
                  <h2>{{ $pageTitle ?? '' }}</h2>
                  <div class="thm-breadcrumb__box">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><a href="{{ route('home') }}">Home</a></li>
                          <li><span>-</span></li>
                          <li>Teams</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--Page Header End-->

      <!--Team Two Start -->
      <section class="team-two team-page">
          <div class="container">
              <div class="row">
                  @foreach ($teamMembers as $member)
                      <!--Team Two Single Start-->
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                          <div class="team-two__single">
                              <div class="team-two__img-box">
                                  <div class="team-two__img">
                                      <img src="{{ $member->image ? asset('/admin/images/team/' . $member->image) : asset('frontend/assets/images/team/team-2-1.jpg') }}"
                                          alt="">
                                  </div>
                                  <div class="team-two__social-list">
                                      <div class="team-two__social-plus-minus">
                                          <p>
                                              <span class="icon-plus team-two__plus"></span>
                                              <span class="icon-minus team-two__minus"></span>
                                          </p>
                                      </div>
                                      <div class="team-two__social">
                                          <a href="mailto:{{ $member->email ?? '' }}"><span class="icon-mail"></span></a>
                                          <a href="{{ $member->facebook_link ?? '' }}"><span
                                                  class="icon-facebook"></span></a>
                                          <a href="{{ $member->twitter_link ?? '' }}"><span
                                                  class="icon-twitter"></span></a>
                                          <a href="{{ $member->instagram_link ?? '' }}"><span
                                                  class="icon-instagram"></span></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-two__content">
                                  <h3 class="team-two__title">{{ $member->name ?? '' }}</h3>
                                  <div class="d-flex">
                                      <span>Designation : </span>
                                      <p class="team-two__text">{{ $member->position ?? '' }}</p>
                                  </div>
                                  <div class="d-flex">
                                      <span>Rota Year: </span>
                                      <p class="team-two__text">{{ $member->oldyear ?? '' }}</p>
                                  </div>
                                  <div class="d-flex">
                                      <span>Blood Group : </span>
                                      <p class="team-two__text"> {{ $member->bloodgroup ?? '' }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </section>
  @endsection
