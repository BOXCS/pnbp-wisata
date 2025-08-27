<?php

use App\Http\Controllers\CultureController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/culture', [CultureController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/facility', [FacilityController::class, 'index'])->name('facilities.index');
Route::get('/facility/{facility}', [FacilityController::class, 'show'])->name('facilities.show');
