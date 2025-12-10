<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers Imports
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\API\ApiLoginController;


Route::post('/login', [ApiLoginController::class, 'login'])->name('api.login');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/invite', [InvitationController::class, 'store']);

