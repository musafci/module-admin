<?php

use App\Modules\Customer\Http\Controllers\Api\V1\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::namespace('Admin')->group(function () {
    
Route::namespace('Api\V1')->group(function(){
    Route::group(['prefix' => 'admin'], function () {
        Route::apiResource('customer', CustomerController::class);
    });
});