<?php

namespace App\Http\Controllers\User;

use App\Models\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function usercontent(){
        $currentmail = Auth::user()->email;
        $data = Email::orderBy('id','desc')
        ->where('sentusermail',$currentmail)
        ->get();
        return view('user.content.contenthome',compact('data'));
    }
}
