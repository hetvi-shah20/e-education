@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                @foreach($student as $student_details)
                @endforeach
                <h2 class="text">
                    {{$student_details->name}}
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="tab-content m-t-10">
                    <div class="tab-pane active" id="Permanent">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Basic & Educational</strong> Information </h2>
                                    </div>
                                    <div class="body">

                                        <form action="{{route('instituteStudentEdit',$student_details->id)}}"
                                            method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    @if($errors->any())
                                                    @include('errors.error')
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Name" value="{{$student_details->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Email" value="{{$student_details->email}}" readonly>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="rollno"
                                                            placeholder="Roll No" value="{{$student_details->rollno}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="phone_no"
                                                            placeholder="Phone No."
                                                            value="{{$student_details->phone_no}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" name="birthdate"
                                                            onfocus="(this.type='date')" placeholder="Date of Birth"
                                                            value="{{$student_details->birthdate}}">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="gender">
                                                        <option value="{{$student_details->gender}}">
                                                            {{$student_details->gender}}</option>
                                                        <option value="">-- Gender --</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="batch_id">
                                                        @foreach($batchname as $batch)
                                                        <option value="{{$batch->id}}">
                                                            {{$batch->batch_name}}
                                                        </option>
                                                        @endforeach
                                                        <option value="">-- Batch --</option>
                                                        @foreach($batches as $batches_name)
                                                        <option value="{{$batches_name->id}}">
                                                            {{$batches_name->batch_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Fees"
                                                            name="fees" value="{{$student_details->fees}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Duration"
                                                            name="duration" value="{{$student_details->duration}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" onfocus="(this.type='date')"
                                                            name="admissiondate" placeholder="Admission Date"
                                                            value="{{$student_details->admissiondate}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label>Photo: </label>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <input type="file" accept="image/jpeg,image/png,image/jpg"
                                                                id="profile-img" name="photo">
                                                            <img src="{{asset('/images/institute/student/'.$student_details->photo)}}"
                                                                id="profile-img-tag" width="200px" height="200px" />
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <button type="submit"
                                                        class="btn btn-raised btn-round btn-primary float-right">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-raised btn-round">Cancel</button>
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
    </div>
</section>
@endsection