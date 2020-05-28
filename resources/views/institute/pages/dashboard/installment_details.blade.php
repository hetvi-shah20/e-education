@extends('institute.layouts.app')
@section('content')

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                @foreach($student_details as $student_info)
                @endforeach
                @foreach($batch_details as $batch_info)
                @endforeach
                @foreach($course_details as $course_info)
                @endforeach
                @foreach($installment_details as $installment_info)
                @endforeach
                <h2>Installment Details of <span class="text">{{$student_info->name}}</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Basic </strong> Detail</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-3">

                                <h6>Student Name</h6>
                                <p class="details-color">{{$student_info->name}}</p>

                            </div>
                            <div class="col-lg-3">

                                <h6>Course Name</h6>
                                <p class="details-color">{{$course_info->course_name}}</p>

                            </div>
                            <div class="col-lg-3">

                                <h6>Batch Name</h6>
                                <p class="details-color">{{$batch_info->batch_name}}</p>
                            </div>
                            <div class="col-lg-3">

                                <h6>Option</h6>
                                <p class="details-color"></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Payment </strong> Detail</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-3">
                                <h6>Total Fees</h6>
                                <p class="details-color">{{$student_info->fees}}</p>

                            </div>
                            <div class="col-lg-3">
                                <h6>Total Installment</h6>
                                <p class="details-color">{{$student_info->installment_count}}</p>

                            </div>
                            <div class="col-lg-3">
                                <h6>Paid Installment</h6>
                                <p class="details-color">{{$installment_count}}</p>


                            </div>
                            <div class="col-lg-3">
                                <h6>Paid Fees</h6>
                                @if($installment_count == 0)
                                <p class="details-color">0</p>
                                @else
                                <p class="details-color">{{$installment_info->payment_amount}}</p>
                                @endif
                            </div>

                        </div>
                        <div class="row clearfix">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr class="text-center-row">
                                            <th>Payment No</th>
                                            <th>Amount</th>
                                            <th>Remaining Amount</th>
                                            <th>Payment Date</th>
                                        </tr>
                                    </thead>
                                    @foreach($installment_details as $installment_info)
                                    @endforeach
                                    @if(empty($installment_info))
                                    <tbody>
                                        <tr class="text-center-row">
                                            <th>-</th>
                                            <th>-</th>
                                            <th>-</th>
                                            <th>-</th>
                                        </tr>

                                    </tbody>
                                    @else
                                    <tbody>
                                        @foreach($installment_details as $installment)
                                        <tr class="text-center-row">
                                            <td>{{$payment_no++}}</td>
                                            <td>{{$installment->payment_amount}}</td>
                                            <td>{{$installment->remaining_amount}}</td>
                                            <td>{{$installment->date}}</td>
                                        <tr>
                                            @endforeach
                                    </tbody>
                                    @endif


                                </table>
                            </div>
                        </div>
                        <div class="row clearfix">

                            <div class="align-self-end ml-auto">
                                <button type="button" id="getdate" class="btn btn-primary btn-round"
                                    onclick="myFunction()">Add Installment
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="nextdiv" style="display:none" class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong >Instllment </strong> Details</h2>
                    </div>
                    <div class="body">
                        <form action="{{route('instituteInstallmentDetails',$student_info->id)}}" method="post">
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        @if(empty($installment_info->remaining_amount))
                                        <input type="number" id="fees" data-fees="{{$student_info->fees}}"
                                            class="form-control" placeholder="Total Fees" name="total_fees"
                                            value="{{$student_info->fees}}">

                                        @else

                                        <input type="number" id="fees"
                                            data-fees="{{$installment_info->remaining_amount}}}}" class="form-control"
                                            placeholder="Total Fees" name="total_fees"
                                            value="{{$installment_info->remaining_amount}}">

                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="number" id="payment_amount" class="form-control"
                                            placeholder="Amount" name="payment_amount" value="{{old('payment_amount')}}"
                                            onkeyup="calculate()" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Remaining Amount"
                                            name="remaining_amount" value="{{old('remaining_amount')}}"
                                            id="remaining_amount">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input class="form-control" name="installment_date" onfocus="(this.type='date')"
                                            placeholder="Next Installment Date" value="{{old('installment_date')}}"
                                            required>
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="align-self-end ml-auto">
                                    <button type="submit" class="btn btn-primary btn-round" > View Invoice
                                    </button>
                                </div>
                            </div>
                        </form>

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
    
    document.getElementById("nextdiv").style.display = "block";
    document.getElementById("payment_amount").focus(); 
}



function calculate() {
    var total_fees = parseInt(document.getElementById("fees").value);
    var payment_amount = parseInt(document.getElementById("payment_amount").value);
    var remaining_amount = document.getElementById("remaining_amount");
    console.log(payment_amount);
    var remaining = total_fees - payment_amount;
    console.log(remaining);
    remaining_amount.value = remaining;
    console.log('done');


}

function myInvoice() {
    document.getElementById("invoice").style.display = "block";
}


</script>
@endsection