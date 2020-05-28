@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Student
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
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <center>
                                                        <div class="checkbox m-t-20">
                                                            <input id="myCheck" type="checkbox" value="1"
                                                                name="installment_status" onclick="myFunction()">
                                                            <label for="myCheck">Installment</label>
                                                        </div>
                                                    </center>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="number" style="display:none" id="text"
                                                            class="form-control" placeholder="No of Installment"
                                                            name="installment_count" value="{{old('installment')}}">
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true) {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}
</script>
@endsection