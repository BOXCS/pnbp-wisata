<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        // Ensure that the language code is valid
        $lang = $request->lang;

        if (in_array($lang, ['id', 'en', 'es', 'zh'])) {
            // Store the language in the session
            Session::put('locale', $lang);
        }

        // Redirect back to the previous page with the updated language
        return redirect()->back();
    }
}
