@extends('user.master.main')
@section('body')


<div class="row gutters-sm  mt-5 pt-5">
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
          
            <div class="img mt-1 pt-5" style="width:250px">
                @if(Auth::user()->image ==null)
                <img src="{{asset('img/default_user.png')}}" class="rounded-circle" style="width:200px;height:200px;object-fit:cover" alt="">
                @else                            
                <img src="{{asset('storage/'.Auth::user()->image)}}" class="rounded-circle" style="width:200px;height:200px;object-fit:cover" alt="John Doe" />
                @endif
            </div>  

            <div class="mt-5">
              <h4>{{Auth::user()->name}}</h4>
              <p class="text-muted font-size-sm ">{{Auth::user()->address}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card mb-3 p-4">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{Auth::user()->name}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
             {{Auth::user()->email}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Phone</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{Auth::user()->phone}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Gender</h6>
            </div>
            <div class="col-sm-9 text-secondary">
             {{Auth::user()->gender}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{Auth::user()->address}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-12">
              <a class="btn btn-info " href="{{route('account#edit')}}">Edit</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>


@endsection