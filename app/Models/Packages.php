<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Packages extends Model
{
    use HasTranslations;

    protected $fillable = ['name', 'description', 'price'];
    
    public $translatable = ['name', 'description'];

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

            $value = $prices[$locale] ?? $prices['id'] ?? null;

            if (! $value) {
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
}

