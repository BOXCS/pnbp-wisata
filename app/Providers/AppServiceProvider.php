<?php

namespace App\Providers;

use App\Models\Culture;
use App\Models\Facility;
use App\Models\GalleryCategory;
use App\Models\Packages;
use App\Models\Products;
use App\Models\UploadLink;
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

            $topTypes = Facility::select('type')
                ->whereNotNull('type')
                ->groupBy('type')
                ->orderByRaw('COUNT(*) DESC')
                ->limit(2)
                ->pluck('type');

            // Ambil semua facility dari 2 type tsb, lalu group by type
            $facilitiesByType = Facility::whereIn('type', $topTypes)
                ->orderBy('type')
                ->orderBy('name')
                ->get()
                ->groupBy('type');

            $uploadLinks = UploadLink::latest()->get();

            $view->with(compact(
                'cultures',
                'categories',
                'packages',
                'facilities',
                'imageFacilities',
                'facilitiesByType',
                'uploadLinks',
            ));

            $view->with('products', Products::all());
        });
    }
}
