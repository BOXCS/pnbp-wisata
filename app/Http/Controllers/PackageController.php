<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Packages::with('images')->get();
        return view('welcome', compact('packages'));
    }
}
