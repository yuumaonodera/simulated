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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
//Route::post('/login', [LoginController::class, 'create']);
//Route::get('/login', [LoginController::class,'check']);
Route::post('/login', [LoginController::class, 'checkUser']);
//Route::resource('/login', 'LoginController', ['only' => ['checkUser']]);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/', [StampController::class, 'index']);
Route::post('/', [StampController::class, 'create']);

Route::get('/date', [DateController::class, 'index']);
//Route::post('/date', [DateController::class, 'create']);

Route::get('/punchIn', [StampController::class, 'punchIn']);
Route::post('/punchOut', [StampController::class, 'punchOut']);

Route::get('/startRest', [StampController::class, 'startRest']);
Route::post('/endRest', [StampController::class, 'endRest']);

Route::get('/totalbreak', [StampController::class, 'dateindex']);




 


