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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::post('/addservice', [App\Http\Controllers\ServiceController::class, 'addService']);
Route::get('/addservice', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index']);