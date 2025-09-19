<?php

namespace App\Filament\Resources\FacilityResource\Pages;

use App\Filament\Resources\FacilityResource;
use Filament\Resources\Pages\EditRecord;

class EditFacility extends EditRecord
{
    protected static string $resource = FacilityResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
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
