<?php

namespace App\Filament\Resources\UploadLinkResource\Pages;

use App\Filament\Resources\UploadLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUploadLink extends EditRecord
{
    protected static string $resource = UploadLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
