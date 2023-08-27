<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SeriesController::class, 'index'])->name('index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('create');
Route::post('/series/create/store', [SeriesController::class, 'store'])->name('store');

