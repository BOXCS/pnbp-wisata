<?php

namespace App\Filament\Resources\TravelResource\Pages;

use App\Filament\Resources\TravelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTravel extends CreateRecord
{
    protected static string $resource = TravelResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $this->applyFallback($data);
    }

    private function applyFallback(array $data): array
    {
        foreach (['name', 'description', 'price'] as $field) {
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
