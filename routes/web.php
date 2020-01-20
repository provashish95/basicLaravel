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
Route::get("/", function (){
    return  view('welcome');
});

Route::view('/user','user');
Route::post('/update', 'UserController@index');

Route::view('/company', 'company');
Route::get('/db', 'DatabaseController@index');
Route::get('/list','companies@list');
Route::get('pdf', 'PDFMaker@gen');




