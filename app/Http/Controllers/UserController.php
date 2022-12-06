<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user(){
        return view('login');
    }

    public function registerpage(){
        return view('Register');
    }

    public function dashboard(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin#content');
        }else{
            return redirect()->route('user#content');
        }
    }
   

}
