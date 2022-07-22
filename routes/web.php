<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\DateController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'checkUser']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/stamp', [StampController::class, 'index']);
Route::post('/stamp', [StampController::class, 'create']);

Route::get('/date', [DateController::class, 'index'])->middleware('auth');
Route::post('/date', [DateController::class, 'create']);


