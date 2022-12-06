<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContentController extends Controller
{
    public function admincontent(){
        return view('admin.content');
    }
}
