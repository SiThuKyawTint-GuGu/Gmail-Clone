

@extends('user.master.main')
@section('body')

<form action="{{route('password#update',Auth::user()->id)}}" method="POST"class="mt-3 " enctype="multipart/form-data">
    @csrf
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <div class="img my-5 py-5">
                    @if(Auth::user()->image ==null)
                    <img src="{{asset('img/default_user.png')}}" class="rounded-circle" style="width:270px;height:270px;object-fit:cover;margin-bottom:20px" alt="">
                    @else                            
                    <img src="{{asset('storage/'.Auth::user()->image)}}" class="rounded-circle"  style="width:270px;height:270px;object-fit:cover;margin-bottom:20px" alt="John Doe" />
                    @endif
                </div>  
              <div class="mt-3"> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3 p-5">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Old Password</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               <input type="password"  name="oldpassword"  class="form-control @error('oldpassword') is-invalid @enderror">
               @error('password')
               <small style="color: red">{{$message}}</small>
           @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">New Password</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="password"  name="newpassword"  class="form-control @error('newpassword') is-invalid @enderror">
                @error('newpassword')
                <small style="color: red">{{$message}}</small>
            @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Comfirm Password</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="password"  name="comfirmpassword"   class="form-control @error('comfirmpassword') is-invalid @enderror">
                @error('comfirmpassword')
                <small style="color: red">{{$message}}</small>
            @enderror
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                  <button type="submit"  class="btn btn-info ">Change Password</button>
                </div>
              </div>
          </div>
        </div>

        @if (session('passworderror'))
        <div class="alert alert-warning alert-dismissible fade show my-3 " role="alert">
            <span class="text-danger">{{session('passworderror')}}</span>
        </div>    
    @endif

      </div>
    </div>
   </form>


@endsection