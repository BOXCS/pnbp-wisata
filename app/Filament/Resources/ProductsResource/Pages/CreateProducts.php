<?php

namespace App\Filament\Resources\ProductsResource\Pages;

use App\Filament\Resources\ProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProducts extends CreateRecord
{
    protected static string $resource = ProductsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $this->applyFallback($data);
    }

    private function applyFallback(array $data): array
    {
        foreach (['name', 'type', 'description'] as $field) {
            $idValue = $data[$field]['id'] ?? null;

            if ($idValue) {
                foreach (['en', 'zh', 'es'] as $locale) {
                    if (empty($data[$field][$locale])) {
                        $data[$field][$locale] = $idValue;
                    }
                }
            }
        }

        return $data;
    }   
}
