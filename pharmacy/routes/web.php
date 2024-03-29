<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/pharmacy/login');
});


Route::resource('users', App\Http\Controllers\RegisterController::class);
Route::resource('cutermer', App\Http\Controllers\CustermerController::class);
Route::resource('product', App\Http\Controllers\ProductController::class);
 //Route::post('/users',[RegisterController::class,'register']);

