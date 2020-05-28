@extends('institute.layouts.app')
@section('content')
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>All Students
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button"><a
                        href="{{route('instituteStudentAdd')}}">
                        <i class="zmdi zmdi-plus"></a></i>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Student</strong> List</h2>
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
                                        <th>Media</th>
                                        <th>Roll No</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student as $student_details)
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded student-img"
                                                    src="{{asset('/images/institute/student/'.$student_details->photo)}}"
                                                    alt=""></span></td>
                                        <td>{{$student_details->rollno}}</td>
                                        <td>{{$student_details->name}}</td>
                                        <td>{{$student_details->batch_name}}</td>
                                        <td>{{$student_details->phone_no}}</td>
                                        <td><a href="{{route('instituteStudentEdit',$student_details->id)}}"><button
                                                    class="badge badge-success">Edit</button></a>
                                            <a href="{{route('instituteStudentDelete',$student_details->id)}}"><button
                                                    class="badge badge-primary">Delete</button></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection