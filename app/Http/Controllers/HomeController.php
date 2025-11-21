<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // expose env keys to blade
        return view('home', [
            'supabase_url' => env('SUPABASE_URL'),
            'supabase_anon' => env('SUPABASE_ANON_KEY'),
        ]);
    }
}
