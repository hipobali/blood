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
Route::get('/register',[
   'uses'=>'registerController@getRegister',
   'as'=>'register'
]);
Route::get('/login',[
    'uses'=>'registerController@getLogin',
    'as'=>'login'
]);
Route::get('login_back',function (){
   return view('login');
});
Route::get('register_back',function (){
    return view('register');
});
