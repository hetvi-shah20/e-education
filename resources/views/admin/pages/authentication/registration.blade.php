<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
	<style type="text/css">
		html {
		overflow:hidden;
		}
		</style>
		<base href="../../../">
		<meta charset="utf-8" />
		<title>Registration</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
		<!--end::Fonts -->
		<link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css" />
		<!--begin::Page Custom Styles(used by this page) -->
		<link href="{{asset('/admin/dist/assets/css/pages/login/login-6.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{asset('/admin/dist/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('/admin/dist/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{asset('/admin/dist/assets/media/logos/favicon.ico')}}" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
					<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-login__wrapper">
							<div class="kt-login__container">
								<div class="kt-login__body">
									<div>
										<div class="kt-login__head">
											<h3 class="kt-login__title">Sign Up</h3>
											<div class="kt-login__desc">Enter your details to create your account:</div>
										</div>
										<div class="kt-login__head">
										@if($errors->any())
											@include('errors.503')
										@endif
										</div>
										<div class="kt-login__form">
											<form class="kt-form"action="{{Route('registration')}}" method="post">
												{{csrf_field()}}
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Fullname" name="name" value="{{old('name')}}">
												</div>
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" value="{{old('email')}}" >
												</div>
												<div class="form-group">
													<input  class="form-control" type="password" data-toggle="password" placeholder="Password" value="{{old('password')}}"  name="password">
												</div>
												<div class="form-group">
													<input class="form-control" type="password" data-toggle="password" placeholder="Confirm Password" value="{{old('password_confirmation')}}" name="password_confirmation">
												</div>
												
												<div class="form-group">
													<div class="g-recaptcha captcha" data-theme="light" name="captcha"  data-sitekey="6LcjZNEUAAAAAOEee9CMO5bD8UNN16tXNA5givuW"></div>
							                    </div>
											
													<div class="kt-login__actions">
													<button  class="btn btn-brand btn-pill btn-elevate">Sign Up</button>
													<button  class="btn btn-outline-brand btn-pill">Cancel</button>
												</div>
											</form>
											   <div class="kt-login__account">
													<span class="kt-login__account-msg">
														Already have an account ?
													</span>&nbsp;&nbsp;
													<a href="{{Route('login')}}" class="kt-login__account-link">Sign In!</a>
												</div>
										</div>
									</div>
								
								</div>
							</div>
						
						</div>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url({{asset('/admin/dist/assets/media/bg/e_education_8.jpg')}});">
					
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

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
						"danger": "#fd395"
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

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{asset('/admin/dist/assets/js/pages/custom/login/login-general.js')}}" type="text/javascript"></script>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>