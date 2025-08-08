<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Packages extends Model
{
    protected $fillable = ['name', 'description', 'price'];

    public function images(): HasMany
    {
        return $this->hasMany(PackageImage::class, 'package_id');
    }
}

