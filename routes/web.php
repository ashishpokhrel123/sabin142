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
Route::get('/admin',[App\Http\Controllers\AdminController::class, 'adminPanel']);
Route::get('/addcategory', [App\Http\Controllers\AdminController::class, 'addsubCategory']);
Route::get('/addabout',[App\Http\Controllers\AdminController::class, 'addAbout']);
Route::get('/addservice', [App\Http\Controllers\AdminController::class, 'addService']);
Route::get('/addmember', [App\Http\Controllers\AdminController::class, 'addMember']);
Route::get('/addservice', [App\Http\Controllers\AdminController::class, 'addService'] );
Route::post('/addmember', [App\Http\Controllers\MemberController::class, 'addMember'] );
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::post('/addservice', [App\Http\Controllers\ServiceController::class, 'addService']);
Route::get('/service', [App\Http\Controllers\CategoryController::class, 'index']);
