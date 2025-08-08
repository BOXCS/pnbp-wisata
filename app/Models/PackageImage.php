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
}
