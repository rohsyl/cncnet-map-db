<?php

use Illuminate\Support\Facades\Route;

Route::post('/upload', \App\Http\Controllers\Api\V1\Maps\UploadController::class);
