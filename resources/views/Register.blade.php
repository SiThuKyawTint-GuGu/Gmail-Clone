



@extends('main.main')
@section('content')

<section class="signup">
  <div class="container">
      <div class="signup-content">
          <div class="signup-form">
              <h2 class="form-title">Sign up</h2>
              <form action="{{route('register')}}" method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                      <input type="text" name="username" id="name" placeholder="Your Name"/>
                      @error('username')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="email"><i class="zmdi zmdi-email"></i></label>
                      <input type="email" name="email" id="email" placeholder="Your Email"/>
                      @error('email')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="Phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                      <input type="text" name="phone" id="name" placeholder="Your Phone"/>
                      @error('phone')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="Gender"><i class="zmdi zmdi-male-female material-icons-name"></i></label>
                      <select name="gender" class='form-control ms-4 border-0' style="width: 255px;" id="">
                          <option value=""><span>Choose Gender</span></option>
                          <option value="male">Male</option>
                          <option value="female">female</option>
                        </select>
                        @error('gender')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="Address"><i class="zmdi zmdi-map material-icons-name"></i></label>
                      <input type="text" name="address" id="name" placeholder="Your Address"/>
                      @error('address')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                      <input type="password" name="password" id="pass" placeholder="Password"/>
                      @error('password')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                      <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                      <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"/>
                      @error('password_confirmation')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                      <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                      <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                  </div>
                  <div class="form-group form-button">
                      <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                  </div>
              </form>
          </div>
          <div class="signup-image">
              <figure><img src="{{asset('user/login/images/signup-image.jpg')}}" alt="sing up image"></figure>
              <a href="{{route('user#route')}}" class="signup-image-link">I am already member</a>
          </div>
      </div>
  </div>
</section>


@endsection