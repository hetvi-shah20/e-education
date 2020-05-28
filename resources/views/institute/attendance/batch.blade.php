@extends('institute.layouts.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Batches of {{Auth::user()->name}}
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            @foreach($batches as $batch_details)
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card social_widget2">
                    <div class="body data text-center">
                        <ul class="list-unstyled m-b-0">
                            <li class="m-b-30">
                                <h6 class="m-t-0 m-b-0">{{$batch_details->batch_name}}</h6>
                                <span>Batch Name</span>
                            </li>
                            <li class="m-b-0">
                                <h6 class="m-t-0 m-b-0">{{$batch_details->course_name}}</h6>
                                <span>Course Name</span>
                            </li>
                        </ul>
                    </div>
                    <a href="{{url('institute/attendance',$batch_details->id)}}">
                        <div class="name facebook">
                            <ul class="list-unstyled m-b-30">
                                <li class="m-b-25">
                                    <div class="progress-container">
                                        <span class="progress-badge">No Of Students</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                <span class="progress-value">{{$batch_details->maximum_strength}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <h6><span class="optioname">{{$batch_details->option_name}}</span></h6>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection