<?php

use App\Http\Controllers\Api\User\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// auth

Route::controller(AuthController::class)->middleware(['api'])->name('.auth')->group(function(){
    Route::post('login' , 'login')->name('.login') ;
    Route::post('register' , 'register')->name('.register') ;
    Route::post('forgot-password' , 'forgot_password')->name('.forgot-password') ;
});
Route::get('logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum'])->name('.auth.logout');

// #auth 