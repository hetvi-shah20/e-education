<!DOCTYPE html>
<html>


<!-- Mirrored from dreamguys.co.in/preadmin/school/light/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 10:34:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('institute/assets/img/favicon.png')}}">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{asset('institute/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('institute/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('institute/assets/css/style.css')}}">


    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
     <div class="main-wrapper">
         <div class="account-page">
            <div class="container">
                <h3 class="account-title text-white">Verification Code</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                    @if($errors->any())
						@include('errors.503')
					@endif
                        <form action="{{Route('otpverification')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group custom-mt-form-group">
								<input type="text"  name="otp" />
								<label class="control-label">Check Your Email for OTP</label><i class="bar"></i>
							</div>
                            
                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block account-btn" type="submit">Submit</button>
                            </div>
                            <div class="text-center">
                                <a href="{{Route('resendotp')}}">Resend OTP</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script type="text/javascript" src="{{asset('institute/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('institute/assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('institute/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('institute/assets/js/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('institute/assets/js/app.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
    @if(Session::has('notification'))
  
    var type = "{{ Session::get('notification.alert-type', 'info') }}";
    switch(type){
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
</body>


<!-- Mirrored from dreamguys.co.in/preadmin/school/light/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 10:34:02 GMT -->
</html>