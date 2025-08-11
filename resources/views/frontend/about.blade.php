  @extends('layouts.frontend.master2')

  @section('seo')
      <title>{{ $settings['homepage_seo_title'] ?? 'Irish Travels' }}</title>
      <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Irish Travels' }}">
      <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Irish Travels' }}">
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
                      <h2>About us</h2>
                      <div class="thm-breadcrumb__box">
                          <ul class="thm-breadcrumb list-unstyled">
                              <li><a href="{{ route('home') }}">Home</a></li>
                              <li><span>-</span></li>
                              <li>About us</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </section>

          {{-- <section class="about-header my-4">
              <div class="container">
                  <img src="{{ $settings['about_mission_image'] ? asset('/admin/images/setting/' . $settings['about_mission_image']) : asset('frontend/assets/images/resources/aboutone-img-1.jpg') }}"
                      alt="" width="100%">
              </div>
          </section> --}}

          <section class="about-one">
              <div class="about-one__shape-1 float-bob">
                  <img src="{{ asset('frontend/assets/images/shapes/about-one-shape-1.png') }}" alt="">
              </div>
              <div class="container">
                  <div class="section-title text-left sec-title-animation animation-style2">
                      <h2 class="section-title__title title-animation">{{ $settings['about_section_title'] ?? '' }}
                      </h2>
                  </div>
                  <div class="row">
                      <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                          <div class="about-one__left">
                              {!! $settings['about_section_description'] ?? '' !!}
                          </div>

                      </div>
                      <div class="col-xl-6">
                          <div class="about-one__right">
                              <div class="about-one__img-box mt-0">

                                  <div class="about-one__img">
                                      <img src="{{ $settings['about_section_image2'] ? asset('/admin/images/setting/' . $settings['about_section_image2']) : asset('frontend/assets/images/resources/aboutone-img-1.jpg') }}"
                                          alt="">
                                  </div>
                                  <div class="about-one__round-text-box">
                                      <div class="about-one__round-text-box-inner  rotate-me">
                                          <div class="about-one__curved-circle">
                                              - years of experience - years of experience
                                          </div>
                                      </div>
                                      <div class="about-one__count count-box">
                                          <h3 class="count-text" data-stop="{{ $settings['experience_count'] ?? '' }}"
                                              data-speed="1500">00</h3>
                                          <span>+</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--About One End -->
          @php
              $adIndex = 0;
          @endphp
          <!--Counter One Start -->
          <section class="counter-one">
              <div class="container">
                  <div class="row">
                      <!--Counter One Single Start-->
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                          <div class="counter-one__single">
                              <div class="counter-one__shape-1">
                                  <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-2.png') }}"
                                      alt="">
                              </div>
                              <div class="counter-one__count count-box">
                                  <h3 class="count-text" data-stop="{{ $settings['countries_count'] ?? '' }}"
                                      data-speed="1500">00</h3>
                                  <span class="counter-one__count-plus">+</span>
                              </div>
                              <p class="counter-one__count-text">Country Impacted</p>
                          </div>
                      </div>
                      <!--Counter One Single End-->
                      <!--Counter One Single Start-->
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                          <div class="counter-one__single">
                              <div class="counter-one__shape-1">
                                  <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-3.png') }}"
                                      alt="">
                              </div>
                              <div class="counter-one__count count-box">
                                  <h3 class="count-text" data-stop="{{ $settings['students_count'] ?? '' }}"
                                      data-speed="1500">00</h3>
                                  {{-- <span>K</span> --}}
                                  <span class="counter-one__count-plus">+</span>
                              </div>
                              <p class="counter-one__count-text">Volunteer</p>
                          </div>
                      </div>
                      <!--Counter One Single End-->
                      <!--Counter One Single Start-->
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                          <div class="counter-one__single">
                              <div class="counter-one__shape-1">
                                  <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-4.png') }}"
                                      alt="">
                              </div>
                              <div class="counter-one__count count-box">
                                  <h3 class="count-text" data-stop="{{ $settings['experts_count'] ?? '' }}"
                                      data-speed="1500">00</h3>
                                  <span class="counter-one__count-plus">+</span>
                              </div>
                              <p class="counter-one__count-text">Successful Project</p>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                          @if (isset($adds[$adIndex]))
                              <img src="{{ $adds[$adIndex]->side_image ? asset('/admin/images/adds/' . $adds[$adIndex]->side_image) : asset('frontend/assets/images/courses/courses-2-1.jpg') }}"
                                  alt="" width="100%" height="250px">
                              @php $adIndex++; @endphp
                          @endif
                      </div>
                      <!--Counter One Single End-->
                  </div>
              </div>
          </section>
          <!--Counter One End -->

          <section class="about-one">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-6">
                          <div class="about-one__right">
                              <div class="about-one__img-box mt-0">
                                  <div class="about-one__img">
                                      <img src="{{ $settings['about_mission_image'] ? asset('/admin/images/setting/' . $settings['about_mission_image']) : asset('frontend/assets/images/resources/aboutone-img-1.jpg') }}"
                                          alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                          <div class="section-title text-left sec-title-animation animation-style2">
                              <h2 class="section-title__title title-animation">Our Missions
                              </h2>
                          </div>
                          <div class="about-one__left">
                              {!! $settings['mission_section_description'] ?? '' !!}
                          </div>

                      </div>
                  </div>
              </div>
          </section>
          <section class="about-one">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                          <div class="section-title text-left sec-title-animation animation-style2">
                              <h2 class="section-title__title title-animation">Our Goals
                              </h2>
                          </div>
                          <div class="about-one__left">
                              {!! $settings['vision_section_description'] ?? '' !!}
                          </div>
                      </div>
                      <div class="col-xl-6">
                          <div class="about-one__right">
                              <div class="about-one__img-box mt-0">
                                  <div class="about-one__img">
                                      <img src="{{ $settings['about_vision_image'] ? asset('/admin/images/setting/' . $settings['about_vision_image']) : asset('frontend/assets/images/resources/aboutone-img-1.jpg') }}"
                                          alt=""style="height:600px;object-fit:cover;">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          {{-- <!--Team One Start -->
          <section class="team-one">
              <div class="team-one__shape-1 float-bob">
                  <img src="{{ asset('frontend/assets/images/shapes/team-one-shape-1.png') }}" alt="">
              </div>
              <div class="container">
                  <div class="section-title text-center sec-title-animation animation-style1">
                      <div class="section-title__tagline-box">
                          <div class="section-title__tagline-shape"></div>
                          <span class="section-title__tagline">{{ $settings['team_section_title'] ?? '' }}</span>
                      </div>
                      <h2 class="section-title__title title-animation">{{ $settings['team_section_slogan'] ?? '' }}
                      </h2>
                  </div>
                  <div class="row">
                      @foreach ($teams as $key => $team)
                          <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                              <div class="team-one__single">
                                  <div class="team-one__img-box">
                                      <div class="team-one__img">
                                          <img src="{{ $team->image ? asset('/admin/images/team/' . $team->image) : asset('frontend/assets/images/team/team-1-1.jpg') }}"
                                              alt="">
                                      </div>
                                  </div>
                                  <div class="team-one__content">
                                      <div class="team-one__social-list">
                                          <div class="team-one__social-plus-minus">
                                              <p>
                                                  <span class="icon-plus team-one__plus"></span>
                                                  <span class="icon-minus team-one__minus"></span>
                                              </p>
                                          </div>
                                          <div class="team-one__social">
                                              <a href="{{ $member->facebook_link ?? '' }}"><span
                                                      class="icon-facebook"></span></a>
                                              <a href="{{ $member->twitter_link ?? '' }}"><span
                                                      class="icon-twitter"></span></a>
                                              <a href="{{ $member->instagram_link ?? '' }}"><span
                                                      class="icon-instagram"></span></a>
                                          </div>
                                      </div>
                                      <div class="team-one__title-box">
                                          <h3>{{ $team->name ?? '' }}</h3>
                                          <p>{{ $team->position ?? '' }}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
                  <div class="team-one__btn-box">
                      <a class="team-one__btn thm-btn" href="/team/current-members"><span>See All</span><i
                              class="icon-arrow-up"></i></a>
                  </div>
              </div>
          </section>
          <!--Team One End --> --}}

          <!-- Testimonial Two Start -->
          {{-- <section class="testimonial-two p-0">
              <div class="container">
                  <div class="section-title text-center sec-title-animation animation-style2">
                      <div class="section-title__tagline-box">
                          <div class="section-title__tagline-shape-2"></div>
                          <span class="section-title__tagline">{{ $settings['testimonial_section_title'] ?? '' }}</span>
                      </div>
                      <h2 class="section-title__title title-animation">{{ $settings['testimonial_section_slogan'] ?? '' }}
                      </h2>
                  </div>
                  <div class="testimonial-two__carousel owl-theme owl-carousel">
                      @foreach ($testimonials as $key => $testi)
                          <div class="item">
                              <div class="testimonial-two__single">
                                  <div class="testimonial-two__quote">
                                      <span class="icon-quate-two"></span>
                                  </div>
                                  <p class="testimonial-two__text">{!! $testi->description ?? '' !!}</p>
                                  <div class="testimonial-two__client-info mt-3">
                                      <div class="testimonial-two__client-img">
                                          <img src="{{ asset('frontend/assets/images/testimonial/testimonial-2-1.jpg') }}"
                                              alt="">
                                      </div>
                                      <div class="testimonial-two__client-content">
                                          <h3>{{ $testi->name ?? '' }}</h3>
                                          <p>{{ $testi->position ?? '' }}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </section> --}}
          <!-- Testimonial Two End -->

          <!--FAQ One Start -->
          <section class="faq-one">
              <div class="faq-one__shape-2 float-bob-x">
                  <img src="{{ asset('frontend/assets/images/shapes/about-one-shape-1.png') }}" alt="">
              </div>
              <div class="container">
                  <div class="faq-one__inner">
                      <div class="row">
                          <div class="col-xl-5 col-lg-6">
                              <div class="faq-one__left">
                                  <div class="section-title text-left sec-title-animation animation-style2">
                                      <div class="section-title__tagline-box">
                                          <div class="section-title__tagline-shape"></div>
                                          <span
                                              class="section-title__tagline">{{ $settings['faq_section_title'] ?? '' }}</span>
                                      </div>
                                      <h2 class="section-title__title title-animation">
                                          {{ $settings['faq_section_slogan'] ?? '' }}
                                      </h2>
                                  </div>
                                  <div class="faq-one__btn-box">
                                      <a class="faq-one__btn thm-btn" href="{{ route('faqs') }}"><span>View more
                                          </span><i class="icon-arrow-up"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-7 col-lg-6">
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

          @if ($adds->isNotEmpty())
              @foreach ($adds as $ad)
                  @if ($ad->full_image)
                      <section class="full-ads my-4">
                          <div class="container">
                              <div class="row">
                                  <img src="{{ asset('/admin/images/adds/' . $ad->full_image) }}"
                                      alt="{{ $ad->title ?? 'Advertisement Image' }}" width="100%" height="150px"
                                      style="object-fit: cover;" loading="lazy">
                              </div>
                          </div>
                      </section>
                  @endif
              @endforeach
          @endif

          <!-- Blog Two Start -->
          <section class="blog-two">
              <div class="container">
                  <div class="section-title text-center sec-title-animation animation-style2">
                      <div class="section-title__tagline-box">
                          <div class="section-title__tagline-shape-2"></div>
                          <span class="section-title__tagline">{{ $settings['blog_section_title'] ?? '' }}</span>
                      </div>
                      <h2 class="section-title__title title-animation">{{ $settings['blog_section_slogan'] ?? '' }}</h2>
                  </div>
                  <div class="blog-two__carousel owl-theme owl-carousel">
                      @foreach ($blogs as $key => $blog)
                          <div class="item">
                              <div class="blog-two__single">
                                  <div class="blog-two__img-box">
                                      <div class="blog-two__img">
                                          <img src="{{ $blog->image ? asset('/admin/images/blog/' . $blog->image) : asset('frontend/assets/images/blog/blog-2-1.jpg') }}"
                                              alt="" style="height: 325px; width:100%;">
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
                                          <span>{{ date('d M Y', strtotime($blog->date)) }}</span>
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
                      @endforeach
                  </div>
                  <div class="about-two__btn-box" style="display: flex; justify-content:center;">
                      <a class="about-two__btn thm-btn" href="{{ route('blogs') }}"><span>View All Blogs</span><i
                              class="icon-arrow-up"></i></a>
                  </div>
              </div>
          </section>
          <!-- Blog Two End -->

      </main>
  @endsection
