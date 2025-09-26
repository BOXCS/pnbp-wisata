<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageImage extends Model
{
    protected $fillable = ['package_id', 'image'];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Packages::class);
    }

    public function getTranslated(string $relationField, string $locale = null): ?string
{
    [$relation, $field] = explode('.', $relationField);
    $locale = $locale ?? app()->getLocale();

    if (! $this->$relation) {
        return null;
    }

    $value = $this->$relation->getTranslation($field, $locale);

    return $value
        ?? $this->$relation->getTranslation($field, 'id')
        ?? collect($this->$relation->getTranslations($field))->first()
        ?? '-';
}
}
