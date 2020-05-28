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
    <section class="content profile-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    @foreach($student_details as $student_info)
                    @endforeach
                    @foreach($batch_details as $batch_info)
                    @endforeach
                    @foreach($course_details as $course_info)
                    @endforeach
                    @foreach($installment_details as $installment_info)
                    @endforeach
                    @foreach($profile_setup as $profile_setup_info)
                    @endforeach
                    <h2>Invoice of <span class="text">{{$student_info->name}}</span>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="float-md-right">
                        <button onclick="printDiv('printableArea')"
                            class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i
                                class="zmdi zmdi-print"></i></button>
                    </ul>
                </div>
            </div>
        </div>
        <div id="printableArea">
            <div class="container-fluid ">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <div align="center">
                                    @foreach($user_details as $user_info)
                                    @endforeach
                                    <h2><strong>{{auth::user()->name}}</strong></h2>
                                    <hr>
                                    <p><strong> {{$user_info->address}}</strong><br>
                                        <strong> Phone:{{$user_info->mobileno}},
                                            {{$user_info->landlineno}}<strong><br>
                                                @if(empty($profile_setup_info->website))
                                                @else
                                                <strong> {{$profile_setup_info->website}}</p></strong>
                                    @endif
                                </div>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card" id="details">
                                            <div class="body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                                                        <p class="m-b-0"><strong>Course : {{$course_info->course_name}}
                                                            </strong></p>
                                                        <p class="m-b-0"><strong>Batch : {{$batch_info->batch_name}}
                                                            </strong></p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                                        <p class="m-b-0"><strong>Date :
                                                            </strong><?php $todayDate = date("Y-m-d"); ?>{{$todayDate}}
                                                        </p>
                                                        <h6>
                                                            <p class="m-b-0 facilities">Student Name:
                                                                <strong>{{$student_info->name}}</p></strong>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="mt-40"></div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr class="text-center-row">
                                                                        <th>Payment No</th>
                                                                        <th>Installment Date</th>
                                                                        <th>Fee</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($installment_details as $installment)
                                                                    <tr class="text-center-row">
                                                                        <td>{{$payment_no++}}</td>
                                                                        <td>{{$installment->date}}</td>
                                                                        <td> &#x20b9;{{$installment->payment_amount}}
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <p class="m-b-0"><b>Sub-total:&#x20b9;{{$sum}}</b></p>
                                                        <h3 class="m-b-0 m-t-10">Remaining Fees &#x20a8; :
                                                            {{$installment->remaining_amount}}</h3>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function printDiv(divName) {
        console.log(divName);
        var printContents = document.getElementById(divName).innerHTML;
        console.log(divName);
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
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
</body>

</html>