<?php

namespace App\Filament\Resources\CultureResource\Pages;

use App\Filament\Resources\CultureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCulture extends EditRecord
{
    protected static string $resource = CultureResource::class;

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

    private function applyFallback(array $data): array
    {
        foreach (['name', 'description'] as $field) {
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
