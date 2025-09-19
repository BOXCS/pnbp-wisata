<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class GalleryCategory extends Model
{
    use HasTranslations;
    
    protected $fillable = ['name'];

    public $translatable = ['name'];

    public function images(): HasMany
    {
        return $this->hasMany(GalleryImage::class);
    }
}
