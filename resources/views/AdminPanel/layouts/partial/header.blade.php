<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
    <div class="kt-header__top">
        <div class="kt-container ">
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="index.html">
                        <img alt="Logo" src="{{asset('Admin_Panel/assets/media/logos/logo-8.png')}}"
                            class="kt-header__brand-logo-default" />
                        <img alt="Logo" src="{{asset('Admin_Panel/assets/media/logos/logo-8-inverse.png')}}"
                            class="kt-header__brand-logo-sticky" />
                    </a>
                </div>
            </div>
            <div class="kt-header__topbar">
                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
                        <span class="kt-header__topbar-username kt-visible-desktop">{{auth::user()->name}}</span>

                        <span
                            class="kt-header__topbar-icon kt-bg-brand kt-font-lg kt-font-bold kt-font-light kt-hidden">S</span>
                        <span class="kt-header__topbar-icon kt-hidden"><i
                                class="flaticon2-user-outline-symbol"></i></span>
                    </div>
                    <div
                        class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                        <!--begin: Head -->

                        <div class="kt-notification">
                            <a href="{{route('adminprofile')}}" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Profile
                                    </div>
                                    <div class="kt-notification__item-time">
                                        Account settings and more
                                    </div>
                                </div>
                            </a>
                            <a href="custom/apps/user/profile-3.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-hourglass kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Tasks
                                    </div>
                                    <div class="kt-notification__item-time">
                                        latest tasks and projects
                                    </div>
                                </div>
                            </a>
                            <div class="kt-notification__custom kt-space-between">
                                <a href="{{route('logout')}}" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign
                                    Out</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-header__bottom">
		<div class="kt-container  kt-container--fluid ">
			<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
			<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
				<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
					<ul class="kt-menu__nav ">
						<li class="default1"><a href="{{route('dashboard')}}" class="kt-menu__link kt-menu__toggle {{setActive(['admin/dashboard'])}}"><span class="kt-menu__link-text"  style="color: white;">Dashboard</span></a></li>
						<li class="default1"><a href="{{route('instituteregistration')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text" style="color: white;">Institute</span></a></li>
						<li class="default1"><a href="{{route('schoolregistration')  }}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text" style="color: white;">School</span></a></li>
						<li class="default1"><a href="{{route('contact')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text" style="color: white;">Contact</span></a></li>
						<li class="default1"><a href="{{route('enquiry')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text" style="color: white;">Enquiry</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>