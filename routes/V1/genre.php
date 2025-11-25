<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\GenreController;

Route::apiResource('genre', GenreController::class);
