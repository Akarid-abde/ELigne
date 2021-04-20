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

Route::get('/index', function () {
    return view('index');
});


Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')->name('home');




Route::get('/client', 'ClientController@index');
Route::get('/admin', 'AdminController@index');


Route::get('/pdf','PdfController@CnPdf')->name('CnPdf');



/*CN*/
Route::post('/CN','CnController@store');
Route::get('/CN/create','CnController@create');

Route::get('/pdf','CnController@CnPdf')->name('CnPdf');

Route::post('/login/custom', [
    'uses' => 'Auth\LoginController@login',
    'as'  => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function () {
   Route::get('/admin', function(){
        return view('/user/admin');
   })->name('admin');

   Route::get('/client', function(){
        return view('/user/client');
   })->name('client');
});


Route::get('/file/create','DocumentController@create');
Route::post('/file','DocumentController@store');
Route::get('/file','DocumentController@index');
Route::get('/file/{id}','DocumentController@show');
Route::get('/file/download/{file}','DocumentController@download');

Route::put('/update/{id}','ClientController@update');


//store fiche.
Route::post('/fiche/store','FicheController@store');

/*Route::get('/send-email', function () {
	$details = [
     'title' => 'Mail From abde Media',
     'body' => 'this is from testing verify email'
	];
	\Mail::to('abderrahim.akarid@gmail.com')->send(new \App\Mail\TestMail($details));
	echo 'Email Has been send';
});
*/