<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/{name}', function ($name ) {
//     return "สวัสดี $name";

// });

// Route::get('/บวกเลข/{num1}/{num2}', function ($num1, $num2) {

//     return $num1+$num2;
// });

// Route::get('/showdeteil/{name1}/{num1}/{name2}' , function ($name1, $num1, $name2) {

//     return "สวัสดี $name1 คุณมีอายุ $num1 ปี และคุณพูดว่า '$name2'";
// });

Route::get('/', 'HomeController@index');
Route::get('/greeting/{name}', 'HomeController@greeting');
Route::get('/บวกเลข/{num1}/{num2}/{num3}', 'HomeController@calculator');

Route::get('/user', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/update/{id}', 'UserController@update');

Route::get('/todo', 'TodoController@index');
Route::get('/todo/show/{id}', 'TodoController@show');
Route::get('/todo/delete/{id}', 'TodoController@delete');
