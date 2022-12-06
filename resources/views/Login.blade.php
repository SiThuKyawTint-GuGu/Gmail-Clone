{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/login/css/main.css')}}">
  <link rel="stylesheet" href="{{ asset('user/css/app.css') }}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('user/login/images/logo1.jpeg')}});">
					<span class="login100-form-title-1">
					</span>
				</div>

				<form class="login100-form validate-form" action="{{route('login')}}" method="POST">
          @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter username">
						<span class="focus-input100"></span>
            @error('email')
            <small class="text-danger">{{$message}}</small>
          @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
            @error('password')
            <small class="text-danger">{{$message}}</small>
          @enderror
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="{{route('register#page')}}" class="txt1">
								Signup
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="{{asset('user/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('user/login/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('user/login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('user/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('user/login/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('user/login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('user/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('user/login/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('user/login/js/main.js')}}"></script>

</body>
</html> --}}





@extends('main.main')
@section('content')

<section class="sign-in">
  <div class="container">
      <div class="signin-content">
          <div class="signin-image">
              <figure><img src="{{asset('user/login/images/signin-image.jpg')}}" alt="sing up image"></figure>
              <a href="{{route('register#page')}}" class="signup-image-link">Create an account</a>
          </div>

          <div class="signin-form">
              <h2 class="form-title">Sign up</h2>
              <form method="POST" action="{{route('login')}}" class="register-form" id="login-form">
                @csrf
                  <div class="form-group">
                      <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                      <input type="text" name="email" id="your_name" placeholder="Email"/>
                      @error('email')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                      <input type="password" name="password" id="your_pass" placeholder="Password"/>
                      @error('password')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                      <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                  </div>
                  <div class="form-group form-button">
                      <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                  </div>
              </form>
              <div class="social-login">
                  <span class="social-label">Or login with</span>
                  <ul class="socials">
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection