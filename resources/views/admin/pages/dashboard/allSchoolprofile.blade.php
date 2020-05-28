@extends('admin.layouts.app')
@section('content')
<div class="kt-content  kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-container ">
        <div class="row">
            @foreach($registration_school as $register)
            <div class="col-lg-3">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">


                                    <img class="kt-widget__img kt-hidden-" src="{{asset('/images/coachingclass.jpg')}}"
                                        alt="image">
                                    <div
                                        class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JD
                                    </div>
                                </div>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="#" class="kt-widget__username">
                                            {{$register->name}}
                                        </a>
                                        <div class="kt-widget__button">
                                            @if($register->status == 1)
                                            <span class="btn btn-label-primary btn-sm">Approved</span>
                                            @else
                                            <button class="btn btn-label-success btn-sm">Approve</button>
                                            <button class="btn btn-label-warning btn-sm">Disapprove</button>
                                            @endif
                                        </div>
                                        <div class="kt-widget__action">
                                           <a href=""> <button type="button" class="btn btn-outline-primary">View Profile</button></a>
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
@endsection