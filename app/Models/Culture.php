<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Culture extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'description'];

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    protected $casts = [
        'image' => 'array', // jika menggunakan multiple upload
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
