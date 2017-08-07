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

Route::get('admin/preguntas', 'admin\QuestionsController@index' );
Route::get('admin/pregunta/{id}', 'admin\QuestionsController@showById' );
Route::get('admin/categoria', 'admin\CategoryController@show');



/*===================
========FRONT========
=====================*/

Route::get('vikingtrivia', function(){
   return view('/front/main/index');
});

Route::get('vikingtrivia/home', 'HomeController@index');

Route::get('vikingtrivia/logout', 'LogoutController@getLogout');

Route::get('vikingtrivia/faqs', 'FaqsController@faqs');

Route::get('vikingtrivia/profile', 'ProfileController@profile');

Route::get('vikingtrivia/play', 'GameController@show');

Route::get('vikingtrivia/game-over', 'GameController@show');




/*===================
========JS========
=====================*/
Route::get('set-theme', 'ThemeController@setTheme');
Route::get('count-users', 'UserController@countUsers');




//Categoría
Route::get('categoria/{id}', 'CategoriaController@show');


//----------------------------------------


//, profile ( y aca adentro edit profile y my questions(y aca adentro edit y add) y edit avatar) 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
