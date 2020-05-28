@extends('institute.layouts.app')
@section('content')

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Student</strong> List</h2>
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
                                        <th>Fees</th>
                                        <th>Paid installment</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    @foreach($student as $student_details)
                                   <tr class="point" data-href="{{url('institute/installment/details',$student_details->id)}}">

                                        <td><span class="list-icon"><img class="rounded student-img"
                                                    src="{{asset('/images/institute/student/'.$student_details->photo)}}"
                                                    alt=""></span></td>
                                        <td>{{$student_details->rollno}}</td>
                                        <td>{{$student_details->name}}</td>
                                        <td>{{$student_details->batch_name}}</td>
                                        <td>{{$student_details->fees}}</td>
                                        <td></td>
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
@section('scripts')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded",() => {
            const rows = document.querySelectorAll("tr[data-href]");

            console.log('hello');

            rows.forEach(row => {
                row.addEventListener("click",() => {
                    window.location.href = row.dataset.href;
                });
            });
        });
    </script>

@endsection