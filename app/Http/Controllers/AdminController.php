<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function qlist(){
    	return view('admin.qbank');
    }
    public function ulist(){
    	return view('admin.ulist');
    }
    public function guide(){
    	return view('admin.guide');
    }
}
