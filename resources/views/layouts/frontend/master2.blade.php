<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicons Icons -->
    @yield('seo')
    <link href="{{ asset('admin/images/logo.jpg') }}" rel="shortcut icon" type="image/png">
    <link rel="manifest" href="{{ asset('frontend/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Rotaract Club of Narayani Midtown " />
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/error-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/coming-soon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/services.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/counter.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/courses.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/event.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/video.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/become-volunteer.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/team.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/testimonial.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/newsletter.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/banner.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/join.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/brand.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/page-header.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/google-map.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        .toast-success {
            background-color: #f9136b;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="page-wrapper">
        @include('layouts.frontend.header2')

        @yield('content')

        @include('layouts.frontend.footer')
        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="{{ route('home') }}" aria-label="logo image"><img
                            src="{{ $settings['site_main_logo'] ? asset('admin/images/setting/' . $settings['site_main_logo']) : asset('admin/images/logo.png') }}"
                            width="150" alt="" /></a>
                </div>
                <div class="mobile-nav__container"></div>

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:{{ $settings['site_email'] ?? '' }}">{{ $settings['site_email'] ?? '' }}</a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:{{ $settings['site_contact'] ?? '' }}">{{ $settings['site_contact'] ?? '' }}</a>
                    </li>
                </ul>
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a class="fab fa-twitter" href="#"></a>
                        <a class="fab fa-facebook-square" href="#"></a>
                        <a class="fab fa-pinterest-p" href="#"></a>
                        <a class="fab fa-instagram" href="#"></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <form action="#">
                    <label class="sr-only" for="search">search here</label>
                    <input id="search" type="text" placeholder="Search Here..." />
                    <button class="thm-btn" type="submit" aria-label="search submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

        <a class="scroll-to-target scroll-to-top" data-target="html" href="#">
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
            <span class="scroll-to-top__text"> Go Back Top</span>
        </a>

        <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/wNumb.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.circleType.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.fittext.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.circle-progress.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vegas.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="{{ asset('frontend/assets/js/gsap/gsap.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/gsap/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/gsap/SplitText.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#inquiryform').submit(function(e) {
                    e.preventDefault();

                    var InquiryData = new FormData(this);
                    $('#name-error').html("");
                    $('#email-error').html("");
                    $('#phone-error').html("");

                    $.ajax({
                        url: "{{ route('inquiry') }}",
                        method: 'POST',
                        data: InquiryData,
                        processData: false,
                        cache: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                        },
                        success: function(data) {
                            if (data.errors) {
                                if (data.errors.name) {
                                    $('#name-error').html('*' + data.errors.name[0]);
                                }
                                if (data.errors.email) {
                                    $('#email-error').html('*' + data.errors.email[0]);
                                }
                                if (data.errors.phone) {
                                    $('#phone-error').html('*' + data.errors.phone[0]);
                                }
                            }

                            if (data.success) {
                                toastr.success(data.success);
                                $('#inquiryform')[0].reset();
                            }

                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                            alert("Error: " + xhr.responseText);
                        }
                    });
                });
            });
        </script>
        <script>
            $(".responsive").slick({
                dots: false,
                infinite: true,
                autoplay: true,
                speed: 500,
                autoplaySpeed: 3000,
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        </script>
</body>

</html>
