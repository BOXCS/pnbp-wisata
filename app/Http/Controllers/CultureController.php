<?php

namespace App\Http\Controllers;

use App\Models\Culture;

class CultureController extends Controller
{
    public function index()
{
    $cultures = Culture::all();
    return view('welcome', compact('cultures'));
}

}
