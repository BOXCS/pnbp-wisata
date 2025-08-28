<?php

namespace App\Providers;

use App\Models\Culture;
use App\Models\Facility;
use App\Models\GalleryCategory;
use App\Models\Packages;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('welcome', function ($view) {
            $cultures    = Culture::all();
            $categories  = GalleryCategory::with('images')->get();
            $packages    = Packages::all();
            $facilities  = Facility::all();

            // turunan untuk layout facility
            $imageFacilities = $facilities->filter(fn($f) => !empty($f->image))->take(3)->values();
            $textFacilities  = $facilities->filter(fn($f) => $f->type === 'description')->take(2)->values();

            $view->with(compact(
                'cultures',
                'categories',
                'packages',
                'facilities',
                'imageFacilities',
                'textFacilities',
            ));
        });
    }
}
