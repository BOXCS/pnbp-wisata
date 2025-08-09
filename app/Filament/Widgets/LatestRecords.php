<?php

namespace App\Filament\Widgets;

use App\Models\Culture;
// use App\Models\Product;
use App\Models\Facility;
// use App\Models\Package;
use App\Models\GalleryCategory;
use App\Models\Packages;
use App\Models\Products;
use Filament\Widgets\Widget;

class LatestRecords extends Widget
{
    protected static string $view = 'filament.widgets.latest-records';
    protected int|string|array $columnSpan = 'full';

    public function getLatestData(): array
    {
        return [
            'Cultures'  => Culture::latest()->take(5)->get(),
            'Products'  => Products::latest()->take(5)->get(),
            'Facilities'=> Facility::latest()->take(5)->get(),
            'Packages'  => Packages::latest()->take(5)->get(),
            'Gallery' => GalleryCategory::latest()->take(5)->get(),
        ];
    }
}
