<?php

namespace App\Filament\Resources\UploadLinkResource\Pages;

use App\Filament\Resources\UploadLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUploadLinks extends ListRecords
{
    protected static string $resource = UploadLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
