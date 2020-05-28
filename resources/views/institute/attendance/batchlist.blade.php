@extends('institute.layouts.app')
@section('content')
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Batches
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <a href="{{route('instituteBatchAdd')}}"> <button
                        class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i></a>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Batch</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                        class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">2017 Year</a></li>
                                    <li><a href="javascript:void(0);">2016 Year</a></li>
                                    <li><a href="javascript:void(0);">2015 Year</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Batch Name</th>
                                        <th>Maximum</th>
                                        <th>Option</th>
                                        <th>Course</th>
                                        <th>Started At</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                        <th>status
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($batches as $batches_details)
                                    <tr>
                                        <td>{{$batches_details->batch_name}}</td>
                                        <td>{{$batches_details->maximum_strength}}</td>
                                        @if($batches_details->option_name == "Institute")
                                        <td class="homeoption">{{$batches_details->option_name}}</td>
                                        @elseif($batches_details->option_name == "Online")
                                        <td class="onlineoption">{{$batches_details->option_name}}</td>
                                        @elseif($batches_details->option_name == "At Home")
                                        <td class="studenthomroption">{{$batches_details->option_name}}</td>
                                        @elseif($batches_details->option_name == "Others")
                                        <td class="otheroption">{{$batches_details->option_name}}</td>
                                        @endif

                                        <td>{{$batches_details->course_name}}</td>
                                        <td>{{$batches_details->starting_month}},{{$batches_details->starting_year}}
                                        </td>
                                        <td>{{$batches_details->batch_time}}</td>
                                        <td><a href="{{route('instituteBatchEdit',$batches_details->id)}}"><button
                                                    class="badge badge-success">Edit</button></a></td>
                                        @if($batches_details->status == 1)
                                        <td><button data-toggle="modal" class="badge badge-danger">ON GOING</button>
                                        </td>
                                        @else
                                        <td><button data-toggle="modal" class="badge badge-success">Completed</button>
                                        </td>
                                        @endif

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                        class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                        class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection