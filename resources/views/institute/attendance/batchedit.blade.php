@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                @foreach($batch as $batch_details)
                @endforeach
                <h2 class="text">
                    {{$batch_details->batch_name}}
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
                                        <h2><strong></strong>Batch Details</h2>
                                    </div>
                                    <div class="body">
                                        <form action="{{route('instituteBatchEdit',$batch_details->id)}}" method="post">
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
                                                            placeholder="Batch Name"
                                                            value="{{$batch_details->batch_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="course_id"
                                                        value="{{old('course_id')}}">

                                                        @foreach($course_details as $course)
                                                        <option value="{{$course->id}}">
                                                            {{$course->course_name}}
                                                        </option>
                                                        @endforeach

                                                        <option value="">-- Course --</option>
                                                        @foreach($courses as $all_course)
                                                        <option value="{{$all_course->id}}">{{$all_course->course_name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="option_name"
                                                        value="{{old('option_name')}}">
                                                        <option value="{{$batch_details->option_name}}">
                                                            {{$batch_details->option_name}}</option>
                                                        <option value="">-- Coaching Option --</option>
                                                        <option value="Institute">Institute</option>
                                                        <option value="Online">Online</option>
                                                        <option value="At Home">At Home</option>
                                                        <option value="Others">Others</option>

                                                    </select>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="maximum_strength"
                                                            placeholder="Maximum Strength"
                                                            value="{{$batch_details->maximum_strength}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <select class="form-control show-tick" name="starting_month"
                                                        value="{{old('starting_month')}}">
                                                        <option value="{{$batch_details->starting_month}}">
                                                            {{$batch_details->starting_month}}</option>
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
                                            </div>
                                            <div class="row clearfix">

                                               
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="starting_year"
                                                            placeholder="Start year of batch"
                                                            value="{{$batch_details->starting_year}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="batch_time"
                                                            placeholder="Batch Time"
                                                            value="{{$batch_details->batch_time}}">
                                                    </div>
                                                </div>
                                            </div>
                                            @if($batch_details->status == 0)
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="checkbox m-t-20">
                                                        <input id="procheck8" type="checkbox" value="0"
                                                            name="status" checked>
                                                        <label for="procheck8">Completed</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="checkbox m-t-20">
                                                        <input id="procheck8" type="checkbox" value="1"
                                                            name="status">
                                                        <label for="procheck8">Completed</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                           

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