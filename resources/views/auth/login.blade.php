
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="{{asset('dashboard/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('dashboard/assets/plugins/iconic/css/material-design-iconic-font.min.css')}}">
	<!-- bootstrap -->
	<link href="{{asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/css/pages/extra_pages.css')}}">
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('dashboard/assets/img/favicon.ico')}}" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">

				   @csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('dashboard/assets/img/logo-2.png')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                         @endif
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                         @endif
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
                    
					<div class="text-center p-t-30">
						<a class="txt1" href="{{route('register')}}">
							Register
						</a>
					</div>
					
					<div class="text-center p-t-20">
					
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{asset('dashboard/assets/plugins/jquery/jquery.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/js/pages/extra-pages/pages.js')}}"></script>
	<!-- end js include path -->
</body>

</html>