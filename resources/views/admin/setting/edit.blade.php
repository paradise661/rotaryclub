@extends('layouts.admin.master')
@section('title', 'Website Settings')
@section('content')
    @include('admin.includes.message')
    <div class="content">
        <div class="container-fluid">
            <div class="">
                <div class="card-body p-0">
                    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card card-primary shadow br-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 col-sm-2 nav flex-column gap-2 nav-pills" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <button class="nav-link text-start active" id="v-pills-global-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-global" type="button"
                                            role="tab" aria-controls="v-pills-global"
                                            aria-selected="true">Global</button>

                                        <button class="nav-link text-start" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="false">Homepage</button>

                                        <button class="nav-link text-start" id="v-pills-about-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-about" type="button" role="tab"
                                            aria-controls="v-pills-about" aria-selected="false">About</button>

                                        {{-- <button class="nav-link text-start" id="v-pills-banner-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-banner" type="button" role="tab"
                                            aria-controls="v-pills-banner" aria-selected="false">Banner Section</button> --}}

                                        {{-- <button class="nav-link text-start" id="v-pills-pagebanner-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-pagebanner" type="button"
                                            role="tab" aria-controls="v-pills-pagebanner" aria-selected="false">Page
                                            Banner</button> --}}

                                        <button class="nav-link text-start" id="v-pills-contacts-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-contacts" type="button" role="tab"
                                            aria-controls="v-pills-contacts" aria-selected="false">Contact</button>

                                        <button class="nav-link text-start" id="v-pills-seo-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-seo" type="button" role="tab"
                                            aria-controls="v-pills-seo" aria-selected="false">Seo</button>
                                    </div>
                                    <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-global" role="tabpanel"
                                            aria-labelledby="v-pills-global-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_main_logo">Site Main Logo</label>
                                                        <div class="custom-file">
                                                            <input class="mainlogo" id="site_logo"
                                                                data-default-file="{{ $settings['site_main_logo'] != null ? asset('admin/images/setting') . '/' . $settings['site_main_logo'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="site_main_logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_footer_logo">Site Footer Logo</label>
                                                        <div class="custom-file">
                                                            <input class="mainlogo" id="sitefooter_logo"
                                                                data-default-file="{{ $settings['site_footer_logo'] != null ? asset('admin/images/setting') . '/' . $settings['site_footer_logo'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="site_footer_logo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="fav_icon">Fav Icon</label>
                                                        <div class="custom-file">
                                                            <input class="fav_icon" id="fav_icon"
                                                                data-default-file="{{ $settings['fav_icon'] != null ? asset('admin/images/setting') . '/' . $settings['fav_icon'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="fav_icon">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="site_information">Site Information</label>
                                                            <textarea class="form-control br-8" name="site_information" rows="4" placeholder="Enter Site Information">{{ $settings['site_information'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="global_section">Global Question Sectiion</label>
                                                        <textarea class="form-control br-8" name="global_section" rows="2" placeholder="Enter Site Information">{{ $settings['global_section'] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="site_copyright">Site Copyright</label>
                                                        <textarea class="form-control br-8" name="site_copyright" rows="4" placeholder="Enter Site Copyright">{{ $settings['site_copyright'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="project_section_title">Project Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="project_section_title"
                                                            value="{{ $settings['project_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="project_section_slogan">Project Section Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="project_section_slogan"
                                                            value="{{ $settings['project_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="service_section_title">What we Do Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="service_section_title"
                                                            value="{{ $settings['service_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="service_section_slogan">What we Do Section
                                                            Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="service_section_slogan"
                                                            value="{{ $settings['service_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="event_section_title">Event Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="event_section_title"
                                                            value="{{ $settings['event_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="event_section_slogan">Event Section
                                                            Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="event_section_slogan"
                                                            value="{{ $settings['event_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="volunteer_section_title">Volunteer Section
                                                            Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="volunteer_section_title"
                                                            value="{{ $settings['volunteer_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="volunteer_section_slogan">Volunteer Section
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="volunteer_section_slogan" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['volunteer_section_slogan'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="faq_section_title">Faq Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="faq_section_title"
                                                            value="{{ $settings['faq_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="faq_section_slogan">Faq Section
                                                            Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="faq_section_slogan"
                                                            value="{{ $settings['faq_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="team_section_title">Team Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="team_section_title"
                                                            value="{{ $settings['team_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="team_section_slogan">Team Section Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="team_section_slogan"
                                                            value="{{ $settings['team_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="testimonial_section_title">Testimonial Section
                                                            Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="testimonial_section_title"
                                                            value="{{ $settings['testimonial_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="testimonial_section_slogan">Testimonial Section
                                                            Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="testimonial_section_slogan"
                                                            value="{{ $settings['testimonial_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="blog_section_title">Blog Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="blog_section_title"
                                                            value="{{ $settings['blog_section_title'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="blog_section_slogan">Blog Section Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="blog_section_slogan"
                                                            value="{{ $settings['blog_section_slogan'] ?? '' }}"
                                                            placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_seo_title">Homepage Seo Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="homepage_seo_title"
                                                            value="{{ $settings['homepage_seo_title'] ?? '' }}"
                                                            placeholder="Enter homepage Seo Title">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_seo_description">Homepage Seo
                                                            Keywords</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="homepage_seo_description"
                                                            value="{{ $settings['homepage_seo_description'] ?? '' }}"
                                                            placeholder="Enter Homepage Seo Keywords">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_seo_keywords">Homepage Seo
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="homepage_seo_keywords" rows="4" placeholder="Enter Something ...">{{ $settings['homepage_seo_keywords'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                                            aria-labelledby="v-pills-about-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="about_section_title">About Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="about_section_title"
                                                            value="{{ $settings['about_section_title'] ?? '' }}"
                                                            placeholder="Enter About Title">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="about_section_image">About Section Image</label>
                                                        <div class="custom-file">
                                                            <input class="about_section_image" id="about_section_image"
                                                                data-default-file="{{ $settings['about_section_image'] != null ? asset('admin/images/setting') . '/' . $settings['about_section_image'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="about_section_image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="about_section_image2">About Section Second
                                                            Image</label>
                                                        <div class="custom-file">
                                                            <input class="about_section_image2" id="about_section_image2"
                                                                data-default-file="{{ $settings['about_section_image2'] != null ? asset('admin/images/setting') . '/' . $settings['about_section_image2'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="about_section_image2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="about_section_description">About Section
                                                            Description</label>
                                                        <textarea class="form-control br-8 ckeditor" name="about_section_description" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['about_section_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="about_mission_image">Our Mission Image</label>
                                                        <div class="custom-file">
                                                            <input class="about_mission_image" id="about_mission_image"
                                                                data-default-file="{{ $settings['about_mission_image'] != null ? asset('admin/images/setting') . '/' . $settings['about_mission_image'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="about_mission_image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="about_vision_image">Our Goals Image</label>
                                                        <div class="custom-file">
                                                            <input class="about_section_image" id="about_vision_image"
                                                                data-default-file="{{ $settings['about_vision_image'] != null ? asset('admin/images/setting') . '/' . $settings['about_vision_image'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="about_vision_image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="mission_section_description">Our Mission
                                                            Description</label>
                                                        <textarea class="form-control br-8 missionckeditor" name="mission_section_description" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['mission_section_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="vision_section_description">Our Goals
                                                            Description</label>
                                                        <textarea class="form-control br-8 visionckeditor" name="vision_section_description" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['vision_section_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <fieldset class="border p-3 mb-4">
                                                    <legend class="float-none w-auto legend-title">Count Section</legend>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group mb-3">
                                                                <label for="experience_count">Experience Count</label>
                                                                <input class="form-control br-8" type="text"
                                                                    name="experience_count"
                                                                    value="{{ $settings['experience_count'] ?? '' }}"
                                                                    placeholder="experience count">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group mb-3">
                                                                <label for="countries_count">Countries Count</label>
                                                                <input class="form-control br-8" type="text"
                                                                    name="countries_count"
                                                                    value="{{ $settings['countries_count'] ?? '' }}"
                                                                    placeholder="countries">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group mb-3">
                                                                <label for="students_count">Volunteer Count</label>
                                                                <input class="form-control br-8" type="text"
                                                                    name="students_count"
                                                                    value="{{ $settings['students_count'] ?? '' }}"
                                                                    placeholder="student count">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group mb-3">
                                                                <label for="experts_count"> Project Count</label>
                                                                <input class="form-control br-8" type="text"
                                                                    name="experts_count"
                                                                    value="{{ $settings['experts_count'] ?? '' }}"
                                                                    placeholder="experts count">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>

                                        {{-- <div class="tab-pane fade" id="v-pills-banner" role="tabpanel"
                                            aria-labelledby="v-pills-banner-tab">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_section_title">Banner Section Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="banner_section_title"
                                                            value="{{ $settings['banner_section_title'] ?? '' }}"
                                                            placeholder="Enter Banner Title">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_section_slogan">Banner Section
                                                            Slogan</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="banner_section_slogan"
                                                            value="{{ $settings['banner_section_slogan'] ?? '' }}"
                                                            placeholder="Enter Slogan">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_section_timeframe">Banner Section
                                                            Timeframe</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="banner_section_timeframe"
                                                            value="{{ $settings['banner_section_timeframe'] ?? '' }}"
                                                            placeholder="Enter Timeframe">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_section_formtitle">Form Section
                                                            Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="banner_section_formtitle"
                                                            value="{{ $settings['banner_section_formtitle'] ?? '' }}"
                                                            placeholder="Enter Title">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_section_formdescription">Form Section
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="banner_section_formdescription" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['banner_section_formdescription'] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_section_image">Banner Section
                                                            Image <span>(640 x
                                                                938px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="banner_section_image" id="banner_section_image"
                                                                data-default-file="{{ $settings['banner_section_image'] != null ? asset('admin/images/setting') . '/' . $settings['banner_section_image'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="banner_section_image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="tab-pane fade" id="v-pills-pagebanner" role="tabpanel"
                                            aria-labelledby="v-pills-pagebanner-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="about_page_banner">About Page Banner<span>(1465 x
                                                                450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="about_page_banner" id="about_page_banner"
                                                                data-default-file="{{ $settings['about_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['about_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="about_page_banner">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="course_page_banner">Course Page Banner<span>(1465 x
                                                                450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="course_page_banner" id="course_page_banner"
                                                                data-default-file="{{ $settings['course_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['course_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="course_page_banner">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="faq_page_banner">FAQ Page Banner<span>(1465 x
                                                                450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="faq_page_banner" id="faq_page_banner"
                                                                data-default-file="{{ $settings['faq_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['faq_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="faq_page_banner">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="country_page_banner">Country Page
                                                            Banner<span><span>(1465 x
                                                                    450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="country_page_banner" id="country_page_banner"
                                                                data-default-file="{{ $settings['country_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['country_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="country_page_banner">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="blog_page_banner">Blog Page Banner<span>(1465 x
                                                                450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="blog_page_banner" id="blog_page_banner"
                                                                data-default-file="{{ $settings['blog_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['blog_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="blog_page_banner">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="service_page_banner">Service Page Banner<span>(1465 x
                                                                450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="service_page_banner" id="service_page_banner"
                                                                data-default-file="{{ $settings['service_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['service_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="service_page_banner">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_page_banner">Contact Page Banner<span>(1465 x
                                                                450px)</span></label>
                                                        <div class="custom-file">
                                                            <input class="contact_page_banner" id="contact_page_banner"
                                                                data-default-file="{{ $settings['contact_page_banner'] != null ? asset('admin/images/setting') . '/' . $settings['contact_page_banner'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="contact_page_banner">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="tab-pane fade" id="v-pills-contacts" role="tabpanel"
                                            aria-labelledby="v-pills-contacts-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_image">Contact Section
                                                            Image </label>
                                                        <div class="custom-file">
                                                            <input class="contact_image" id="contact_image"
                                                                data-default-file="{{ $settings['contact_image'] != null ? asset('admin/images/setting') . '/' . $settings['contact_image'] : null }}"
                                                                data-show-remove="false"
                                                                data-allowed-file-extensions='["jpg", "jpeg","png","bmp","gif","svg","webp"]'
                                                                type="file" name="contact_image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_section_description">Contact Section
                                                            Description</label>
                                                        <textarea class="form-control br-8 " name="contact_section_description" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['contact_section_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="map">Map</label>
                                                        <textarea class="form-control br-8" name="map" rows="4" placeholder="Enter Map Details">{{ $settings['map'] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_email">Site Email</label>
                                                        <input class="form-control br-8" type="text" name="site_email"
                                                            value="{{ $settings['site_email'] ?? '' }}"
                                                            placeholder="Enter Email">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_contact">Site Contact</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="site_contact"
                                                            value="{{ $settings['site_contact'] ?? '' }}"
                                                            placeholder="Enter Contact">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="office_location">Office Location</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="office_location"
                                                            value="{{ $settings['office_location'] ?? '' }}"
                                                            placeholder="Enter Office Location">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_seo_title">Contact Seo Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="contact_seo_title"
                                                            value="{{ $settings['contact_seo_title'] ?? '' }}"
                                                            placeholder="Enter Seo Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_seo_keywords">Contact Seo
                                                            Keywords</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="contact_seo_keywords"
                                                            value="{{ $settings['contact_seo_keywords'] ?? '' }}"
                                                            placeholder="Enter Seo Keywords">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_seo_description">Contact Seo
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="contact_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['contact_seo_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-seo" role="tabpanel"
                                            aria-labelledby="v-pills-seo-tab">
                                            <fieldset class="border p-3">
                                                <legend class="float-none w-auto legend-title">Projects</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="projects_seo_title">Projects Seo Title</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="projects_seo_title"
                                                                value="{{ $settings['projects_seo_title'] ?? '' }}"
                                                                placeholder="Enter Seo Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="projects_seo_keywords">Projects Seo
                                                                Keywords</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="projects_seo_keywords"
                                                                value="{{ $settings['projects_seo_keywords'] ?? '' }}"
                                                                placeholder="Enter Seo Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="projects_seo_description">Projects Seo
                                                                Description</label>
                                                            <textarea class="form-control br-8" name="projects_seo_description" rows="4"
                                                                placeholder="Enter Something ...">{{ $settings['projects_seo_description'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset class="border p-3">
                                                <legend class="float-none w-auto legend-title">Events</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="events_seo_title">Events Seo Title</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="events_seo_title"
                                                                value="{{ $settings['events_seo_title'] ?? '' }}"
                                                                placeholder="Enter Seo Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="events_seo_keywords">Events Seo
                                                                Keywords</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="events_seo_keywords"
                                                                value="{{ $settings['events_seo_keywords'] ?? '' }}"
                                                                placeholder="Enter Seo Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="events_seo_description">Events Seo
                                                                Description</label>
                                                            <textarea class="form-control br-8" name="events_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['events_seo_description'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset class="border p-3">
                                                <legend class="float-none w-auto legend-title">Blogs</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="blogs_seo_title">Blogs Seo Title</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="blogs_seo_title"
                                                                value="{{ $settings['blogs_seo_title'] ?? '' }}"
                                                                placeholder="Enter Seo Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="blogs_seo_keywords">Blogs Seo
                                                                Keywords</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="blogs_seo_keywords"
                                                                value="{{ $settings['blogs_seo_keywords'] ?? '' }}"
                                                                placeholder="Enter Seo Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="blogs_seo_description">Blogs Seo
                                                                Description</label>
                                                            <textarea class="form-control br-8" name="blogs_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['blogs_seo_description'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footers">
                                    <button class="btn btn-lg btn-primary" type="submit"><i
                                            class="fa-solid fa-rotate"></i> Update Setting</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.mainlogo').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.footerlogo').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.fav_icon').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.contact_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.banner_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.advertise_section_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.about_history_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.about_mission_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.about_vision_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.banner_section_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.about_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.course_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.faq_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.country_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.blog_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.service_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.contact_page_banner').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.about_section_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.about_section_image2').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.faq_section_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endsection
