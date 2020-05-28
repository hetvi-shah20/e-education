<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i
                    class="zmdi zmdi-home"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Institute</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
            @foreach($user_details as $details)
                <ul class="list">
                    <!-- <li>
                        <div class="user-info">

                          
                            {!! QrCode::size(130)->generate($details); !!}

                            <div class="detail">
                                <h4>{{Auth::user()->name}}</h4>

                            </div>
                        </div>
                    </li> -->
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-home"></i><span>Profile</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('instituteProfile')}}">Profile</a></li>
                            <li><a href="{{route('instituteProfileEdit')}}">Edit Profile</a></li>
                            <li><a href="{{route('instituteProfilechangepassword')}}">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('instituteAllCourse')}}"><i
                                class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>

                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-device-hub"></i><span>Batch</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('instituteBatchList')}}">All Batches</a></li>
                            <li><a href="{{route('instituteBatchAdd')}}">Add Batch</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('instituteStudentList')}}">All Students</a></li>
                            <li><a href="{{route('instituteStudentAdd')}}">Add Students</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-check-all"></i><span>Attendance</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('instituteBatch')}}">Take Attendance</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('instituteReport')}}"><i class="zmdi zmdi-book-image"></i><span>Report</span>
                        </a></li>

                    <li><a href="{{route('instituteInstallment')}}"><i class="zmdi zmdi-broken-image"></i><span>Installment</span>
                        </a></li>
                    <li><a href="{{route('instituteTimetable')}}"><i class="zmdi zmdi-calendar"></i><span>Time Table</span>
                        </a></li>

                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href=""><img src="{{asset('/images/institute/'.$details->avtar)}}"
                                        alt="User"></a></div>
                            <div class="detail">
                                <h4></h4>
                            </div>

                        </div>
                    </li>
                    <li>

                        <small class="text-muted">Location: </small>
                        <p>{{$details->address}}</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>{{Auth::user()->email}}</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>{{$details->mobileno}}</p>
                        <hr>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i
                    class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush" class="active">
                            <div class="blush"></div>
                        </li>
                    </ul>
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round">Light Menu</button>
                    <button class="t-dark btn btn-default btn-round">Dark Menu</button>
                    <button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>
                </div>
               
               
            </div>
        </div>
        
    </div>
</aside>