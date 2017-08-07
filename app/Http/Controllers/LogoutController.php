<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function getLogout()
    {
    	$this->auth->logout();
    	return view('front.main.index');
    }
}
