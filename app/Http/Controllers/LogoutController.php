<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){

		Session::destroy();

   		protected $redirectTo = '/login.blade.php';

    }
}
