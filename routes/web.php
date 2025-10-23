<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
Route::post('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile.page');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
