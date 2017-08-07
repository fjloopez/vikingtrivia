<?php

namespace App\Http\Controllers;

use App\User;


class UserController extends Controller
{
    public function countUsers()
    {
        return User::count();
    }


}
