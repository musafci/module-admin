<?php

use App\Modules\Customer\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('customer',CustomerController::class);