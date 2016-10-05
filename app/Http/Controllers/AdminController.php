<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\q_bank;
use App\ques_bank;
use App\Http\Requests;
use DB;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function qlist(){
        //$qlist = ques_bank::orderBy('round_num')->select('id', 'ref', 'question', 'flag', 'points', 'round_num')->get();
        $qlist = DB::table('ques_bank')->orderBy('round_num')->select('id', 'ref', 'question', 'flag', 'points', 'round_num', 'title', 'category')->get();
        $i = 0 ;
    	return view('admin.qbank', compact('qlist','i'));
        //return $qlist;
    }
    public function ulist(){
        $userslist = User::orderBy('id')->select('id', 'name', 'email as user_email', 'a_p', 'role', 'org')->get();
        //DB::table('users')->select('id', 'name', 'email as user_email', 'role', 'org')->get(); pun boleh
    	return view('admin.ulist',compact('userslist'));
        //return $userslist; get all call data in json
    }
    public function guide(){
    	return view('admin.guide');
    }
}
