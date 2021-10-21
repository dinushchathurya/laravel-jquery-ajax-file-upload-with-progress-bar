<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

Route::get('/', [FileUploadController::class, 'index']);
Route::post('/upload', [FileUploadController::class, 'upload']);
