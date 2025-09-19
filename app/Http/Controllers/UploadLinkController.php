<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadLinkController extends Controller
{
    //
    public function index()
    {
        $uploadLinks = \App\Models\UploadLink::latest()->get();
        return view('welcome', compact('uploadLinks'));
    }
}
