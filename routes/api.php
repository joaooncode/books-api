<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(base_path('routes/V1/books.php'));
Route::prefix('v1')->group(base_path('routes/V1/authors.php'));
Route::prefix('v1')->group(base_path('routes/V1/genere.php'));
