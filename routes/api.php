<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'apiAuthCustom', 'prefix' => 'user'], function () {
    // Route::get('/test', function (Request $request) {
    //     return 'test';
    // });
    Route::post('/register', [UserController::class, 'register']);
    Route::get('/list', [UserController::class, 'getUsers']);
});
