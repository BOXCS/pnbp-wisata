<?php

namespace App\Filament\Pages;

use App\Models\Culture;
use Filament\Pages\Page;

class Budaya extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.budaya';

    public function getViewData(): array
    {
        return [
            'budayas' => Culture::all(),
        ];
    }
}
