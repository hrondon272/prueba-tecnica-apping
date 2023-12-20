<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RemindersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::resource('user', UserController::class);
Route::resource('reminder', RemindersController::class);
Route::post('updateReminder/{user_id}', [UserController::class, 'updateReminder']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    Route::get('user', [UserController::class, 'index']);
});
