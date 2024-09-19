<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookWebController;

Route::resource('book', BookWebController::class)->only([
    'index',
    'show',
    'store',
    'update',
    'destroy'
]);
