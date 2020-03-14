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

// Auth::Routes(['login'=>True]);
// Auth::Routes(['logout'=>True]);
// Auth::Routes(['register'=>False]);
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::get('/trackerSubmit','Tracker@showname');

});
Route::group(['middleware'=>'adminauth','as'=>'adminauth.'],function(){
  Route::resource('/trackerSecond','SecondTrackerMaster');
 Route::get('/sortedData','SecondTrackerMaster@sortForm');
 Route::post('/sortedData2','SecondTrackerMaster@sortFormSearch');
 Route::get('/sortedDataView','SecondTrackerMaster@myview');


  //Auth::routes();
//   Route::get('auth/register', ['middleware'=>'adminauth', 'uses'=>'Auth\AuthController@getRegister']);
// Route::post('auth/register', ['middleware'=>'adminauth', 'uses'=>'Auth\AuthController@postRegister']);
});
