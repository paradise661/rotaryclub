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
                  <h2>Awards</h2>
                  <div class="thm-breadcrumb__box">
                      <ul class="thm-breadcrumb list-unstyled">
                          <li><a href="{{ route('home') }}">Home</a></li>
                          <li><span>-</span></li>
                          <li>Awards</li>
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
                  @foreach ($awards as $award)
                      <!--Team Two Single Start-->
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                          <div class="team-two__single">
                              <div class="team-two__img-box">
                                  <div class="team-two__img">
                                      <img src="{{ $award->image ? asset('/admin/images/award/' . $award->image) : asset('frontend/assets/images/team/team-2-1.jpg') }}"
                                          alt="">
                                  </div>
                              </div>
                              <div class="team-two__content">
                                  <h3 class="team-two__title text-center">{{ $award->name ?? '' }}</h3>
                                  <p class="text-center">{{ $award->awardname ?? '' }}</p>
                                  <p class="text-center">{{ $award->year ?? '' }}</p>
                              </div>
                          </div>
                      </div>
                      <!--Team Two Single End-->
                  @endforeach
              </div>
          </div>
      </section>
      <!--Team Two End -->
  @endsection
