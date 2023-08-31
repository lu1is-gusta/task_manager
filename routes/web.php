<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login/store', 'loginStore');
    Route::get('/register', 'register');
    Route::post('/register/store', 'registerStore');
    Route::get('/logout', 'logout')->middleware('auth');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/task/create', 'create')->middleware('auth');
    Route::post('/task/store', 'store')->middleware('auth');
    Route::get('/task/edit/{id}', 'edit')->middleware('auth');
    Route::put('/task/update/{id}', 'update')->middleware('auth');
    Route::get('/task/delete/{id}', 'delete')->middleware('auth');
});