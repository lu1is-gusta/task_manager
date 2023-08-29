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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::get('/register', 'register');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/task/create', 'create');
    Route::post('/task/store', 'store');
    Route::get('/task/edit/{id}', 'edit');
    Route::delete('/task/delete/{id}', 'delete');
});