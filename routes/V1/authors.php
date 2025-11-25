<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\AuthorController;

Route::apiResource('authors', AuthorController::class);
Route::delete('soft-delete/{author}', [AuthorController::class, 'softDelete']);
Route::put('restore/{author}', [AuthorController::class, 'restore']);
Route::get('trashed', [AuthorController::class, 'trashed']);
