<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function countUsers()
    {
        $q = intval($_GET['q']);
        $count = MySQLDB::countUsers(Usuario::$table,Usuario::class);

        echo $count;
    }


}
