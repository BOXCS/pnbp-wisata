<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        $imageFacilities = Facility::whereNotNull('image')
            ->take(3)
            ->get();

        $textFacilities = Facility::where('type', 'description')
            ->take(2)
            ->get();

        return view('welcome', compact('imageFacilities', 'textFacilities'));
    }
}
