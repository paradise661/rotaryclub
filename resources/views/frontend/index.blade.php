  @extends('layouts.frontend.master')

  @section('seo')
      <title>{{ $settings['homepage_seo_title'] ?? 'Rotary' }}</title>
      <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Rotary' }}">
      <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Rotary' }}">
  @endsection

  <!-- Main -->
  @section('content')
      <main>
          @php
              $adIndex = 0;
          @endphp
          @foreach ($modals as $key => $modal)
          @foreach ($modals as $key => $modal)
          <div class="modal fade" id="popupModal{{ $key }}" tabindex="-1" aria-labelledby="popupModalLabel{{ $key }}" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                      <div class="d-flex">
                          <div class="modal-headerpopup w-100 text-end">
                              @if ($loop->last)
                                  <button class="btn-close red-close-btn close-all-modals" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                              @else
                                  <button class="btn-close red-close-btn" data-bs-dismiss="modal"
                                      data-bs-target="#popupModal{{ $key + 1 }}" data-bs-toggle="modal"
                                      type="button" aria-label="Close"></button>
                              @endif
                          </div>
                      </div>
                      <div class="modal-body text-center">
                          @if ($modal->image)
                              <img class="img-fluid popup-img" src="{{ asset('admin/images/modal/' . $modal->image) }}" alt="Popup Image" style="object-fit: cover;">
                          @endif
                          
                          @if ($modal->description)
                              <p class="mt-3">{!! $modal->description !!}</p>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
      
      <script>
          document.addEventListener("DOMContentLoaded", function () {
              var firstModal = new bootstrap.Modal(document.getElementById('popupModal0'));
              firstModal.show();
          });
      </script>
      
          @endforeach
          <!--Banner One Start -->
          <section class="main-slider-two">
              <div class="main-slider-two__carousel owl-carousel owl-theme">
                  @foreach ($sliders as $key => $slider)
                      <div class="item">
                          <div class="main-slider-two__bg"
                              style="background-image: url({{ $slider->image ? asset('/admin/images/slider/' . $slider->image) : asset('frontend/assets/images/backgrounds/slider-2-1.jpg') }});">
                          </div>
                          <div class="container">
                              <div class="main-slider-two__content">
                                  <div class="main-slider-two__sub-title-box">
                                      <div class="main-slider-two__sub-title-shape"></div>
                                      <hnep5 class="main-slider-two__sub-title">{{ $slider->title ?? '' }}</hnep5>
                                  </div>
                                  <h2 class="main-slider-two__title"> <span>{{ $slider->slogan ?? '' }}</span></h2>
                                  <p style="color: white;"><span class="color:none">
                                          {!! $slider->description ?? '' !!}
                                      </span>
                                  </p>
                                  <div class="main-slider-two__btn-box">
                                      <a class="main-slider-two__btn thm-btn" href="{{ route('contact') }}"><span>Contact
                                              Us</span><i class="icon-arrow-up"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </section>
          <!--Banner One End -->

          <!--Banner Bottom Start -->
          <section class="banner-bottom">
              <div class="container">
                  <div class="slider-bg-slide"
                      data-options='{ 
                    "delay": 10000, 
                    "transitionDuration": 4000, 
                    "slides": 
                        [ 
                        { "src": "{{ asset('frontend/assets/images/resources/banner-bottom-img-1-1.jpg') }}" }, 
                        { "src": "{{ asset('frontend/assets/images/resources/banner-bottom-img-1-2.jpg') }}" }, 
                        { "src": "{{ asset('frontend/assets/images/resources/banner-bottom-img-1-3.jpg') }}" } 
                        ], 
                        "transition": "fade", 
                        "animation": "random", 
                        "animationDuration": "10000", 
                        "timer": false, 
                        "align": "top" 
                    }'>
                  </div>
              </div>
          </section>
          <!--Banner Bottom End -->

          <!--About Two Start -->
          <section class="about-two">
              <div class="about-two__shape-1 float-bob-x">
                  <img src="{{ asset('frontend/assets/images/shapes/about-two-shape-1.png') }}" alt="">
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-xl-6">
                          <div class="about-two__left">
                              <div class="section-title text-left sec-title-animation animation-style2">
                                  <div class="section-title__tagline-box">
                                      <div class="section-title__tagline-shape-2"></div>
                                      <span class="section-title__tagline">About Us</span>
                                  </div>
                                  <h2 class="section-title__title title-animation">
                                      {{ $settings['about_section_title'] ?? '' }}</h2>
                              </div>
                              {!! stripLetters($settings['about_section_description'] ?? '', 700, '...') !!}
                              <div class="about-two__btn-box">
                                  <a class="about-two__btn thm-btn" href="{{ route('about') }}"><span>Read more</span><i
                                          class="icon-arrow-up"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-6 wow fadeInRight" data-wow-delay=".3s">
                          <div class="about-two__right">
                              <div class="about-two__img-box">
                                  <div class="about-two__img">
                                      <img src="{{ $settings['about_section_image2'] ? asset('/admin/images/setting/' . $settings['about_section_image2']) : asset('frontend/assets/images/resources/about-two-img-1.jpg') }}"
                                          alt="">
                                  </div>
                                  <div class="about-two__img-2">
                                      <img src="{{ $settings['about_section_image'] ? asset('/admin/images/setting/' . $settings['about_section_image']) : asset('frontend/assets/images/resources/about-two-img-2.jpg') }}"
                                          alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--About Two End -->

          <!--Courses Two Start -->
          @if ($achievements->isNotEmpty())
              <section class="courses-two">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-9">
                              <div class="section-title  sec-title-animation animation-style2">
                                  <div class="section-title__tagline-box">
                                      <div class="section-title__tagline-shape-2"></div>
                                      <span
                                          class="section-title__tagline">{{ $settings['project_section_title'] ?? '' }}</span>
                                  </div>
                                  <h2 class="section-title__title title-animation">
                                      {{ $settings['project_section_slogan'] ?? '' }}</h2>
                              </div>
                          </div>
                          <div class="col-md-3">
                              @if (isset($adds[$adIndex]))
                                  <img src="{{ $adds[$adIndex]->side_image ? asset('/admin/images/adds/' . $adds[$adIndex]->side_image) : asset('frontend/assets/images/courses/courses-2-1.jpg') }}"
                                      alt="" width="100%" height="250px">
                                  @php $adIndex++; @endphp
                              @endif
                          </div>
                      </div>
                      <div class="row mt-4">
                          @foreach ($achievements as $key => $project)
                              <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                                  <div class="courses-two__single">
                                      <div class="courses-two__img-box">
                                          <div class="courses-two__img">
                                              <img src="{{ $project->image ? asset('/admin/images/achievement/' . $project->image) : asset('frontend/assets/images/courses/courses-2-1.jpg') }}"
                                                  alt="{{ $project->title ?? '' }}" style="height: 255px">
                                              <div class="courses-two__tag">
                                                  <div class="courses-two__tag-shape-1">
                                                      <img src="{{ asset('frontend/assets/images/shapes/courses-two-tag-shape-1.png') }}"
                                                          alt="">
                                                  </div>
                                                  <div class="courses-two__tag-shape-2">
                                                      <img src="{{ asset('frontend/assets/images/shapes/courses-two-tag-shape-2.png') }}"
                                                          alt="">
                                                  </div>
                                                  <span>{{ $project->date ?? '' }}</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="courses-two__content">
                                          <h3 class="courses-two__title"><a
                                                  href="{{ route('project.show', $project->slug) }}">{{ $project->title ?? '' }}</a>
                                          </h3>
                                          <p class="courses-two__text"><span
                                                  style="color: #f9136b;font-weight:600;">Location:
                                              </span>{{ $project->slogan ?? '' }}</p>
                                          <div class="courses-two__btn-box">
                                              <a class="courses-two__btn thm-btn"
                                                  href="{{ route('project.show', $project->slug) }}"><span>View
                                                      more</span><i class="icon-arrow-up"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </section>
          @endif
          <!--Courses Two End -->

          <!--Become Volunteer Two Start -->
          <section class="become-volunteer-two">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                          <div class="become-volunteer-two__single">
                              <div class="become-volunteer-two__single-bg-2"
                                  style="background-image: url(assets/images/backgrounds/become-volunteer-two-single-bg-2.jpg);">
                              </div>
                              <h3 class="become-volunteer-two__title"><a
                                      href="{{ route('become-member') }}">{{ $settings['volunteer_section_title'] ?? '' }}</a>
                              </h3>
                              <p class="become-volunteer-two__text">{{ $settings['volunteer_section_slogan'] ?? '' }}
                              </p>
                              <div class="become-volunteer-two__btn-box">
                                  <a class="become-volunteer-two__btn-2 thm-btn"
                                      href="{{ route('become-member') }}"><span>Join Us</span><i
                                          class="icon-arrow-up"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--Become Volunteer Two End -->
          @php
          $adIndex = 0;
          @endphp
          @if (isset($adds[$adIndex]))
              <section class="full-ads my-4">
                  <div class="container">
                      <div class="row">
                          <img id="test-img" src="{{ $adds[$adIndex]->full_image ? asset('/admin/images/adds/' . $adds[$adIndex]->full_image) : asset('frontend/assets/images/blog/blog-2-2.jpg') }}"
                              alt="{{ $adds[$adIndex]->title ?? 'Advertisement Image' }}" width="100%" height="150px"
                              style="object-fit: cover;" loading="lazy">
                      </div>
                  </div>
              </section>
              @php $adIndex++; @endphp
          @endif

          <!--Services Two Start -->
          {{-- @if ($whatwedo->isNotEmpty())
              <section class="services-two">
                  <div class="container">
                      <div class="section-title text-center sec-title-animation animation-style2">
                          <div class="section-title__tagline-box">
                              <div class="section-title__tagline-shape-2"></div>
                              <span class="section-title__tagline">{{ $settings['service_section_title'] ?? '' }}</span>
                          </div>
                          <h2 class="section-title__title title-animation">{{ $settings['service_section_slogan'] ?? '' }}
                          </h2>
                      </div>
                      <div class="services-two__carousel owl-theme owl-carousel">
                          @foreach ($whatwedo as $key => $wedo)
                              <div class="item">
                                  <div class="services-two__single">
                                      <div class="services-two__icon">
                                          <img src="{{ $wedo->image ? asset('/admin/images/whychooseus/' . $wedo->image) : asset('frontend/assets/images/blog/blog-details-img-1.jpg') }}"
                                              alt="">
                                      </div>
                                      <h3 class="services-two__title"><a
                                              href="{{ route('whychooseus.show', $wedo->slug) }}">{{ $wedo->title ?? '' }}</a>
                                      </h3>
                                      <p class="services-two__text">{{ $wedo->short_description ?? '' }}
                                      </p>
                                      <div class="services-two__read-more">
                                          <div class="services-two__read-more-shape"></div>
                                          <a href="{{ route('whychooseus.show', $wedo->slug) }}">Read More</a>
                                      </div>
                                  </div>
                              </div>
                          @endforeach

                      </div>
                  </div>
              </section>
          @endif --}}
          <!--Services Two End -->

          <!-- event Two Start -->
          <section class="event-two">
              <div class="container">
                  <div class="row">
                      <div class="col-md-9">
                          <div class="section-title text-center sec-title-animation animation-style2">
                              <div class="section-title__tagline-box">
                                  <div class="section-title__tagline-shape-2"></div>
                                  <span class="section-title__tagline">{{ $settings['event_section_title'] ?? '' }}</span>
                              </div>
                              <h2 class="section-title__title title-animation">
                                  {{ $settings['event_section_slogan'] ?? '' }}
                              </h2>
                          </div>
                          <div class="row mt-4">
                              @foreach ($events as $key => $event)
                                  <div class="col-md-6 mb-3">
                                      <div class="card-event">
                                          <div class="row align-items-center">
                                              <div class="col-md-4">
                                                  <div class="head">
                                                      <h2>
                                                          {{ date('d ', strtotime($event->date)) }}
                                                      </h2>
                                                      <p>
                                                          {{ date(' M', strtotime($event->date)) }},
                                                      </p>
                                                      <p>
                                                          {{ date('D', strtotime($event->date)) }}
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="col-md-8">
                                                  {{-- <img src="{{ asset('admin/images/event.png') }}" alt=""
                                                                            style="height:300px;width:100%;"> --}}
                                                  <div class="content">
                                                      <a class="stretched-link"
                                                          href="{{ route('event.show', $event->slug) }}">
                                                          <h4 class="fw-bold">{{ $event->name ?? '' }}</h4>
                                                      </a>
                                                      <div class="d-flex align-items-center gap-3 mt-2">
                                                          <i class="fa-solid fa-location-dot"></i>
                                                          <p>{{ $event->location ?? '' }}</p>
                                                      </div>
                                                      <div class="d-flex align-items-center gap-3 mt-2">
                                                          <i class="fa-solid fa-clock"></i>
                                                          <p>{{ date('g:i A', strtotime($event->time)) ?? 'N/A' }}
                                                              -
                                                              {{ date('g:i A', strtotime($event->time_to)) ?? 'N/A' }}
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                          <a class="mt-2" style="display: flex; justify-content:center;"
                              href="{{ route('events') }}">View All Events
                              >></a>
                      </div>
                      <div class="col-md-3">
                          @if (isset($adds[1]))
                              <div class="mb-3">
                                  <img class="mb-3"
                                      src="{{ $adds[1]->side_image ? asset('/admin/images/adds/' . $adds[1]->side_image) : asset('frontend/assets/images/courses/courses-2-1.jpg') }}"
                                      alt="" width="100%" height="250px">
                              </div>
                          @endif

                          @if (isset($adds[2]))
                              <div class="mb-3">
                                  <img class="mb-3"
                                      src="{{ $adds[2]->side_image ? asset('/admin/images/adds/' . $adds[2]->side_image) : asset('frontend/assets/images/courses/courses-2-1.jpg') }}"
                                      alt="" width="100%" height="250px">
                              </div>
                          @endif
                      </div>

                  </div>

              </div>
          </section>
          <!-- event Two End -->

          @if (isset($adds[$adIndex]))
              <section class="full-ads my-4">
                  <div class="container">
                      <div class="row">
                          <img src="{{ $adds[$adIndex]->full_image ? asset('/admin/images/adds/' . $adds[$adIndex]->full_image) : asset('frontend/assets/images/blog/blog-2-2.jpg') }}"
                              alt="{{ $adds[$adIndex]->title ?? 'Advertisement Image' }}" width="100%" height="150px"
                              style="object-fit: cover;" loading="lazy">
                      </div>
                  </div>
              </section>
              @php $adIndex++; @endphp
          @endif
          <!-- Testimonial Two Start -->
          {{-- <section class="testimonial-two">
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

          <!-- Blog Two Start -->
          <section class="blog-two">
              <div class="container">
                  <div class="row">
                      <div class="section-title text-center sec-title-animation animation-style2">
                          <div class="section-title__tagline-box">
                              <div class="section-title__tagline-shape-2"></div>
                              <span class="section-title__tagline">{{ $settings['blog_section_title'] ?? '' }}</span>
                          </div>
                          <h2 class="section-title__title title-animation">
                              {{ $settings['blog_section_slogan'] ?? '' }}</h2>
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
                              <!--Testimonial Two Single End-->
                          @endforeach
                      </div>
                      <div class="about-two__btn-box" style="display: flex; justify-content:center;">
                          <a class="about-two__btn thm-btn" href="{{ route('blogs') }}"><span>View All Blogs</span><i
                                  class="icon-arrow-up"></i></a>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Blog Two End -->

          <!-- Contact One Start -->
          <section class="contact-one">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-5 col-lg-6">
                          <div class="contact-one__left">
                              <h3 class="contact-one__title">Have Questions? <br>Get In Touch!</h3>
                              <a class="contact-one__email"
                                  href="mailto:{{ $settings['site_email'] ?? '' }}">{{ $settings['site_email'] ?? '' }}</a>
                              <div class="contact-one__img-1 float-bob-x">
                                  <img src="{{ asset('frontend/assets/images/shapes/contact-one-img-1.png') }}"
                                      alt="">
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-7 col-lg-6 wow fadeInRight" data-wow-delay=".4s">
                          <div class="contact-one__right">
                              <form class="" id="inquiryform" action="{{ route('inquiry') }}" method="post">
                                  @csrf
                                  <div class="row">
                                      <div class="col-xl-12">
                                          <div class="contact-one__input-box">
                                              <input id="name" type="text" name="name"
                                                  placeholder="Your full name*">
                                          </div>
                                          <span class="text-danger">
                                              <strong id="name-error"></strong>
                                          </span>
                                      </div>
                                      <div class="col-xl-6 col-lg-6">
                                          <div class="contact-one__input-box">
                                              <input id="email" type="email" name="email"
                                                  placeholder="E-mail address*">
                                          </div>
                                          <span class="text-danger">
                                              <strong id="email-error"></strong>
                                          </span>
                                      </div>
                                      <div class="col-xl-6 col-lg-6">
                                          <div class="contact-one__input-box">
                                              <input id="phone" type="number" name="phone"
                                                  placeholder="Your Phone*">
                                          </div>
                                          <span class="text-danger">
                                              <strong id="phone-error"></strong>
                                          </span>
                                      </div>
                                      <div class="col-xl-12">
                                          <div class="contact-one__input-box">
                                              <input id="subject" type="text" name="subject"
                                                  placeholder="Subject*">
                                              <span class="text-danger">
                                                  <strong id="subject-error"></strong>
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-xl-12">
                                          <div class="contact-one__input-box text-message-box">
                                              <textarea id="message" name="message" placeholder="Message*"></textarea>
                                          </div>
                                          <div class="contact-one__btn-box">
                                              <button class="thm-btn contact-one__btn" id="contactform"
                                                  type="submit"><span>Submit
                                                      Now</span><i class="icon-arrow-up"></i></button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                              <div class="result"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Contact One End -->
          </div>
      @endsection
