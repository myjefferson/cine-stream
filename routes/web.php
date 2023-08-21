<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/series', [SeriesController::class, 'index'])->name('index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('create');

