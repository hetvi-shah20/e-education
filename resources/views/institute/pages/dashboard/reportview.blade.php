@extends('institute.layouts.app')
@section('content')

@if(!empty($batches))
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2> Batch Report
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Batch</strong> List</h2>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                    <ul class="float-md-right">
                        <button onclick="printDiv('printableArea')"
                            class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i
                                class="zmdi zmdi-print"></i></button>
                    </ul>
                </div>
                    </div>
                    <div class="body" id="printableArea">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Batch Name</th>
                                        <th>Maximum</th>
                                        <th>Option</th>
                                        <th>Started At</th>
                                        <th>Time</th>
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

                                        <td>{{$batches_details->starting_month}},{{$batches_details->starting_year}}
                                        </td>
                                        <td>{{$batches_details->batch_time}}</td>
                                       

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
@endif

@if(!empty($students))
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2> Student Report
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid " >
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Student</strong> List</h2>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                    <ul class="float-md-right">
                        <button onclick="printDiv('printableArea')"
                            class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i
                                class="zmdi zmdi-print"></i></button>
                    </ul>
                </div>
                    </div>
                    <div class="body" id="printableArea">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Admission Date</th>
                                        <th>Batch Name</th>
                                        <th>Roll No</th>
                                        <th>Phone No</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($students as $student_details)
                                    <tr>
                                    <td>{{$student_details->name}}</td>
                                    <td>{{$student_details->admissiondate}}</td>
                                    <td>{{$student_details->name}}</td>
                                    <td>{{$student_details->rollno}}</td>
                                    <td>{{$student_details->phone_no}}</td>
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
@endif
@section('scripts')
<script>
    function printDiv(divName) {
        console.log(divName);
        var printContents = document.getElementById(divName).innerHTML;
        console.log(divName);
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
@endsection
@endsection
