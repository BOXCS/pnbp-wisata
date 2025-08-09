<?php

namespace App\Filament\Pages;

use App\Models\Culture;
use App\Models\Facility;
// use App\Models\Gallery;
// use App\Models\Package;
// use App\Models\Product;
use App\Models\GalleryCategory;
use App\Models\Packages;
use App\Models\Products;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\TableWidget;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            DashboardStats::class,
            DataTrendChart::class,
            RecentCultures::class,
        ];
    }
}

// 1️⃣ Statistik jumlah data
class DashboardStats extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Cultures', Culture::count())
                ->description('Jumlah budaya')
                ->icon('heroicon-o-sparkles')
                ->color('success'),

            Card::make('Total Facilities', Facility::count())
                ->description('Jumlah fasilitas')
                ->icon('heroicon-o-building-office')
                ->color('primary'),

            Card::make('Total Galleries', GalleryCategory::count())
                ->description('Jumlah galeri')
                ->icon('heroicon-o-photo')
                ->color('info'),

            Card::make('Total Packages', Packages::count())
                ->description('Jumlah paket wisata')
                ->icon('heroicon-o-archive-box')
                ->color('warning'),

            Card::make('Total Products', Products::count())
                ->description('Jumlah produk')
                ->icon('heroicon-o-cube')
                ->color('danger'),
        ];
    }
}

// 2️⃣ Grafik tren data per bulan
class DataTrendChart extends ChartWidget
{
    protected static ?string $heading = 'Tren Penambahan Data per Bulan';
    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $months = collect(range(1, 12))->map(function ($month) {
            return Carbon::create(null, $month)->format('M');
        })->toArray();

        $cultureData = [];
        $packageData = [];

        foreach (range(1, 12) as $month) {
            $cultureData[] = Culture::whereMonth('created_at', $month)->count();
            // $packageData[] = Package::whereMonth('created_at', $month)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Cultures',
                    'data' => $cultureData,
                    'borderColor' => '#10B981',
                    'backgroundColor' => '#10B981',
                ],
                [
                    'label' => 'Packages',
                    'data' => $packageData,
                    'borderColor' => '#F59E0B',
                    'backgroundColor' => '#F59E0B',
                ],
            ],
            'labels' => $months,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

// 3️⃣ Tabel data terbaru
class RecentCultures extends TableWidget
{
    protected static ?string $heading = 'Budaya Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(Culture::query()->latest()->limit(5))
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama'),
                Tables\Columns\ImageColumn::make('image')->label('Gambar'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y'),
            ]);
    }
}
