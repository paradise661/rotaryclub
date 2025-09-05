@extends('layouts.frontend.master2')

@section('seo')
    <title>{{ $settings['events_seo_title'] ?? 'Rotary' }}</title>
    <meta name="keywords" content="{{ $settings['events_seo_keywords'] ?? 'Rotary' }}">
    <meta name="description" content="{{ $settings['events_seo_description'] ?? 'Rotary' }}">
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
                    <h2>Events</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>Upcoming events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Event One Start -->
        <section class="event-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h2 class="section-title__title title-animation"> {{ $settings['event_section_title'] ?? '' }}
                    </h2>
                </div>
                <div class="row">
                    @foreach ($events as $key => $event)
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".1s">
                            <div class="event-one__single">
                                <div class="event-one__img-box">
                                    <div class="event-one__img">
                                        {{-- <img
                                            src="{{ $event->image ? asset('/admin/images/event/' . $event->image) : asset('frontend/assets/images/event/event-1-1.jpg') }}"
                                            alt="{{ $event->name ?? '' }}" height="210px"> --}}
                                        <img src="{{ asset('admin/images/event/' . $event->image) }}" alt="">

                                    </div>
                                    <div class="event-one__date">
                                        <div class="event-one__date-shape-1">
                                            <img src="{{ asset('frontend/assets/images/shapes/event-one-date-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <p>{{ date('d M ', strtotime($event->date)) }}</p>
                                    </div>
                                </div>
                                <div class="event-one__content">
                                    <h3 class="event-one__title"><a
                                            href="{{ route('event.show', $event->slug) }}">{{ $event->name ?? '' }}</a>
                                    </h3>
                                    <p class="event-one__text">
                                        <i class="fa-solid fa-location-dot"></i>{{ $event->location ?? '' }}
                                    </p>
                                    <p class="event-one__text"> <i
                                            class="fa-solid fa-clock"></i>{{ date('g:i A', strtotime($event->time)) ?? 'N/A' }}
                                        -
                                        {{ date('g:i A', strtotime($event->time_to)) ?? 'N/A' }}
                                    </p>
                                    <p class="event-one__text"><i
                                            class="fa-solid fa-calendar-days"></i>{{ date('d M -Y', strtotime($event->date)) }}
                                    </p>

                                    <div class="event-one__btn-box">
                                        <a class="event-one__btn" href="{{ route('event.show', $event->slug) }}"><i
                                                class="icon-right-arrow"></i><span>Read
                                                More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Event One End -->
    </main>
@endsection