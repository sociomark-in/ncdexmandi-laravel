<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('main_home');
Route::get('/about', [PagesController::class, 'about'])->name('main_about');
Route::get('/blogs', [PagesController::class, 'index'])->name('main_blogs');
