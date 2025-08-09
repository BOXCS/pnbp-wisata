<?php

namespace App\Filament\Widgets;

use App\Models\Culture;
use App\Models\Facility;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\Package;
use App\Models\Packages;
use App\Models\Product;
use App\Models\Products;
// use App\Models\UpdateLink;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DashboardStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Cultures', Culture::count())
                ->description('Semua budaya yang tersimpan')
                ->icon('heroicon-o-globe-alt')
                ->color('success'),

            Card::make('Total Facilities', Facility::count())
                ->description('Fasilitas yang tercatat')
                ->icon('heroicon-o-building-office')
                ->color('info'),

            Card::make('Total Galleries', GalleryImage::count())
                ->description('Foto & media gallery')
                ->icon('heroicon-o-photo')
                ->color('warning'),

            Card::make('Total Packages', Packages::count())
                ->description('Paket wisata yang tersedia')
                ->icon('heroicon-o-briefcase')
                ->color('success'),

            Card::make('Total Products', Products::count())
                ->description('Produk lokal Arjasa')
                ->icon('heroicon-o-shopping-bag')
                ->color('info'),

            // Card::make('Update Links', UpdateLink::count())
            //     ->description('Link penting terbaru')
            //     ->icon('heroicon-o-link')
            //     ->color('warning'),
        ];
    }
}
