<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::post('sendMessage', [IndexController::class, 'sendMessage']);