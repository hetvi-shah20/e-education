@extends('institute.layouts.app')
@section('content')

<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Profile
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @foreach($profile_setup as $profile)
                @endforeach
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card social_widget2">
                            <div class="body data text-center">
                                <ul class="list-unstyled m-b-0">
                                    <li class="m-b-30">
                                        <i class="zmdi zmdi-thumb-up col-blue"></i>
                                        <h4 class="m-t-0 m-b-0">{{$profile->clg_name}}</h4>
                                        <span>Collage Name</span>
                                    </li>
                                    <li class="m-b-0">
                                        <i class="zmdi zmdi-comment-text col-red"></i>
                                        <h4 class="m-t-0 m-b-0">{{$profile->type}}&nbsp;({{$profile->exprience}} years)
                                        </h4>
                                        <span>Type</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="name facebook">
                                <ul class="list-unstyled m-b-0">
                                    <li class="m-b-25">
                                        <div class="progress-container">
                                            <span class="progress-badge">Passing Year</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                    <span class="progress-value">{{$profile->year}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="m-b-25">
                                        <div class="progress-container">
                                            <span class="progress-badge">Stream</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="15"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                                    <span class="progress-value">{{$profile->stream}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="m-b-25">
                                        <div class="progress-container">
                                            <span class="progress-badge">Job Profile</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="35"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                                    <span class="progress-value">{{$profile->jobprofile}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h5><span>Educational Details</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Facilities</strong></h2>
                            </div>
                            <div class="body">
                                <ul class="inbox-widget clearfix">

                                    @if ($profile->facilities_infrastrcture != "")
                                    @foreach(explode(',', $profile->facilities_infrastrcture) as $info)
                                    <li>
                                        <p class="facilities">{{$info}}</p>
                                    </li>
                                    @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Services</strong></h2>
                            </div>
                            <div class="std">
                                <h5>Coaching from {{$profile->standard_from}} to {{$profile->standard_to}}</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 element">
                                    <div class="std float-right">
                                        <h6>Board/University</h6>
                                        <div class="board">
                                            @foreach(explode(',', $profile->board_university) as $info)
                                            {{$info}}<br />
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 element">
                                    <div class="std float-left">
                                        <h6>Subjects</h6>
                                        <div class="board">
                                            @foreach(explode(',', $profile->subjects) as $info)
                                            {{$info}}<br />
                                            @endforeach
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

@endsection