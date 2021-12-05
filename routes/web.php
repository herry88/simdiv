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

//rute
Route::get('hello', function () {
    return '<h1>Hello Laravel</h1>';
});

//rute category
Route::resource('category', App\Http\Controllers\CategoryController::class);

//rute tahun akademik
Route::resource('tahunakademik',App\Http\Controllers\TahunAkademikController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
