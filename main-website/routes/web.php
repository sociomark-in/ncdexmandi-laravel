<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PublicationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('main_home');
Route::get('/about', [PagesController::class, 'about'])->name('main_about');
Route::get('/blogs', [PagesController::class, 'index'])->name('main_blogs');
Route::get('/episodes', [EpisodesController::class, 'index'])->name('main_episodes');
Route::get('/publications', [PublicationsController::class, 'index'])->name('main_publications');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs_home');
Route::get('/blogs/search', [BlogsController::class, 'search'])->name('blogs_search');
