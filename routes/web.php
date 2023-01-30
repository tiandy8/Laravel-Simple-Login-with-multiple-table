<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'processLogin']);

Route::get('/login-teacher', [AuthController::class, 'loginTeacher'])->name('login.teacher')->middleware('guest');
Route::post('/login-teacher', [AuthController::class, 'processTeacher']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/home', function(){
    return "Selamat anda sudah login";
})->middleware('auth:teacher,web');
