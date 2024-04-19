<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index']) -> name('home');
Route::get('/pages/page1', [PublicController::class, 'page1']) -> name('page1');
Route::get('/pages/page2', [PublicController::class, 'page2']) -> name('page2');
