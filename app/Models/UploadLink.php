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

    // accessor: otomatis ubah link youtube jadi embed
    public function getEmbedLinkAttribute()
    {
        $url = $this->link;

        if (!$url) {
            return null;
        }

        // format watch?v=...
        if (str_contains($url, 'watch?v=')) {
            return str_replace('watch?v=', 'embed/', $url);
        }

        // format youtu.be/...
        if (str_contains($url, 'youtu.be/')) {
            return str_replace('youtu.be/', 'www.youtube.com/embed/', $url);
        }

        // kalau sudah embed atau bukan youtube, kembalikan apa adanya
        return $url;
    }
}
