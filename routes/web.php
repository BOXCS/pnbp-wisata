<?php

use App\Http\Controllers\CultureController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\UploadLinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/culture', [CultureController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/facility',    [FacilityController::class, 'katalog'])->name('facilities.index');
Route::get('/facility-more',    [FacilityController::class, 'katalog'])->name('facilities.katalog');    // Katalog
Route::get('/facility/{id}', [FacilityController::class, 'show'])->name('facilities.show');    // (opsional)
Route::get('/social', [UploadLinkController::class, 'index']);

Route::get('locale/{lang}',[LocaleController::class,'setLocale']);
