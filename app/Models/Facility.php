<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Facility extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'type', 'description'];

    protected $fillable = [
        'name',
        'type',
        'description',
        'image',
    ];
}
