<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        // Ambil 3 fasilitas yang punya gambar
        $imageFacilities = Facility::whereNotNull('image')
            ->take(3)
            ->get();

        // Ambil 2 fasilitas yang berupa type description/text
        $textFacilities = Facility::where('type', 'description')
            ->take(2)
            ->get();
        return view('welcome', compact('facilities'));
    }
}
