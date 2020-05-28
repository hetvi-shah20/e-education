<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('/admin/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
        type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('/admin/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/admin/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('/admin/dist/assets/media/logos/favicon.ico')}}" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="index.html">
                <img alt="Logo" src="{{asset('/admin/dist/assets/media/logos/logo-6-sm.png')}}" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></div>
            <div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
            <div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></div>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            @include('admin.layouts.partial.sidebar')

            <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

                    <!-- begin:: Aside -->
                    <div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
                        <div class="kt-header__brand-logo">
                            <a href="index.html">
                                <img alt="Logo" src="{{asset('admin/dist/assets/media/logos/logo-6.png')}}" />
                            </a>
                        </div>
                    </div>

                    <!-- end:: Aside -->

                    <!-- begin:: Title -->
                    @include('admin.layouts.partial.header')

                    <!-- end:: Title -->

                    <!-- begin: Header Menu -->



                    <!-- end: Header Menu -->

                    <!-- begin:: Header Topbar -->

                    <!-- end:: Header Topbar -->
                </div>

                <!-- end:: Header -->
                @yield('content')

                <!-- begin:: Footer -->
                @include('admin.layouts.partial.footer')

                <!-- end:: Footer -->
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Quick Panel -->

    <!-- end::Quick Panel -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- end::Scrolltop -->

    <!-- begin::Sticky Toolbar -->

    <!-- end::Sticky Toolbar -->

    <!-- begin::Demo Panel -->


    <!-- end::Demo Panel -->

    <!--Begin:: Chat-->


    <!--ENd:: Chat-->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#22b9ff",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{asset('/admin/dist/assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/dist/assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->

    <script src="{{asset('/admin/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"
        type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
    </script>
    <script src="{{asset('/admin/dist/assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/admin/dist/assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
    <script>
    // @if(Session::has('notification'))

    // var type = "{{ Session::get('notification.alert-type', 'info') }}";
    // switch (type) {
    //     case 'info':
    //         toastr.info("{{ Session::get('notification.message') }}");
    //         break;

    //     case 'warning':
    //         toastr.warning("{{ Session::get('notification.message') }}");
    //         break;
    //     case 'success':
    //         toastr.success("{{ Session::get('notification.message') }}");
    //         break;
    //     case 'error':
    //         toastr.error("{{ Session::get('notification.message') }}");
    //         break;
    // }
    // @endif
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--end::Page Scripts -->
    @yield('javascript')
</body>

<!-- end::Body -->

</html>