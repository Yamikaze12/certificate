<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/index/read', [HomeController::class, 'read'])->name('read');
Route::get('/index/search', [HomeController::class, 'search'])->name('search');
// Route::get('/index', '\App\Http\Controllers\CertificateController@index')->name('index');
// Route::get('/update/{id}', '\App\Http\Controllers\CertificateController@edit')->name('edit');
// Route::post('/update/{id}', '\App\Http\Controllers\CertificateController@update')->name('update');
// Route::get('/delete/{id}', '\App\Http\Controllers\CertificateController@destroy')->name('delete');
// Route::get('/search/{id}', '\App\Http\Controllers\CertificateController@search')->name('search');
Route::resource('certificates',CertificateController::class, ['certificates' => ['show', 'edit','delete','search']]);
