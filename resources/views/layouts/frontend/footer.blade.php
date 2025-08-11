<footer class="site-footer-two">
    <div class="site-footer-two__top">
        <div class="container">
            <div class="site-footer-two__top-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget-two__about">
                            <div class="footer-widget-two__about-logo">
                                <a href="index.html"><img
                                        src="{{ $settings['site_footer_logo'] ? asset('admin/images/setting/' . $settings['site_footer_logo']) : asset('admin/images/logo.png') }}"
                                        alt="" style="width: 100px"></a>
                            </div>
                            <p class="footer-widget-two__about-text">{{ $settings['site_information'] ?? '' }}
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget-two__links">
                            <h4 class="footer-widget-two__title">Quick links</h4>
                            <ul class="footer-widget-two__links-list list-unstyled">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('projects') }}">Our Projects</a></li>
                                <li><a href="{{ route('team.current_board') }}">Our Members</a></li>
                                <li><a href="{{ route('blogs') }}">Our Blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget-two__contact">
                            <h3 class="footer-widget-two__title">Contact Us</h3>
                            <ul class="footer-widget-two__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <p>{{ $settings['office_location'] ?? '' }}
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <p><a
                                            href="tel:{{ $settings['site_contact'] ?? '' }}">{{ $settings['site_contact'] ?? '' }}</a>
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-mail"></span>
                                    </div>
                                    <p><a
                                            href="mailto:{{ $settings['site_email'] ?? '' }}">{{ $settings['site_email'] ?? '' }}</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget-two__services">
                            <h4 class="footer-widget-two__title">Our Location</h4>
                            <section class="google-map-one">
                                <iframe src="{{ $settings['map'] ?? '' }}" width="100%" height="240"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </section>
                        </div>
                    </div>
                </div>
                @if (getPartners()->isNotEmpty())
                    <div class="row mt-5">
                        <div class="slider responsive">
                            @foreach (getPartners() as $key => $partner)
                                <div>
                                    <h6 class="text-white text-center mb-3">{{ $partner->name ?? '' }}</h6>
                                    <img src="{{ asset('admin/images/partner/') }}/{{ $partner->image ?: 'avatar.png' }}"
                                        alt="" style="width:90%;height:130px;object-fit:cover">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="site-footer-two__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="site-footer-two__bottom-inner">
                        <div class="site-footer-two__copyright">
                            <p class="site-footer-two__copyright-text">© Copyright Rotaract club Of Narayani Midtown.
                                {{ date('Y') }} All right Reserved . Designed by
                                <a href="https://paradiseit.com.np/ " target="blank">Paradise
                                    Infotech</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="social">
                        <p class="site-footer-two__copyright-text">Follow Us On:</p>
                        @foreach (getSocialMedias() as $media)
                            <a target="_blank" href="{{ $media->link }}">
                                <i class="fa-brands {{ $media->icon ?? '' }}"></i>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
