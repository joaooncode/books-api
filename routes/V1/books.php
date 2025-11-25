<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\BookController;

Route::apiResource('books', BookController::class);
