<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*===================
========ADMIN======== 
=====================*/

/*==================
====FORM ADMIN======
====================*/

Route::match(['get', 'post'], 'Admin/createAdmin', "Admin/AdminController@createAdmin");
Route::get('admin/preguntas', "QuestionsController@show" );