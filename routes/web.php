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

Auth::routes();
//Auth::Routes(['register'=>False]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'userauth','as'=>'userauth.'],function(){
Route::resource('/trackerSubmit','Tracker');
//Route::get('/trackerSubmit','Tracker@showname');
Route::resource('/trackerSecond','SecondTrackerMaster');
});
