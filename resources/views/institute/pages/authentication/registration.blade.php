<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Metronic | Line Tabs</title>
    <meta name="description" content="Custom line tabs examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('/admin/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/admin/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{asset('/admin/dist/assets/media/logos/favicon.ico')}}" />
    <script src="http://www.codermen.com/js/jquery.js"></script>


</head>

<body>

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="col-lg-12">
                            <!--begin::Portlet-->
                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                          Institute Registration
                                        </h3>
                                    </div>
                                </div>

                                <div class="kt-portlet__body">
                                    <ul class="nav nav-tabs  nav-tabs-line nav-tabs-line-success" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#home" role="tab"><i
                                                    class="la la-cloud-upload"></i> Basic Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#verification" role="tab"><i
                                                    class="la la-check-circle-o"></i>Verification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#pwdgeneration" role="tab"><i
                                                    class="la la-key"></i>Password Creation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#service" role="tab"><i
                                                    class="la la-suitcase"></i>Select Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><i
                                                    class="la la-user"></i>Profile Setup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab"><i
                                                    class="la la-spinner"></i>Submit and Review</a>
                                        </li>



                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="home" role="tabpanel">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            Set Up Your Basic Details
                                                        </h3>
                                                    </div>
                                                </div>

                                                <!--begin::Form-->
                                                <div class="col-lg-6 max-auto">
                                                </div>
                                                <form class="kt-form kt-form--label-right"
                                                    action="{{Route('instituteRegistration')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="kt-portlet__body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-6">
                                                                <label>Full Name:</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{old('name')}}"
                                                                    placeholder="Enter full name" required>
                                                                <span class="form-text text-muted">Please enter your
                                                                    full name</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>Email Address:</label>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="{{old('email')}}"
                                                                    placeholder="Enter Email Address" required>
                                                                <span class="form-text text-muted">Please enter your
                                                                    Email Address</span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions">
                                                            <div class="row">

                                                                <div class="col-lg-12 kt-align-right">
                                                                    <button type="submit" class="btn btn-success">Save
                                                                        and Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="verification" role="tabpanel">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            One Time Password
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mx-auto">
                                                </div>
                                                <!--begin::Form-->
                                                <form class="kt-form kt-form--label-right"
                                                    action="{{Route('otpverification')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="kt-portlet__body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-6 mx-auto">
                                                                <label>OTP:</label>
                                                                <input type="password" name="otp" class="form-control"
                                                                    placeholder="Enter OTP" data-toggle="password"
                                                                    required>
                                                                <span class="form-text text-muted">Please check your
                                                                    email for otp</span>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions">
                                                            <div class="row">

                                                                <div class="col-lg-12 kt-align-right">
                                                                    <button type="submit" class="btn btn-success">Save
                                                                        and Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="pwdgeneration" role="tabpanel">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            Generate Password
                                                        </h3>
                                                    </div>
                                                </div>


                                                <!--begin::Form-->
                                                <form class="kt-form kt-form--label-right"
                                                    action="{{Route('pwdgeneration')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="kt-portlet__body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-6">
                                                                <label>Password:</label>
                                                                <input type="password" class="form-control"
                                                                    name="password" placeholder="Enter Password"
                                                                    data-toggle="password" required>
                                                                <span class="form-text text-muted">Please Enter password
                                                                    with one capital and one digit</span>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <label>Confrim Password:</label>
                                                                <input type="password" class="form-control"
                                                                    name="password_confirmation"
                                                                    placeholder="Enter Confrim Password"
                                                                    data-toggle="password" required>
                                                                <span class="form-text text-muted">Please enter same
                                                                    password</span>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions">
                                                            <div class="row">

                                                                <div class="col-lg-12 kt-align-right">
                                                                    <button type="submit" class="btn btn-success">Save
                                                                        and Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="review" role="tabpanel">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            Hurray!!You are done now.
                                                        </h3>
                                                    </div>
                                                </div>

                                                <!--begin::Form-->


                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions">
                                                        <div class="row">

                                                            <div class="col-lg-12 kt-align-center">
                                                                <button type="submit"
                                                                        class="btn btn-success">We'll revert back you with in 48 hours</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end::Form-->
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="service" role="tabpanel">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            Types Of Institutes
                                                        </h3>
                                                    </div>
                                                </div>


                                                <!--begin::Form-->
                                                <form class="kt-form kt-form--label-right" action="{{Route('service')}}"
                                                    method="post">
                                                    {{csrf_field()}}
                                                    <div class="kt-portlet__body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-6">
                                                                <label>School:</label>
                                                                <div class="kt-checkbox-inline">
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="CBSC"
                                                                            name="institute_school[]"> CBSC
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="GBSC"
                                                                            name="institute_school[]" checked> GSCB
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="DPS"
                                                                            name="institute_school[]"> Delhi Public
                                                                        School
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6">
                                                                <label>college:</label>
                                                                <div class="kt-checkbox-inline">
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="diploma"
                                                                            name="institute_college[]"> Diploma
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="bacholar"
                                                                            name="institute_college[]"> Bacholar
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="masters"
                                                                            name="institute_college[]"> Masters
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="PHD"
                                                                            name="institute_college[]"> Doctorate
                                                                        [P.H.D]
                                                                        <span></span>
                                                                    </label>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label>Tuition:</label>
                                                                <div class="kt-checkbox-inline">
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="classes"
                                                                            name="institute_tuition[]"> Classes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="personal tuition"
                                                                            name="institute_tuition[]"> Personal
                                                                        Coaching
                                                                        <span></span>
                                                                    </label>


                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Enterance Exams:</label>
                                                                <div class="kt-checkbox-inline">
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="CAT"
                                                                            name="institute_enterance[]"> CAT
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="CMET"
                                                                            name="institute_enterance[]"> CMET
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Abroad Enterance Exams:</label>
                                                                <div class="kt-checkbox-inline">
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="IELTS"
                                                                            name="institute_abroad[]"> IELTS
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="kt-checkbox kt-checkbox--success">
                                                                        <input type="checkbox" value="TOFEL"
                                                                            name="institute_abroad[]"> TOFEL
                                                                        <span></span>
                                                                    </label>

                                                                </div>
                                                            </div>



                                                        </div>




                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions">
                                                            <div class="row">

                                                                <div class="col-lg-12 kt-align-right">
                                                                    <button type="submit" class="btn btn-success">Save
                                                                        and Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            Institute Profile Setup
                                                        </h3>
                                                    </div>
                                                </div>

                                                <!--begin::Form-->
                                                <form class="kt-form kt-form--label-right" action="{{Route('profile')}}"
                                                    method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="kt-portlet__body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-2 mx-auto">
                                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle"
                                                                    id="kt_user_avatar_3">
                                                                    <div class="kt-avatar__holder"
                                                                        style="background-image: url({{asset('admin/dist/assets/media/users/100_3.jpg')}})">
                                                                    </div>
                                                                    <label class="kt-avatar__upload"
                                                                        data-toggle="kt-tooltip" title=""
                                                                        data-original-title="Change avatar">
                                                                        <i class="fa fa-pen"></i>
                                                                        <input type="file" name="photo"
                                                                            accept=".png, .jpg, .jpeg" required>
                                                                    </label>
                                                                    <span class="kt-avatar__cancel"
                                                                        data-toggle="kt-tooltip" title=""
                                                                        data-original-title="Cancel avatar">
                                                                        <i class="fa fa-times"></i>
                                                                    </span>
                                                                </div>
                                                                <span class="form-text text-muted">Allowed file types:
                                                                    png, jpg, jpeg.</span>
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">

                                                            <div class="col-lg-6 ">
                                                                <label>Address:</label>
                                                                <textarea class="form-control" name="instituteaddress"
                                                                    id="exampleTextarea" rows="2"
                                                                    placeholder="Enter Address"
                                                                    value="{{old('instituteaddress')}}"
                                                                    required></textarea>
                                                                <span class="form-text text-muted">Please enter your
                                                                    Institute address</span>
                                                            </div>
                                                            <div class="col-lg-6 ">
                                                                <label for="exampleSelect2">State:</label>
                                                                <select name="state" id="state" class="form-control"
                                                                    value="{{old('state')}}" required>
                                                                    <option value="" selected disabled>Select</option>
                                                                    @foreach($states as $key => $state)
                                                                    <option value="{{$key}}"> {{$state}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <span class="form-text text-muted">Please select your
                                                                    state</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-6 ">
                                                                <label for="exampleSelect2">City:</label>
                                                                <select class="form-control" id="city" name="city"
                                                                    value="{{old('city')}}" required>
                                                                </select>
                                                                <span class="form-text text-muted">Please select your
                                                                    city</span>
                                                            </div>
                                                            <div class="col-lg-6 ">
                                                                <label>Institute Email Address:</label>
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{old('email')}}" id="exampleInputPassword1"
                                                                    placeholder="Enter Email Address" required>
                                                                <span class="form-text text-muted">Please enter your
                                                                    email address</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-6 ">
                                                                <label for="exampleSelect2">Contact No [Mo]:</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{old('mobileno')}}" name="mobileno"
                                                                    id="exampleInputPassword1"
                                                                    placeholder="Enter Contact No" required>
                                                                <span class="form-text text-muted">Please enter your
                                                                    mobile number</span>
                                                            </div>
                                                            <div class="col-lg-6 ">
                                                                <label>Landline No:</label>
                                                                <input type="number" class="form-control"
                                                                    value="{{old('landlineno')}}" name="landlineno"
                                                                    id="exampleInputPassword1"
                                                                    placeholder="Enter Landline No" required>
                                                                <span class="form-text text-muted">Please enter your
                                                                    landline no</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions">
                                                            <div class="row">

                                                                <div class="col-lg-12 kt-align-right">
                                                                    <button type="submit"
                                                                        class="btn btn-success">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
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


    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- end::Scrolltop -->



    <script type="text/javascript">
    $('#state').on('change', function() {
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-city-list')}}?state_id=" + stateID,
                success: function(res) {
                    if (res) {
                        $("#city").empty();
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="' + value + '">' + value +
                                '</option>');
                        });

                    } else {
                        $("#city").empty();
                    }
                }
            });
        } else {
            $("#city").empty();
        }

    });
    </script>
    <script>
    @if(Session::has('notification'))

    var type = "{{ Session::get('notification.alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
    }
    @endif
    </script>
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#22b9ff",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{asset('/admin/dist/assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/dist/assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/dist/assets/js/pages/crud/file-upload/dropzonejs.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('/admin/dist/assets/js/pages/crud/file-upload/ktavatar.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>







</body>


</html>