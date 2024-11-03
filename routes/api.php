<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['middleware'=>'api','prefix'=>'auth'],function($router){

    Route::post('/register',[AuthController::class,'register']);

    Route::post('/login',[AuthController::class,'login']);

    Route::get('/profile',[AuthController::class,'profile']);

    Route::post('/logout',[AuthController::class,'logout']);

});
