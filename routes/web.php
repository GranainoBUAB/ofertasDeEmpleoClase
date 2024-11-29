<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

Route::get('/', [WorkController::class, 'index'])->name('home');
