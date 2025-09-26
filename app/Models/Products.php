<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Products extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'name',
        'type',
        'description',
    ];

    protected $fillable = [
        'name',
        'type',
        'description',
        'image',
    ];

    public function getTranslated(string $field, string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        $value = $this->getTranslation($field, $locale);

        if ($value) return $value;

        return $this->getTranslation($field, 'id')
            ?? collect($this->getTranslations($field))->first();
    }
}
