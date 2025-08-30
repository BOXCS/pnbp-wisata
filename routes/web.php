<?php

use App\Http\Controllers\CultureController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['locale'])->group(function () {  // Applying middleware here
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/culture', [CultureController::class, 'index']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::get('/facility', [FacilityController::class, 'index'])->name('facilities.index');
    Route::get('/facility/{facility}', [FacilityController::class, 'show'])->name('facilities.show');
    
    Route::post('/language', [LanguageController::class, 'switch'])->name('language.switch');
});