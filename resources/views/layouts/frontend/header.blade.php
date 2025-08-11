<header class="main-header-three">
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="container">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__left">
                        <div class="main-menu-three__logo">
                            <a href="{{ route('home') }}"><img
                                    src="{{ $settings['site_main_logo'] ? asset('admin/images/setting/' . $settings['site_main_logo']) : asset('admin/images/logo.png') }}"
                                    alt="" style="width:100px; height:70px;object-fit:contain;"></a>
                        </div>
                    </div>
                    <div class="main-menu-three__main-menu-box">
                        <a class="mobile-nav__toggler" href="#"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="{{ route('home') }}">Home </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('events') }}">Events</a>
                            </li>
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>

                            <li class="dropdown">
                                <a href="#">Teams</a>
                                <ul class="shadow-box">
                                    <li><a href="{{ route('team.current_board') }}">Current Board</a>
                                    </li>
                                    <li><a href="{{ route('team.past_board') }}">Past Presidents</a>
                                    </li>
                                    <li><a href="{{ route('team.current_members') }}">
                                            Members Profile</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul class="shadow-box">
                                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                                    <li><a href="{{ route('awards') }}">Awards</a></li>
                                    <li><a href="{{ route('messages') }}">Messages</a></li>
                                    <li><a href="{{ route('galleries') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__btn-box">
                            <a class="main-menu-three__btn thm-btn" href="{{ route('become-member') }}"><span>Become a
                                    Member</span><i class="icon-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div>
</div>
