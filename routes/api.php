<?php

use App\Http\Controllers\API\V1\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('register', 'register');
        Route::post('login', 'login');

        Route::middleware('auth:sanctum')->group(function () {
            Route::get('me', 'me');
            Route::post('logout', 'logout');
        });
    });
});
