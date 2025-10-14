<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;
use Spatie\Translatable\HasTranslations;

class Packages extends Model
{
    use HasTranslations;

    protected $fillable = ['name', 'description', 'price'];

    public $translatable = ['name', 'description', 'price'];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'price' => 'array',
    ];

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(function () {
            $locale = app()->getLocale();
            $prices = $this->price ?? [];

            // Pastikan selalu array
            if (!is_array($prices)) {
                $prices = ['id' => $prices];
            }

            $value = $prices[$locale] ?? $prices['id'] ?? null;

            if ($value === null || $value === '') {
                return '-';
            }

            return match ($locale) {
                'en' => '$ ' . number_format((float) $value, 2),
                'zh' => '¥ ' . number_format((float) $value, 2),
                'es' => '€ ' . number_format((float) $value, 2),
                default => 'Rp ' . number_format((float) $value, 0, ',', '.'),
            };
        });
    }



    public function images(): HasMany
    {
        return $this->hasMany(PackageImage::class, 'package_id');
    }

    public function getTranslated(string $field, string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        $value = $this->getTranslation($field, $locale);

        if ($value) return $value;

        return $this->getTranslation($field, 'id')
            ?? collect($this->getTranslations($field))->first();
    }
}
