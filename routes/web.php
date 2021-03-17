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


Route::get('/pdf','PdfController@CnPdf')->name('CnPdf');
Route::get('/CN','CnController@index');


/*CN*/

Route::post('/CN/store','CnController@store');
Route::get('/pdf','CnController@CnPdf')->name('CnPdf');

Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as'  => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function () {
   Route::get('/home', function(){
        return view('home');
   })->name('home');

   Route::get('/client', function(){
        return view('/user/client');
   })->name('client');

});

/*Route::get('/send-email', function () {
	$details = [
     'title' => 'Mail From abde Media',
     'body' => 'this is from testing verify email'
	];
	\Mail::to('abderrahim.akarid@gmail.com')->send(new \App\Mail\TestMail($details));
	echo 'Email Has been send';
});
*/