@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>All Professors
                    <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Professors</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                    href="#Permanent">Information</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content m-t-10">
                    <div class="tab-pane active" id="Permanent">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Basic & Educational</strong> Information </h2>
                                    </div>
                                    <div class="body">

                                        <form action="{{route('instituteStudentAdd')}}" method="post"
                                            enctype="multipart/form-data">
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
                                                            placeholder="Name" value="{{old('name')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Email" value="{{old('email')}}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="rollno"
                                                            placeholder="Roll No" value="{{old('rollno')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="phone_no"
                                                            placeholder="Phone No." value="{{old('phone_no')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" name="birthdate"
                                                            onfocus="(this.type='date')" placeholder="Date of Birth"
                                                            value="{{old('birthdate')}}">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="gender"
                                                        value="{{old('gender')}}">
                                                        <option value="">-- Gender --</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="batch_id"
                                                        value="{{old('batch_id')}}">
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
                                                            name="fees" value="{{old('fees')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Duration"
                                                            name="duration" value="{{old('duration')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" onfocus="(this.type='date')"
                                                            name="admissiondate" placeholder="Admission Date"
                                                            value="{{old('admissiondate')}}">
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
                                                            <img src="{{asset('/images/institute/default.jpg')}}"
                                                                id="profile-img-tag" width="200px" />
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
                    <div class="tab-pane" id="Consultant">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Addtional</strong> Settings </h2>
                                    </div>
                                    <div class="body">
                                        <form action="{{route('instituteBatchAdd')}}" method="post">
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
                                                        <input type="text" class="form-control" name="batch_name"
                                                            placeholder="Batch Name" value="{{old('batch_name')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="course_id"
                                                        value="{{old('course_id')}}">
                                                        <option value="">-- Course --</option>
                                                        @foreach($course as $course_name)
                                                        <option value="{{$course_name->id}}">
                                                            {{$course_name->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="option_name"
                                                        value="{{old('option_name')}}">
                                                        <option value="">-- Coaching Option --</option>
                                                        <option value="Institute">Institute</option>
                                                        <option value="Online">Online</option>
                                                        <option value="At Home">At Home</option>
                                                        <option value="Others">Others</option>

                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="maximum_strength"
                                                            placeholder="Maximum Strength"
                                                            value="{{old('maximum_strength')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="starting_month"
                                                        value="{{old('starting_month')}}">
                                                        <option value="">--Start month of batch--</option>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="Septmber">Septmber</option>
                                                        <option value="october">october</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="starting_year"
                                                            placeholder="Start year of batch"
                                                            value="{{old('starting_year')}}">
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