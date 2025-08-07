<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    
    protected $casts = [
        'image' => 'array', // jika menggunakan multiple upload
        // atau
        'image' => 'string', // jika single upload
    ];
}
