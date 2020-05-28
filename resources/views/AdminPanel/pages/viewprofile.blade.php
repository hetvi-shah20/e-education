@extends('AdminPanel.layouts.app')
@section('content')

<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    @foreach($profile_details as $profile)
                    @endforeach
                    <!--begin:: Widgets/Applications/User/Profile3-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        @if(!empty($profile->avtar))
                                        <img src="{{asset('/images/institute/'.$profile->avtar)}}" alt="image">
                                        @else
                                        <img src="{{asset('/images/coachingclass.jpg')}}" alt="image">
                                        @endif
                                    </div>
                                    <div
                                        class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JM
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <a href="#" class="kt-widget__username">
                                                {{$profile->name}}
                                                @if($status == '1')
                                                <i id="tikmark" style="display:block" class="flaticon2-correct"></i>
                                                @else
                                                <i id="tikmark" style="display:none" class="flaticon2-correct"></i>
                                                @endif
                                            </a>
                                            <div class="kt-widget__action">
                                                @if($status == '1')
                                                <center><label class="switch">
                                                        <input class="toggle-class" type="checkbox" data-id="{{$id}}"
                                                            data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle" data-on="Active" data-off="InActive"
                                                            {{ $user->status ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </center>

                                                @elseif($status == '2')
                                                <center><label class="switch">
                                                        <input class="toggle-class" type="checkbox" data-id="{{$id}}"
                                                            data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle" data-on="Active" data-off="InActive"
                                                            {{ $user->status ? 'unchecked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </center>

                                                @else
                                                <center><label class="switch">
                                                        <input class="toggle-class" type="checkbox" data-id="{{$id}}"
                                                            data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle" data-on="Active" data-off="InActive"
                                                            {{ $user->status ? 'unchecked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </center>

                                                @endif
                                            </div>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="flaticon2-new-email"></i>{{$profile->email}}</a>
                                            <a href="#"><i class="flaticon2-calendar-3"></i>{{$name}} </a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>{{$profile->city}}</a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                {{$profile->address}}
                                            </div>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                {{$profile->mobileno}} , {{$profile->landlineno}}
                                            </div>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                @foreach($services as $service)
                                                {{$service->services}}
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-piggy-bank"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Earnings</span>
                                            <span class="kt-widget__value"><span>$</span>249,500</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Expances</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-pie-chart"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Net</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-file-2"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">73 Tasks</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-chat-1"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">648 Comments</span>
                                            <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <button type="button" data-toggle="modal" data-target="#myModal"
                                            class="btn btn-brand btn-sm btn-upper"
                                            data-whatever="{{$profile->email}}">Compose Mail</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($profile_setup as $profile_setups)
            @endforeach
            @if(!empty($profile_setups))
            <div class="row">
                <div class="col-lg-6">
                    <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Basic Information
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content"
                                            role="tab">
                                            Educational Qualification
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content"
                                            role="tab">
                                            Other
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="kt_widget4_tab1_content">
                                    <div class="kt-widget4">
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_4.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Collage Name
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->clg_name}}
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_14.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Passing Year
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->year}}
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_11.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Stream
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->stream}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_1.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Type
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->type}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_5.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Job Profile
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->jobprofile}}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="kt_widget4_tab2_content">
                                    <div class="kt-widget4">
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_2.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Standard From
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->standard_from}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_13.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Standard To
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->standard_to}}
                                                </p>
                                            </div>

                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_9.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Subjects
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->subjects}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_2.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Board or Univercity
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->board_university}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_8.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Facilities
                                                </a>
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->facilities_infrastrcture}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Social Media Information
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content2"
                                            role="tab">
                                            Links
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content2"
                                            role="tab">
                                            More
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="kt_widget4_tab1_content2">
                                    <div class="kt-widget4">
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_4.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Website
                                                </a>
                                                @if($profile_setups->website == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->website}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->website}}" class="kt-widget4__text"
                                                    target="_blank">
                                                    {{$profile_setups->website}}
                                                </a>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_14.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Facebook
                                                </a>
                                                @if($profile_setups->facebook == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->facebook}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->facebook}}" target="_blank"
                                                    class="kt-widget4__text">
                                                    {{$profile_setups->facebook}}
                                                    </p>
                                                    @endif
                                            </div>

                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_11.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    LinkedIn
                                                </a>
                                                @if($profile_setups->linkedin == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->linkedin}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->linkedin}}" target="_blank"
                                                    class="kt-widget4__text">
                                                    {{$profile_setups->linkedin}}
                                                </a>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_1.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Google
                                                </a>
                                                @if($profile_setups->google == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->google}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->google}}" target="_blank"
                                                    class="kt-widget4__text">
                                                    {{$profile_setups->google}}
                                                </a>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_5.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Twitter
                                                </a>
                                                @if($profile_setups->twitter == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->twitter}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->twitter}}" target="_blank"
                                                    class="kt-widget4__text">
                                                    {{$profile_setups->twitter}}
                                                </a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="kt_widget4_tab2_content2">
                                    <div class="kt-widget4">
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_2.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">

                                                <a href="#" class="kt-widget4__username">
                                                    Instagram
                                                </a>
                                                @if($profile_setups->instgram == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->instgram}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->instgram}}" target="_blank"
                                                    class="kt-widget4__text">
                                                    {{$profile_setups->instgram}}
                                                </a>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__pic kt-widget4__pic--pic">
                                                <img src="assets/media/users/100_13.jpg" alt="">
                                            </div>
                                            <div class="kt-widget4__info">
                                                <a href="#" class="kt-widget4__username">
                                                    Youtube
                                                </a>
                                                @if($profile_setups->youtube == 'NONE')
                                                <p class="kt-widget4__text">
                                                    {{$profile_setups->youtube}}
                                                </p>
                                                @else
                                                <a href="{{$profile_setups->youtube}}" target="_blank"
                                                    class="kt-widget4__text">
                                                    {{$profile_setups->youtube}}
                                                </a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <center>
                <div class='nodetails'> NO OTHER DETAILS ARE AVAILAVBLE </div>
            </center>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>New Message</h5>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('mailsend')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Recipient:</label>
                        <input type="text" name="email" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Message:</label>
                        <textarea name="mailbody" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Attachment:</label>
                        <input type="file"  class="form-control" name="file">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send message</button>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('javascript')
<script>
$(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');

        console.log(user_id);
        console.log(status);

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {
                'status': status,
                'user_id': user_id
            },
            success: function(data) {
                console.log(data.success)
            }

        });
        if (status == 1) {
            document.getElementById("tikmark").style.display = "block";
        } else {
            document.getElementById("tikmark").style.display = "none";
        }
    })
})


$('#myModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-body #recipient-name').val(recipient)
})
</script>
@endsection