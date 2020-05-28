@extends('institute.layouts.app')
@section('content')

<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-12 col-md-5 col-sm-12">
               Welcome, <h2> {{Auth::user()->name}}
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-graduation-cap"></i> </div>
                                <div class="content">
                                    <div class="text">Courses</div>
                                    <h5 class="number count-to" data-from="0" data-to="{{$rowcount}}" data-speed="2500"
                                        data-fresh-interval="700">{{$rowcount}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-balance"></i> </div>
                                <div class="content">
                                    <div class="text">Batch</div>
                                    <h5 class="number count-to" data-from="0" data-to="{{$batchcount}}" data-speed="4000"
                                        data-fresh-interval="700">{{$batchcount}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-account-circle"></i> </div>
                                <div class="content">
                                    <div class="text">Students</div>
                                    <h5 class="number count-to" data-from="0" data-to="{{$studentcount}}" data-speed="2500"
                                        data-fresh-interval="700">{{$studentcount}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-label"></i> </div>
                                <div class="content">
                                    <div class="text">Attendance</div>
                                    <h5 class="number count-to" data-from="0" data-to="" data-speed="3000"
                                        data-fresh-interval="700"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($profile_setup as $profile)
                @endforeach
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card tasks_report">
                    <div class="card member-card bg-dark">
                        <div class="header">
                            @foreach($user_details as $details)
                            <h6 class="m-t-10 col-white">{{Auth::user()->name}}</h6>

                        </div>
                        @if(empty($details->avtar))
                        <div class="member-img">
                            <a href="javascript:void(0);">
                                <img src="{{asset('/images/institute/default.jpg')}}" class="rounded-circle"
                                    alt="profile-image">
                            </a>
                        </div>
                        @else
                        <div class="member-img">
                            <a href="javascript:void(0);">
                                <img src="{{asset('/images/institute/'.$details->avtar)}}" class="rounded-circle"
                                    alt="profile-image">
                            </a>
                        </div>
                        @endif

                        <div class="body">
                            <div class="col-12">
                                <ul class="social-links list-unstyled">
                                    @if($profile->facebook == 'NONE')
                                    <li><a title="facebook" href="javascript:void(0);"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    @else
                                    <li><a title="facebook" href="{{$profile->facebook}}"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    @endif
                                    @if($profile->linkedin == 'NONE')
                                    @else
                                    <li><a title="linkedin" href="{{$profile->linkedin}}"><i
                                                class="zmdi zmdi-linkedin"></i></a></li>
                                    @endif

                                    @if($profile->google == 'NONE')
                                    @else
                                    <li><a title="gmail" href="{{$profile->google}}"><i
                                                class="zmdi zmdi-google"></i></a></li>
                                    @endif

                                    @if($profile->twitter == 'NONE')
                                    @else
                                    <li><a title="twitter" href="{{$profile->twitter}}"><i
                                                class="zmdi zmdi-twitter"></i></a></li>
                                    @endif

                                    @if($profile->instgram == 'NONE')
                                    @else
                                    <li><a title="instagram" href="{{$profile->instgram}}"><i
                                                class="zmdi zmdi-instagram"></i></a></li>
                                    @endif

                                    @if($profile->youtube == 'NONE')
                                    @else
                                    <li><a title="youtube" href="{{$profile->youtube}}"><i
                                                class="zmdi zmdi-youtube-play"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <hr>
                            <strong class="text-muted">Email ID</strong>
                            <p class="col-white">{{$details->email}}</p>
                            <strong class="text-muted">Phone</strong>
                            <p class="col-white">{{$details->mobileno}}</p>
                            <hr>
                            <strong class="text-muted">Address</strong>
                            <address class="col-white">{{$details->address}}</address>
                            <hr>
                            <!-- <strong class="text-muted">website</strong>
                            <address class="col-white"></address> -->
                            <strong class="text-muted">More Information</strong>
                            <ul class="social-links list-unstyled">
                                <li><a title="More information" href="{{route('instituteProfilesetup')}}"><i class="zmdi zmdi-more"></i></a></li>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection