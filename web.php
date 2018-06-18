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

/*Route::get('login/', function () {
    return view('welcome');
});
*/
Route::get('login', 'Auth@index');


Route::get('contact_insert/', function () {
    return view('welcome');
});


Route::get('recorde_insert/', function () {
    return view('welcome');
});


Route::get('recorde_update/', function () {
    return view('welcome');
});


Route::get('category_insert/', function () {
    return view('welcome');
});


Route::get('blog_insert/', function () {
    return view('welcome');
});


Route::get('blog_update/', function () {
    return view('welcome');
});


Route::get('plans_insert/', function () {
    return view('welcome');
});


Route::get('user_info/', function () {
    return view('welcome');
});


Route::get('update_user_plofile/', function () {
    return view('welcome');
});


Route::get('user_evaluation_masta/', function () {
    return view('welcome');
});

Route::get('settlement_match/', function () {
    return view('welcome');
});

