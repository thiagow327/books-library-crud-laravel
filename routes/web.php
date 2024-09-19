<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookWebController;

Route::resource('books', BookWebController::class);
