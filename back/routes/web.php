<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    dd(333333) ;
    return view('welcome');
});


Route::controller(TestController::class)->group(function(){
    Route::get('test', TestController::class);
});