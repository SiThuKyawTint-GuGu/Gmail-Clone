
@extends('user.master.main')
@section('body')

<form action="{{route('update#data',Auth::user()->id)}}" method="POST" class="mt-3 " enctype="multipart/form-data">
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
        <div class="card mb-3 p-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               <input type="text"  name="name" value="{{Auth::user()->name}}" class="form-control">
               @error('name')
               <small style="color: red">{{$message}}</small>
           @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text"  name="email"  value="{{Auth::user()->email}}" class="form-control">
                @error('email')
                <small style="color: red">{{$message}}</small>
            @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text "  name="phone"  value="{{Auth::user()->phone}}" class="form-control">
                @error('phone')
                <small style="color: red">{{$message}}</small>
            @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Photo</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="file" name="image" class="form-control @error('image') is-invalid  @enderror " >
                @error('image')
                <small style="color: red">{{$message}}</small>
            @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Gender</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <select class="form-control @error('gender') is-invalid   @enderror"  name="gender" id="">
                  <option value="">Chose your Gender</option>
                  <option value="male" @if (Auth::user()->gender == 'male') selected @endif>Male</option>
                  <option value="female" @if (Auth::user()->gender == 'female') selected @endif >Female</option>
                  </select>
                  @error('gender')
                  <small style="color: red">{{$message}}</small>
              @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text"  name="address"  value="{{Auth::user()->address}}" class="form-control">
                @error('address')
                <small style="color: red">{{$message}}</small>
            @enderror
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <button class="btn btn-info ">Update</button>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
   </form>


@endsection