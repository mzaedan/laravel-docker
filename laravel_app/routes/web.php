<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalloController;

Route::get('/', function () {
    echo "welcome to home page";
});

Route::get('/detail', function () {
    echo "welcome to detail page";
});

Route::get('/hallo', [HalloController::class, 'index']);