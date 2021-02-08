<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresencesController;
use App\Http\Controllers\AuthenticationController;

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

Route::get('/',[AuthenticationController::class, 'index']);
Route::get('/presences',[PresencesController::class, 'index']);
Route::post('/login',[AuthenticationController::class,'login'])->name('login');;