  @extends('layouts.frontend.master2')

  @section('seo')
      <title>{{ $settings['contact_seo_title'] ?? 'Rotary' }}</title>
      <meta name="keywords" content="{{ $settings['contact_seo_keywords'] ?? 'Rotary' }}">
      <meta name="description" content="{{ $settings['contact_seo_description'] ?? 'Rotary' }}">
  @endsection

  @section('content')
      <main>
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
                      <h2>Contact Us</h2>
                      <div class="thm-breadcrumb__box">
                          <ul class="thm-breadcrumb list-unstyled">
                              <li><a href="{{ route('home') }}">Home</a></li>
                              <li><span>-</span></li>
                              <li>Contact Us</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </section>
          <!--Page Header End-->

          <!--Contact Two Start-->
          <section class="contact-two">
              <div class="container">
                  <div class="row">
                      <!--Contact Two Single Start-->
                      <div class="col-xl-4 col-lg-6 col-md-6">
                          <div class="contact-two__single">
                              <div class="contact-two__icon">
                                  <span class="icon-call"></span>
                              </div>
                              <div class="contact-two__content">
                                  <h4>Contact Phone</h4>
                                  <p><a
                                          href="tel:{{ $settings['site_contact'] ?? '' }}">{{ $settings['site_contact'] ?? '' }}</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                      <!--Contact Two Single End-->
                      <!--Contact Two Single Start-->
                      <div class="col-xl-4 col-lg-6 col-md-6">
                          <div class="contact-two__single">
                              <div class="contact-two__icon">
                                  <span class="icon-mail"></span>
                              </div>
                              <div class="contact-two__content">
                                  <h4>Contact Mail</h4>
                                  <p><a
                                          href="mailto:{{ $settings['site_email'] ?? '' }}">{{ $settings['site_email'] ?? '' }}</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                      <!--Contact Two Single End-->
                      <!--Contact Two Single Start-->
                      <div class="col-xl-4 col-lg-6 col-md-6">
                          <div class="contact-two__single">
                              <div class="contact-two__icon">
                                  <span class="icon-pin"></span>
                              </div>
                              <div class="contact-two__content">
                                  <h4>Meeting Venue</h4>
                                  <p>{{ $settings['office_location'] ?? '' }}</p>
                              </div>
                          </div>
                      </div>
                      <!--Contact Two Single End-->
                      <!--Contact Two Single Start-->
                      <div class="col-xl-4 col-lg-6 col-md-6">
                          <div class="contact-two__single">
                              <div class="contact-two__icon">
                                  <span class="icon-clock"></span>
                              </div>
                              <div class="contact-two__content">
                                  <h4>Meeting Date & time</h4>
                                  <p>Every 1st and 3rd Saturday of the Nepali Month at 8:30AM.</p>
                              </div>
                          </div>
                      </div>
                      <!--Contact Two Single End-->
                  </div>
              </div>
          </section>
          <!--Contact Two End-->

          <!--Contact Page Start-->
          <section class="contact-page">
              <div class="container">
                  <div class="contact-page__inner">
                      <h3 class="contact-page__title">Send Message</h3>
                      <form class="" id="inquiryform" action="{{ route('inquiry') }}" method="post"
                          novalidate="novalidate">
                          @csrf
                          <div class="row">
                              <div class="col-xl-12">
                                  <div class="contact-page__input-box">
                                      <h4 class="contact-page__input-title">Your Name</h4>
                                      <input type="text" name="name" placeholder="Enter Your Full Name">
                                      <span class="text-danger">
                                          <strong id="name-error"></strong>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6">
                                  <div class="contact-page__input-box">
                                      <h4 class="contact-page__input-title">Your Email</h4>
                                      <input type="email" name="email" placeholder="example@gmail.com">
                                      <span class="text-danger">
                                          <strong id="email-error"></strong>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6">
                                  <div class="contact-page__input-box">
                                      <h4 class="contact-page__input-title"> Phone </h4>
                                      <input type="number" name="phone" placeholder="Enter your number">
                                      <span class="text-danger">
                                          <strong id="phone-error"></strong>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-xl-12">
                                  <div class="contact-page__input-box">
                                      <h4 class="contact-page__input-title">Subject</h4>
                                      <input type="text" name="subject" placeholder="Enter Subject">
                                      <span class="text-danger">
                                          <strong id="subject-error"></strong>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-xl-12">
                                  <div class="contact-page__input-box text-message-box">
                                      <h4 class="contact-page__input-title">Message</h4>
                                      <textarea name="message" placeholder="Write your message"></textarea>
                                  </div>
                                  <div class="contact-page__btn-box">
                                      <button class="contact-page__btn" id="contactform" type="submit"><span>Submit
                                              Now</span></button>
                                  </div>
                              </div>
                          </div>
                      </form>
                      <div class="result"></div>
                  </div>
              </div>
          </section>
          <!--Contact Page End-->

          <!--Google Map Two Start-->
          <section class="google-map-two mb-5">
              <iframe src="{{ $settings['map'] ?? '' }}" width="100%" height="500" style="border:0;" allowfullscreen=""
                  loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
          </section>
          <!--Google Map Two End-->

      </main>
  @endsection
