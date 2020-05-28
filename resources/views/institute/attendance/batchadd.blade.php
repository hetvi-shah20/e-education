@extends('institute.layouts.app')
@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add New Batch
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="tab-pane" id="Consultant">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong>Add</strong> Batch </h2>
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
                                                        <select name="course_id" id="course" class="form-control"
                                                            value="{{old('course')}}" required>
                                                            <option value="" selected disabled>Select</option>
                                                            @foreach($course as $key => $courses)
                                                            <option value="{{$key}}"> {{$courses}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                        <select name="demo" title="Select Option" selected>
                                                            <option class="demo"></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                name="maximum_strength" placeholder="Maximum Strength"
                                                                value="{{old('maximum_strength')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
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
                                                </div>
                                                <div class="row clearfix">


                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="starting_year"
                                                                placeholder="Start year of batch"
                                                                value="{{old('starting_year')}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="batch_time"
                                                                placeholder="Batch Time" value="{{old('batch_time')}}">
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
                <div class="tab-content m-t-10">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
$('#course').on('change', function() {
    var course_id = $(this).val();
    console.log(course_id);
    if (course_id) {
        // console.log(course_id);
        $.ajax({
            dataType: 'json',
            type: "GET",
            url: "{{url('get-option-list')}}?course_id=" + course_id,
            cache: false,
            success: function(res) {
                if (res) {
                    $(".demo").empty();
                    // console.log('hello in');
                    $.each(res, function(key, value) {
                        $(".demo").append('<option value="' + key + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#demo").empty();
                }
            }
        });
    } else {
        console.log(stateID);
        $("#demo").empty();
    }

});
</script>
@endsection