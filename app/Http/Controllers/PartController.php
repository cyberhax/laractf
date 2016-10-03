<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PartController extends Controller
{

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

	public function noticeboard(){
		return view('participant.n_a');
	}

	public function chal(){
		return view('participant.qlist');
	}

	public function danger(){
		return view('participant.danger');
	}
}
