<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::resource('book', BookController::class)->only([
    'index', 'show', 'store', 'update', 'destroy'
]);
