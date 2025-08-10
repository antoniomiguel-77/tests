<?php

use App\Http\Controllers\IAController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/api/chat', [IAController::class, 'query']);
