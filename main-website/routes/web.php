<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PublicationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('main_home');
Route::get('/about', [PagesController::class, 'about'])->name('main_about');
Route::get('/events', [PagesController::class, 'events'])->name('main_events');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('main_contact');
Route::get('/episodes', [EpisodesController::class, 'index'])->name('episodes_home');
Route::get('/publications', [PublicationsController::class, 'index'])->name('main_publications');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs_home');
Route::get('/blogs/search', [BlogsController::class, 'search'])->name('blogs_search');
Route::fallback(function () {
    return view('theme02.errors.404');
});