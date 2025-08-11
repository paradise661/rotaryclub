<aside class="layout-menu menu-vertical menu bg-menu-theme" id="layout-menu">
    <div class="app-brand demo d-flex justify-content-center">
        <a class="app-brand-link" href="{{ route('dashboard') }}">
            <img src="{{ $settings['site_main_logo'] ? asset('admin/images/setting/' . $settings['site_main_logo']) : asset('admin/images/logo.png') }}"
                alt="logo" width="70px">
        </a>
        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" href="javascript:void(0);">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 mt-2">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        @if (Auth::user()->id == 1)
            <li class="menu-item {{ Request::segment(2) == 'users' ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.users.index') }}">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Analytics">Manage Users</div>
                </a>
            </li>
        @endif

        <!-- CMS -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">CMS</span></li>
        <!-- Cards -->

        {{-- <li class="menu-item {{ Request::segment(2) == 'services' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.services.index') }}">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Basic">Services</div>
            </a>
        </li> --}}

        <li class="menu-item {{ Request::segment(2) == 'achievements' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.achievements.index') }}">
                <i class="menu-icon tf-icons bx bxl-product-hunt"></i>
                <div data-i18n="Basic">Projects</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'faqs' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.faqs.index') }}">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="Basic">Faqs</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'galleries' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.galleries.index') }}">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="Basic">Gallery</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'awards' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.awards.index') }}">
                <i class='menu-icon tf-icons bx bxs-award'></i>
                <div data-i18n="Basic">Awards</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'blogs' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.blogs.index') }}">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Basic">Blogs</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'events' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.events.index') }}">
                <i class='menu-icon tf-icons bx bxs-calendar-event'></i>
                <div data-i18n="Basic">Events</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'modals' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.modals.index') }}">
                <i class="menu-icon tf-icons bx bx-show-alt"></i>
                <div data-i18n="Basic">Popup Modal</div>
            </a>
        </li>

        {{-- <li class="menu-item {{ Request::segment(2) == 'downloads' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.downloads.index') }}">
                <i class="menu-icon tf-icons bx bx-download"></i>
                <div data-i18n="Basic">Downloads</div>
            </a>
        </li> --}}

        <li class="menu-item {{ Request::segment(2) == 'testimonials' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.testimonials.index') }}">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Basic">Testimonials</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'ourteams' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.ourteams.index') }}">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="Basic">Our Teams</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'messages' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.messages.index') }}">
                <i class="menu-icon tf-icons bx bx-message"></i>
                <div data-i18n="Basic">Messages</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'whychooseus' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.whychooseus.index') }}">
                <i class="menu-icon tf-icons bx bxs-select-multiple"></i>
                <div data-i18n="Basic">What we Do</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'partners' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.partners.index') }}">
                <i class="menu-icon tf-icons bx bxs-layer-plus"></i>
                <div data-i18n="Basic">Partners</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'adds' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.adds.index') }}">
                <i class='menu-icon tf-icons bx bx-devices'></i>
                <div data-i18n="Basic">Advertisements</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'members' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.members.index') }}">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
                <div data-i18n="Basic">Members</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'inquirypersons' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.inquirypersons.index') }}">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
                <div data-i18n="Basic">Inquiry Persons</div>
            </a>
        </li>

        <!-- General Settings  -->
        <li class="menu-item @if (Request::segment(2) == 'pages' ||
                Request::segment(2) == 'socialmedias' ||
                Request::segment(2) == 'sliders' ||
                Request::segment(2) == 'settings') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="General Setting">Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'sliders' ? 'active' : '' }}"
                        href="{{ route('admin.sliders.index') }}">
                        <div data-i18n="Accordion">Sliders</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'pages' ? 'active' : '' }}"
                        href="{{ route('admin.pages.index') }}">
                        <div data-i18n="Accordion">Pages</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'socialmedias' ? 'active' : '' }}"
                        href="{{ route('admin.socialmedias.index') }}">
                        <div data-i18n="Accordion">Social Medias</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'settings' ? 'active' : '' }}"
                        href="{{ route('admin.settings.index') }}">
                        <div data-i18n="Accordion">Global Settings</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
