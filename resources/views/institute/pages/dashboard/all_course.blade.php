@extends('institute.layouts.app')
@section('content')
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Courses
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button" data-toggle="modal"
                    data-target="#largeModal">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            @foreach($course as $course_details)
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="body">
                    @if(empty($course_details->photo))
                        <div class="profile-image"> <img src="{{asset('/images/institute/girl.jpg')}}" alt=""> </div>
                        @else

                        <div class="profile-image image-size"><img src="{{asset('/course/image/'.$course_details->photo)}}">
                        </div>

                        @endif
                        <h6>{{$course_details->course_name}}</h6>
                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>{{$course_details->standard}}</td>
                                    </tr>
                                    <tr>
                                        <td>Students</td>
                                        <td><strong class="col-green"></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{url('institute/course',$course_details->id)}}"
                            class="btn btn-block btn-raised btn-default btn-simple btn-round waves-effect"
                            role="button">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<div class="modal fade" id="largeModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="{{Route('instituteCourse')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <h4 class="title" id="largeModalLabel">Add Course</h4>
                </div>

                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Course name" name="course_name"
                                    required>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Standard" name="standard" required>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control no-resize" placeholder="Description"
                                    name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control no-resize" placeholder="Refrence Websites"
                                    name="refrence_website"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <lable>Material </lable>
                                <span>[Upload pdf file only]</span>
                                <input type="file" name="material" accept=".pdf" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <lable>Photo</lable>
                                <input type="file" name="photo" accept="image/*" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect"
                                    data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>

@endsection