<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\User\AccessController;
use App\Http\Controllers\Api\User\ProfileController;
use App\Http\Controllers\Api\User\UserController;
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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    // Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::post('/change-pass', [AuthController::class, 'changePassword']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'profile',
], function ($router) {
    Route::get('/', [ProfileController::class, 'userProfile']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'users',
], function ($router) {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('{id}', [UserController::class, 'show']);
    Route::put('{id}', [UserController::class, 'update']);
    Route::delete('{id}', [UserController::class, 'destroy']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'accessors',
], function ($router) {
    Route::get('/', [AccessController::class, 'index']);
    Route::post('/attach', [AccessController::class, 'attach']);
    Route::post('/detach', [AccessController::class, 'detach']);
});
