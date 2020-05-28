@extends('AdminPanel.layouts.app')
@section('content')
<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="margin-top:30px;" id="kt_content">
            <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
                        <div class="kt-portlet kt-portlet--height-fluid-">
                            <div class="kt-portlet__body">
                                <div class="kt-widget kt-widget--user-profile-4">
                                    <div class="kt-widget__head">
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__section">
                                                <a href="#" class="kt-widget__username">
                                                    Luca Doncic
                                                </a>
                                                <div class="kt-widget__action">
                                                    <a href="#" class="btn btn-icon btn-circle btn-label-facebook">
                                                        <i class="socicon-facebook"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-icon btn-circle btn-label-twitter">
                                                        <i class="socicon-twitter"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-icon btn-circle btn-label-google">
                                                        <i class="socicon-google"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget__body">
                                        <a href="#" class="kt-widget__item kt-widget__item--active">
                                            Profile Overview
                                        </a>
                                        <a href="#" class="kt-widget__item">
                                            Change Password
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                                    <div class="kt-portlet__head kt-portlet__head--noborder">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Trends
                                            </h3>
                                        </div>

                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                                        <div class="kt-widget4 kt-widget4--sticky">
                                            <div
                                                class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
                                                <div class="kt-widget4__item">
                                                    <div class="kt-widget4__img kt-widget4__img--logo">
                                                        <img src="assets/media/client-logos/logo3.png" alt="">
                                                    </div>
                                                    <div class="kt-widget4__info">
                                                        <a href="#" class="kt-widget4__title">
                                                            Phyton
                                                        </a>
                                                        <span class="kt-widget4__sub">
                                                            A Programming Language
                                                        </span>
                                                    </div>
                                                    <span class="kt-widget4__ext">
                                                        <span class="kt-widget4__number kt-font-danger">+$17</span>
                                                    </span>
                                                </div>
                                                <div class="kt-widget4__item">
                                                    <div class="kt-widget4__img kt-widget4__img--logo">
                                                        <img src="assets/media/client-logos/logo1.png" alt="">
                                                    </div>
                                                    <div class="kt-widget4__info">
                                                        <a href="#" class="kt-widget4__title">
                                                            FlyThemes
                                                        </a>
                                                        <span class="kt-widget4__sub">
                                                            A Let's Fly Fast Again Language
                                                        </span>
                                                    </div>
                                                    <span class="kt-widget4__ext">
                                                        <span class="kt-widget4__number kt-font-danger">+$300</span>
                                                    </span>
                                                </div>
                                                <div class="kt-widget4__item">
                                                    <div class="kt-widget4__img kt-widget4__img--logo">
                                                        <img src="assets/media/client-logos/logo2.png" alt="">
                                                    </div>
                                                    <div class="kt-widget4__info">
                                                        <a href="#" class="kt-widget4__title">
                                                            AirApp
                                                        </a>
                                                        <span class="kt-widget4__sub">
                                                            Awesome App For Project Management
                                                        </span>
                                                    </div>
                                                    <span class="kt-widget4__ext">
                                                        <span class="kt-widget4__number kt-font-danger">+$6700</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection