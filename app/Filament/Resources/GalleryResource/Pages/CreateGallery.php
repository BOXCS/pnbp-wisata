<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
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
