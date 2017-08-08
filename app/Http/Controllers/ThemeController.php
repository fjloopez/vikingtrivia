<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function setTheme()
    {
        if (request('q') === "inside"){
            $q = "inside";
            session()->put('theme', 'inside');
        } else {
            $q = "outside";
            session()->put('theme', 'outside');
        }
        return $q;
    }

}
