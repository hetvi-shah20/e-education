@extends('institute.layouts.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Generate Report
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
                                        <h2>Choose <strong> Duration </strong>and <strong> Option </strong></h2>
                                    </div>
                                    <div class="body">
                                        <form action="{{route('instituteReport')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-8">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-12">
                                                            <ul class="breadcrumb">
                                                                <lable class="m-r-20">Start Date</lable>
                                                                <input type="date" name="startdate" required>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <ul class="breadcrumb">
                                                                <lable class="m-r-20">End Date</lable>
                                                                <input type="date" name="enddate" required>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12">

                                                            <lable class="m-r-20">Option</lable>
                                                            <select class="form-control show-tick" name="option"
                                                                value="{{old('option')}}" required>
                                                                <option value="">-- Choose one --</option>
                                                                <option value="1">Batch</option>
                                                                <option value="2">Student</option>
                                                                <option value="3">Attendance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-4">
                                                    <button type="submit"
                                                        class="btn btn-generate btn-raised btn-round btn-primary btn-generate">Generate</button>
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