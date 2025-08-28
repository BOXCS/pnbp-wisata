<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;

class GalleryController extends Controller
{
    public function index()
    {
        // Ambil semua kategori beserta gambar-gambarnya
        $categories = GalleryCategory::with('images')->get();

        return view('welcome', compact('categories'));
    }
}
