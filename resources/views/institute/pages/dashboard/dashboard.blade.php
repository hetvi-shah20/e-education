<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 07:39:55 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: {{Auth::user()->name}} ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->

<link rel="stylesheet" href="{{asset('/institute/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/institute/assets/plugins/morrisjs/morris.css')}}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('/institute/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('/institute/assets/css/hm-style.css')}}">
<link rel="stylesheet" href="{{asset('/institute/assets/css/color_skins.css')}}">
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

<body class="theme-green index2">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="h-bars"></a>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">30min ago</span></span>
                                        <span class="message">There are many variations of passages</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">31min ago</span></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <span class="time">35min ago</span></span>
                                        <span class="message">There are many variations of passages</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <span class="time">35min ago</span></span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum random</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <span class="time">1hr ago</span></span>
                                        <span class="message">There are many variations of passages</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>                        
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify">
                <span class="heartbit"></span>
                <span class="point"></span>
            </div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="header">Department</li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-primary">
                                    <span class="progress-badge">Computer</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>                        
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                        </li>                            
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">Medical</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="progress-value">45%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">Art & Design</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                            <span class="progress-value">29%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                        </li>                            
                                    </ul>
                                </div>
                            </a>
                        </li>                    
                    </ul>
                </li>
                <li class="footer"><a href="javascript:void(0);">View All</a></li>
            </ul>
        </li>
        <li>
            <div class="input-group">                
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </li>        
        <li class="float-right">
            
            <a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>
<div class="menu-container">
    <div class="menu">
        <ul class="pullDown" style="background-color:#ff8ea2">
            <li><a href="javascript:void(0)"><i class="zmdi zmdi"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- Right Sidebar -->

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Pro. Team</h2></li>
                <li>
                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
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
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
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

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card profile-header">
                    <div class="body text-center">

                        @foreach($user_details as $details)
                        @endforeach
                        @if(empty($details->avtar))

                        <div class="profile-image"> <img src="{{asset('/images/institute/default.jpg')}}" alt=""> </div>
                        @else

                        <div class="profile-image"> <img src="{{asset('/images/institute/'.$details->avtar)}}" alt="">
                        </div>

                        @endif


                        <div>
                            <h4 class="m-b-0"><strong>{{Auth::user()->name}}</strong></h4>
                            <span class="job_post"></span>
                            <p><br></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-round">Follow</button>
                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                        </div>
                        <hr>
                        <ul class="list-unstyled">



                            <li>
                                <p><i class="zmdi zmdi-graduation-cap m-r-5"></i><strong>institute Mailid:
                                        {{$details->email}}</strong></p>
                            </li>
                            <li>
                                <p><i class="zmdi zmdi-phone m-r-5"></i><strong>Landline No:
                                        {{$details->landlineno}}</strong></p>
                            </li>
                            <li>
                                <p><i class="zmdi zmdi-label m-r-5"></i><strong>City: {{$details->city}}</strong></p>
                            </li>
                        </ul>
                        <hr>
                       
                    </div>
                </div>

            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">Educational
                                Qalification</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">services</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Facilities">Facilities</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#SocialMedia">Social Media</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <form method="post" action="{{Route('instituteDashboardstore1')}}">
                                {{csrf_field()}}
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="College Name"
                                                name="clg_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Year Of Passing"
                                                name="year">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Stream" name="stream">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <select class="form-group show-tick" name="type">
                                            <option value="">-- Type --</option>
                                            <option value="Exprienced">Exprienced</option>
                                            <option value="Fresher">Fresher</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <select class="form-group show-tick" name="exprience">
                                            <option value="">-- Year --</option>
                                            <option value="0">0 Year</option>
                                            <option value="1">1 Year</option>
                                            <option value="2">2 Year</option>
                                            <option value="5">5 Year</option>
                                            <option value="10">10+ Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group m-b-10">
                                            <textarea rows="4" class="form-control no-resize" name="jobprofile"
                                                placeholder="Job Profile&#10;Company Name &#10;Designation &#10;Roles & Responsibility"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>

                        <div class="tab-pane body" id="Facilities">
                            <form method="post" action="{{Route('instituteDashboardstore3')}}">
                                {{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-6">
                                        <div>
                                            <label>Facilities/Infrastrcture :</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck2" type="checkbox" name="facilities_infrastrcture[]"
                                                value="books">
                                            <label for="procheck2">Books</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck3" type="checkbox" name="facilities_infrastrcture[]"
                                                value="material">
                                            <label for="procheck3">Material [Hard & Soft] </label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck4" type="checkbox" name="facilities_infrastrcture[]"
                                                value="computer">
                                            <label for="procheck4">Computer</label>
                                        </div>
                                        <div class=" checkbox">
                                            <input id="procheck7" type="checkbox" name="facilities_infrastrcture[]"
                                                value="sitting arrangements">
                                            <label for="procheck7">Sitting Arrangements</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label> </label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck5" type="checkbox" name="facilities_infrastrcture[]"
                                                value="internet">
                                            <label for="procheck5">Internet</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck6" type="checkbox" name="facilities_infrastrcture[]"
                                                value="ac">
                                            <label for="procheck6">Ac</label>
                                        </div>
                                        <div class=" checkbox">
                                            <input id="procheck19" type="checkbox" name="facilities_infrastrcture[]"
                                                value="test">
                                            <label for="procheck19">Mounthly/Weekly Test</label>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane body" id="SocialMedia">
                            <form method="post" action="{{Route('instituteDashboardstore4')}}"
                                enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <h4 class="m-b-0"><strong>
                                                    <center><label>Social Media Accounts</label></center>
                                                </strong></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Website : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Website"
                                                    name="website">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-12">
                                        <div>
                                            <label>Facebook : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Facebook"
                                                    name="facebook">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Linkedin : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Linkedin"
                                                    name="linkedin">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Google : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Google"
                                                    name="google">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Twitter : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Twitter"
                                                    name="twitter">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Instgram : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Instgram"
                                                    name="instgram">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Youtube Channel : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="url" class="form-control" placeholder="Youtube"
                                                    name="youtube">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div>
                                            <label>Business card : </label>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="file" accept="image/jpeg,image/png,image/jpg"
                                                    id="profile-img" name="file">
                                                <img src="{{asset('/images/institute/default.jpg')}}"
                                                    id="profile-img-tag" width="200px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save Changes</button>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane body" id="Account">
                            <form method="post" action="{{Route('instituteDashboardstore2')}}">
                                {{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="col-lg-6 col-md-12">
                                            <select class="form-group show-tick" name="standard_from">
                                                <option value="">Choose standard from</option>
                                                <option value="1">1 </option>
                                                <option value="2">2 </option>
                                                <option value="3">3 </option>
                                                <option value="4">4 </option>
                                                <option value="5">5 </option>
                                                <option value="6">6 </option>
                                                <option value="7">7 </option>
                                                <option value="8">8 </option>
                                                <option value="9">9 </option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="First Year">First Year</option>
                                                <option value="Second Year">Second Year</option>
                                                <option value="Third Year">Third Year</option>
                                                <option value="Fourth Year">Fourth Year</option>
                                                <option value="Fifth Year">Fifth Year</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <select class="form-group show-tick" name="standard_to">
                                            <option value="">Choose standard to</option>
                                            <option value="1">1 </option>
                                            <option value="2">2 </option>
                                            <option value="3">3 </option>
                                            <option value="4">4 </option>
                                            <option value="5">5 </option>
                                            <option value="6">6 </option>
                                            <option value="7">7 </option>
                                            <option value="8">8 </option>
                                            <option value="9">9 </option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="First Year">First Year</option>
                                            <option value="Second Year">Second Year</option>
                                            <option value="Third Year">Third Year</option>
                                            <option value="Fourth Year">Fourth Year</option>
                                            <option value="Fifth Year">Fifth Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group m-b-10">
                                            <textarea rows="4" name="subjects" class="form-control no-resize"
                                                placeholder="Subjects&#10;(maths,science)&#10;(C,C++,Java)"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label>Boards/University :</label>
                                        </div>
                                        <div class=" checkbox">
                                            <input id="procheck8" type="checkbox" value="CBSC"
                                                name="board_university[]">
                                            <label for="procheck8">CBSC</label>
                                        </div>
                                        <div class=" checkbox">
                                            <input id="procheck10" type="checkbox" value="DPS"
                                                name="board_university[]">
                                            <label for="procheck10">Delhi Public School</label>
                                        </div>

                                        <div class=" checkbox">
                                            <input id="procheck12" type="checkbox" value="bacholar"
                                                name="board_university[]">
                                            <label for="procheck12">Bacholar</label>
                                        </div>

                                        <div class="checkbox">
                                            <input id="procheck14" type="checkbox" value="phd"
                                                name="board_university[]">
                                            <label for="procheck14">Doctrate [P.H.D]</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label></label>
                                        </div>
                                        <div class=" checkbox">
                                            <input id="procheck9" type="checkbox" value="GBSC"
                                                name="board_university[]">
                                            <label for="procheck9">GSCB</label>
                                        </div>
                                        <div class="checkbox">
                                            <input id="procheck11" type="checkbox" value="diploma"
                                                name="board_university[]">
                                            <label for="procheck11">Diploma</label>
                                        </div>

                                        <div class=" checkbox">
                                            <input id="procheck13" type="checkbox" value="master"
                                                name="board_university[]">
                                            <label for="procheck13">Masters</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob, Count To, Sparkline Js -->
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/charts/jquery-knob.js"></script>
<script src="assets/js/pages/index2.js"></script>
<script>
    /*global $ */
    $(document).ready(function() {
        "use strict";
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        //Checks if li has sub (ul) and adds class for toggle icon - just an UI
        
        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        
        $(".menu > ul > li").hover(function(e) {
            if ($(window).width() > 943) {
            $(this).children("ul").stop(true, false).fadeToggle(150);
            e.preventDefault();
            }
        });
        //If width is more than 943px dropdowns are displayed on hover    
        $(".menu > ul > li").click(function() {
            if ($(window).width() <= 943) {
            $(this).children("ul").fadeToggle(150);
            }
        });
        //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)
        
        $(".h-bars").click(function(e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
        //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)    
    });    
</script>    
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 07:39:56 GMT -->
</html>