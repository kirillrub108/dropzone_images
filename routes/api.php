<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'posts', 'namespace' => 'App\Http\Controllers\Post'], function () {
    Route::group(['prefix' => 'images', 'namespace' => 'Image'], function () {
        Route::post('/', StoreController::class);
    });
    Route::post('/', StoreController::class);
    Route::get('/', IndexController::class);
});
