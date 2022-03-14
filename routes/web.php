<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('landingpage/profiles');
});

Route::get('/index' , 'SiswaController@index');

Route::get('/siswa/tambah' , 'SiswaController@tambah');

Route::get('/siswa/delet/{id}', 'SiswaController@delet');

Route::put('/siswa/store', 'SiswaController@store');

Route::get('/siswa/edit/{id}', 'SiswaController@edit');

Route::put('/siswa/update', 'SiswaController@update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses');