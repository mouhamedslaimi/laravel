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
//CvController
/*Route::get('cvs','CvController@index');
Route::get('cvs/create','CvController@create');
Route::post('cvs','CvController@store');
Route::get('cvs/{id}/edit','CvController@edit');
Route::put('cvs/{id}','CvController@update');
Route::delete('cvs/{id}','CvController@destroy');
*/
//CvController

Route::resource('cvs','CvController');
Route::get('/getexperiences/{id}','CvController@getExperiences');
Route::post('/addexperience','CvController@addExperience');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');