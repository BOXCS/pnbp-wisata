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
     * Bersihkan link Instagram (hapus query string & pastikan format clean).
     */
    public function getCleanLinkAttribute()
    {
        if (!$this->link) {
            return null;
        }

        $url = $this->link;

        // kalau Instagram, hapus query string (?utm_source, ?igsh, dll)
        if (str_contains($url, 'instagram.com')) {
            $url = preg_replace('/\?.*/', '', $url); // hapus ? dan setelahnya
            return rtrim($url, '/'); // pastikan tanpa slash di belakang
        }

        return $url;
    }

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

        // Instagram → lebih baik buka langsung clean link
        if (str_contains($url, 'instagram.com')) {
            return $this->clean_link; // pakai yang sudah dibersihkan
        }

        return $url;
    }
}
