<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return $this->applyFallback($data);
    }

    protected function applyFallback(array $data): array
    {
        $idValue = $data['name']['id'] ?? null;

        if ($idValue) {
            foreach (['en', 'zh', 'es'] as $locale) {
                if (empty($data['name'][$locale])) {
                    $data['name'][$locale] = $idValue;
                }
            }
        }

        return $data;
    }
}
