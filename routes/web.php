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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client', 'ClientController@index');
Route::get('/admin', 'AdminController@index');

/*Route::group([], function () {
   Route::get('/', 'HomeController@index')->name('home');
});*/

/*Route::get('/send-email', function () {
	$details = [
     'title' => 'Mail From abde Media',
     'body' => 'this is from testing verify email'
	];
	\Mail::to('abderrahim.akarid@gmail.com')->send(new \App\Mail\TestMail($details));
	echo 'Email Has been send';
});
*/