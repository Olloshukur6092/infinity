<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function index()
    {
        return view('lang');
    }
    public function change(Request $request)
    {
        
        session()->put('lang', $request->lang);

        return redirect()->back();
    }
}
