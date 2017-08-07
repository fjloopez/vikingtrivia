<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function getLogout()
    {
//    	$this->auth->logout();
//    	return view('front.main.index');
        Auth::logout();
        Session::flush();
        return redirect('/vikingtrivia');
    }
}
