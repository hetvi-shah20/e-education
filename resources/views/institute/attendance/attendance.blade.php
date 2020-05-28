@extends('institute.layouts.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Students of {{$batch_name}}</h2>
                <small class="facilities blinking">Place Left : {{$can_add_more}}</small>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <ul class="breadcrumb float-md-right">
                    @foreach($student as $details)
                    <form method="post" action="{{route('saveattendance',$details->batch_id)}}">
                        {{csrf_field()}}
                        @endforeach
                        <!-- <li><i class="zmdi zmdi-calendar-note"></i></li> -->
                        <!-- <li class="today-date"><span id="date" name="date"></span></li> -->
                        <input type="date" name="date" required>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12">
                <div class="tab-content m-t-10">
                    <div class="tab-pane active" id="Permanent">
                        <div class="row clearfix">
                            @foreach($student as $student_details)

                            <div class="p-3">
                                <div class="card member-card"
                                    style="height:165px;width:120px;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="{{asset('/images/institute/student/'.$student_details->photo)}}"
                                                class="img-fluid rounded" alt="profile-image"
                                                style="height:50px;width:50px;">
                                        </div>
                                        <div style="padding-top:17px;">
                                            <span>{{$student_details->rollno}}</span>
                                        </div>

                                        <label>
                                            <input type="radio" name="attend[{{$student_details->id}}]" value="present">
                                            <img src="{{asset('/images/check-mark.png')}}">
                                        </label>
                                        <label>
                                            <input type="radio" name="attend[{{$student_details->id}}]" value="absent">
                                            <img src="{{asset('/images/x-mark.png')}}">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>
                @if(empty($student_details))

                @else
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-raised btn-round btn-primary float-left">Save</button>
                    </div>
                </div>
                @endif
            </div>

            </form>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
n = new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>
@endsection