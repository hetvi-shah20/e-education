@extends('AdminPanel.layouts.app')
@section('content')
<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
        <div class="kt-content  kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
            id="kt_content">
            <div class="kt-container ">
                <div class="row" style="margin-top:20px;">
                    @foreach($registration_school as $register_institute)
                    <div class="col-lg-3">
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__body">
                                <div class="kt-widget kt-widget--user-profile-4">
                                    <div class="kt-widget__head">
                                        <div class="kt-widget__media">
                                            <img class="kt-widget__img kt-hidden-"
                                                src="{{asset('/images/coachingclass.jpg')}}" alt="image">
                                            <div
                                                class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                                JD
                                            </div>
                                        </div>
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__section">
                                                <a href="#" class="kt-widget__username">
                                                    {{$register_institute->name}}
                                                </a>
                                                <div class="kt-widget__button">
                                                    @if($register_institute->status == 1)
                                                    <span class="btn btn-label-primary btn-sm">Approved</span>
                                                    @elseif($register_institute->status == 2)
                                                    <span class="btn btn-label-info btn-sm">Pending</span>
                                                    @else
                                                    <span class="btn btn-label-warning btn-sm">Disapproved</span>
                                                    @endif
                                                </div>
                                                <div class="kt-widget__action">
                                                    <a
                                                        href="{{route('instituteregistrationprofile',$register_institute->id)}}">
                                                        <button type="button" class="btn btn-outline-primary">View
                                                            Profile</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection