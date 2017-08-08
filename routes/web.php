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

Route::get('admin/preguntas', 'Admin\QuestionsController@index');
Route::get('admin/pregunta/{id}', 'Admin\QuestionsController@showById');
Route::get('admin/pregunta/editar/{id}', 'Admin\QuestionsController@edit');
Route::post('admin/preguntas/actualizar', 'Admin\QuestionsController@update');
Route::get('admin/preguntas/crear','Admin\QuestionsController@create');
Route::post('admin/preguntas/guardar','Admin\QuestionsController@store');


Route::get('admin/categorias', 'Admin\CategoryController@show');
Route::get('admin/categoria/{id}', 'Admin\CategoryController@showById');
Route::get('admin/categoria/editar/{id}', 'Admin\CategoryController@edit');




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

Route::get('vikingtrivia/faqs', 'FaqsController@show');

Route::get('vikingtrivia/politicas-de-privacidad', 'PolicyController@show');

Route::get('vikingtrivia/contactanos', 'ContactController@show');

Route::get('vikingtrivia/addQuestion', 'Admin\QuestionController@create');


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
