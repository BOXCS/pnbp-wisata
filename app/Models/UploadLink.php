<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadLink extends Model
{
    protected $fillable = [
        'title',
        'image',
        'link',
    ];

    /**
     * Accessor: embed link otomatis.
     */
    public function getEmbedLinkAttribute()
    {
        $url = $this->link;

        if (!$url) return null;

        // YouTube
        if (str_contains($url, 'watch?v=')) {
            return str_replace('watch?v=', 'embed/', $url);
        }
        if (str_contains($url, 'youtu.be/')) {
            return str_replace('youtu.be/', 'www.youtube.com/embed/', $url);
        }

        // Instagram
        if (str_contains($url, 'instagram.com')) {
            return rtrim($url, '/') . '/embed';
        }

        return $url;
    }
}
