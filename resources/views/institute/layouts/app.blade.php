<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: {{Auth::user()->name}} ::</title>
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/institute/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/institute/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/institute/assets/plugins/morrisjs/morris.min.css')}}" />
    <link href="{{asset('/institute/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <script src="{{asset('/institute/assets/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{asset('/institute/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/institute/assets/css/color_skins.css')}}">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
</head>

<body class="theme-blush">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('/institute/assets/images/logo.svg')}}"
                    width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Top Bar -->
    @include('institute.layouts.partial.header')
    <!-- Left Sidebar -->
    @include('institute.layouts.partial.sidebar')
    <!-- Right Sidebar -->

    <!-- Chat-launcher -->
    <div class="chat-launcher"></div>
    <div class="chat-wrapper">
        <div class="card">
            <div class="header">
                <ul class="list-unstyled team-info margin-0">
                    <li class="m-r-15">
                        <h2>Pro. Team</h2>
                    </li>
                    <li>
                        <img src="{{asset('/institute/assets/images/xs/avatar2.jpg')}}" alt="Avatar">
                    </li>
                    <li>
                        <img src="{{asset('/institute/assets/images/xs/avatar3.jpg')}}" alt="Avatar">
                    </li>
                    <li>
                        <img src="{{asset('/institute/assets/images/xs/avatar4.jpg')}}" alt="Avatar">
                    </li>
                    <li>
                        <img src="{{asset('/institute/assets/images/xs/avatar6.jpg')}}" alt="Avatar">
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="chat-widget">
                    <ul class="chat-scroll-list clearfix">
                        <li class="left float-left">
                            <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">
                                <a class="name" href="javascript:void(0);">Alexander</a>
                                <span class="datetime">6:12</span>
                                <span class="message">Hello, John </span>
                            </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi,
                                    Alexander<br> How are you!</span> </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are
                                    many variations of passages of Lorem Ipsum available</span> </div>
                        </li>
                        <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle"
                                alt="">
                            <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span
                                    class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What
                                    are you doing?</span> </div>
                        </li>
                        <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle"
                                alt="">
                            <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span
                                    class="datetime">6:28</span> <span class="message">I would love to join the
                                    team.</span> </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello,
                                    <br>Michael</span> </div>
                        </li>
                    </ul>
                </div>
                <div class="input-group p-t-15">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-mail-send"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    @yield('content')

    </script>
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function() {
        readURL(this);
    });
    </script>
    <script>
    $('#editfees').on('show.bs.modal', function(event) {
        console.log('open');
        var button = $(event.relatedTarget)
        var option = button.data('option')
        var modal = $(this)
        modal.find('.modal-body #option').val(option)
    })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="{{asset('/institute/assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('/institute/assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('/institute/assets/bundles/morrisscripts.bundle.js')}}"></script>
    <script src="{{asset('/institute/assets/bundles/jvectormap.bundle.js')}}"></script>
    <script src="{{asset('/institute/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('/institute/assets/bundles/knob.bundle.js')}}"></script>
    <script src="{{asset('/institute/assets/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('/institute/assets/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('/institute/assets/plugins/autosize/autosize.js')}}"></script>
    <script src="{{asset('/institute/assets/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('/institute/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('/institute/assets/js/pages/index.js')}}"></script>
    @yield('scripts')
    <script>
    @if(Session::has('notification'))

    var type = "{{ Session::get('notification.alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
    }
    @endif
    </script>
</body>

</html>