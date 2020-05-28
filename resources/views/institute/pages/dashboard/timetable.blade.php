@extends('institute.layouts.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Time Table
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
                                        <h2>Upload <strong> Time Table </strong> </h2>
                                    </div>
                                    <div class="body">
                                        <form action="{{route('instituteReport')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-8">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12">
                                                            <ul class="breadcrumb">
                                                                <lable class="m-r-20"></lable>
                                                                <input type="file" name="timetable" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                                                <span class="excelsize">(Upload only excel file)</span>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>

                                                   
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-4">
                                                    <button type="submit"
                                                        class="btn upload btn-raised btn-round btn-primary btn-upload">UPLOAD</button>
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