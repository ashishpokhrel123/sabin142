<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

  Route::post('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory']);
  Route::post('/addservice', [App\Http\Controllers\ServiceController::class, 'addService']);
  Route::get('/addservice', [App\Http\Controllers\CategoryController::class, 'index']);
  Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index']);
