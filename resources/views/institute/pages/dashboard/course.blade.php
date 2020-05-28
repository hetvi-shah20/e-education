@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Courses info
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button" data-toggle="modal"
                    data-target="#myModal">
                    <i class="zmdi zmdi-edit"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="body">
                        @foreach($course_details as $course_info)
                        <div class="content-item">
                            <div class="icon">
                                <img src="{{asset('/images/edit-3-32.png')}}">
                            </div>
                            <div class="pic">
                                @if(empty($course_info->photo))

                                <div class="profile-image"> <img src="{{asset('/images/institute/girl.jpg')}}" alt="">
                                </div>
                                @else

                                <div class="profile-image"><img src="{{asset('/course/image/'.$course_info->photo)}}">
                                </div>

                                @endif


                            </div>
                        </div>
                        <h6>{{$course_info->course_name}}</h6>

                        <div class="table-responsive">
                            <table class="table table-hover m-t-20">
                                <tbody>
                                    <tr>
                                        <td>Subject</td>
                                        <td>{{$course_info->subject}}</td>
                                    </tr>
                                    <tr>
                                        <td>Standard</td>
                                        <td><strong class="col-blush">{{$course_info->standard}}</strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Details">Course
                                    Details</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Structure">Fee
                                    Structure</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gallery">Course
                                    Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="Details">
                        <div class="card">
                            <div class="body">
                                <h6>Course Details</h6>
                                <p>{{$course_info->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Gallery">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col">
                                        <h6>Course Gallery</h6>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <button class="btn btn- btn-icon btn-round float-right m-l-10" type="button"
                                            data-toggle="modal" data-target="#adddocument">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        @foreach($course_document as $document)
                                        <img src="{{asset('/images/institute/dddd.png')}}" alt=""
                                            class="img-fluid rounded m-b-30">
                                        <a href="/course/pdf/{{$document->document}}" download=""
                                            class="btn button myButton"><i class="zmdi zmdi-download"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        {{$document->document}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Structure">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col">
                                        <h6>Coaching Options</h6>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <button class="btn btn- btn-icon btn-round float-right m-l-10" type="button"
                                            data-toggle="modal" data-target="#addfees">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Options</th>
                                                <th>Fees</th>
                                                <th>Duration</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach($fees_details as $fees_info)
                                            <tr>
                                                <td>{{$fees_info->option_name}}</td>
                                                <td>{{$fees_info->fees}}</td>
                                                <td>{{$fees_info->duration}}</td>
                                                <td><button data-toggle="modal" data-target="#editfees"
                                                        data-id="{{$fees_info->id}}"
                                                        data-option="{{$fees_info->option_name}}"
                                                        data-fees="{{$fees_info->fees}}"
                                                        data-duration="{{$fees_info->duration}}"><i
                                                            class="zmdi zmdi-edit"></i></button>
                                                    <a href="{{Route('deleteoption',$fees_info->id)}}"><button> <i
                                                                class="zmdi zmdi-delete"></i></button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                        <tbody>
                                            <div class="col-lg-12">
                                                <ui>
                                                    <div>
                                                        <li> <label for="procheck15">Home/Institute</label>
                                                            <small><strong>[one to one coaching,Batch]</strong></small>
                                                        </li>
                                                    </div>
                                                    <div>
                                                        <li> <label for="procheck16">Driving to student's home</label>
                                                            <small><strong>[allow to 2 other student to join,pay for
                                                                    fuel]</strong></small></li>
                                                    </div>
                                                    <div>
                                                        <li> <label for="procheck17">Online trainning</label>
                                                            <small><strong>[high costing,avilable only at
                                                                    night]</strong></small></li>
                                                    </div>
                                                </ui>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- edit course modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" action="{{Route('instituteCourseupdate',$course_info->id)}}">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Course</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Course name" name="course_name"
                                    value="{{$course_info->course_name}}" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Standard" name="standard"
                                    value="{{$course_info->standard}}" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject"
                                    value="{{$course_info->subject}}" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control no-resize" placeholder="Description"
                                    name="description">{{$course_info->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control no-resize" placeholder="Refrence Websites"
                                    name="refrence_website">{{$course_info->refrence_website}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default btn-round waves-effect">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- add document modal -->
<div class="modal fade" id="adddocument" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{Route('instituteCourseDocument',$course_info->id)}}" method="post"
                enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Document</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <lable>Document <small><strong>[You can upload .pdf,.docx,.txt files]</small></strong>
                                </lable>
                                <input type="file" name="document" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default btn-round waves-effect">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add fees -->
<div class="modal fade" id="addfees" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{Route('instituteCourseFee',$course_info->id)}}" method="post">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Your option</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label></label>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <select class="form-control" name="option_name"
                                                value="{{old('option_name')}}">
                                                <option value="">-- Coaching Option --</option>
                                                <option value="Institute">Institute</option>
                                                <option value="Online">Online</option>
                                                <option value="At Home">At Home</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix m-t-20 m-l-10 m-r-5">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="fees" placeholder="Fees"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="duration"
                                                placeholder="Duration" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default btn-round waves-effect">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- edit fees -->
<div class="modal fade" id="editfees" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{route('institutefeesupdate')}}" method="post">
                {{csrf_field()}}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Option</h4>
                </div>
                <div class="modal-body">

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id">
                                <select class="form-control" name="option_name" value="{{old('option_name')}}" required>
                                    <option value="">-- Coaching Option --</option>
                                    <option value="Institute">Institute</option>
                                    <option value="Online">Online</option>
                                    <option value="At Home">At Home</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row clearfix m-t-20">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="fees" name="fees" placeholder="Fees">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="duration" name="duration"
                                    placeholder="Duration">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default btn-round waves-effect">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach
@endsection

@section('scripts')
<script>
$('#editfees').on('show.bs.modal', function(event) {
    console.log('open');
    var button = $(event.relatedTarget)
    var option = button.data('option')
    var fees = button.data('fees')
    var duration = button.data('duration')
    var id = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #optionname').val(option)
    modal.find('.modal-body #fees').val(fees)
    modal.find('.modal-body #duration').val(duration)
    modal.find('.modal-body #id').val(id)
})
</script>
@endsection