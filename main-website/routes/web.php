<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\FPOController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ResourcesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('main_home');
Route::get('/about', [PagesController::class, 'about'])->name('main_about');
Route::get('/events', [EventsController::class, 'index'])->name('main_events');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('main_contact');
Route::get('/kheti-ke-sikandar', [FPOController::class, 'index'])->name('kks_home');
Route::get('/kheti-ke-sikandar/{episode}', [FPOController::class, 'single'])->name('fpo_single');
Route::get('/episodes', [EpisodesController::class, 'index'])->name('episodes_home');
Route::get('/publications', [ResourcesController::class, 'publications'])->name('main_publications');
Route::get('/gallery', [ResourcesController::class, 'gallery'])->name('main_gallery');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs_home');
Route::get('/faqs', [FAQsController::class, 'index'])->name('faqs_home');
Route::get('/blogs/search', [BlogsController::class, 'search'])->name('blogs_search');
Route::get('/member/{name}', [PagesController::class, 'member_single'])->name('member_single');
Route::fallback(function () {
    return view('theme02.errors.404');
});