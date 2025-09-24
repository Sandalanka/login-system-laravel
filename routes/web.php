<?php
use App\Http\Controllers\UserController;
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

Route::post('register',[UserController::class,'register'])->name('singup');
Route::post('login',[UserController::class,'login'])->name('signin');
Route::get('signout',[UserController::class,'logout'])->name('signout')->middleware('auth');
