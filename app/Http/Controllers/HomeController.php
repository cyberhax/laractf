<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use bla22;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {   
        $admin_or_user = Auth::user()->a_p;
        // 1 = user, else = admin;
        if ($admin_or_user == 1){
            return view('admin.rconf');
        } else{
            return view('participant.prof');
        }
        
    }
}
