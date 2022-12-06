<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    // view 
    public function contentview($userid,$id){ 
        $thing = Email::where('id',$id)->get();
        $currentuserid = Auth::user()->id;
        $currentdata = User::where('id',$currentuserid)->get();
        $currentid = User::where('id',$userid)->get();
        return view('user.content.contentview',compact('thing','currentdata','currentid'));
    }
}
