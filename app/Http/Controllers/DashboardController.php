<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // middleware já colocou o usuário na request
        $user = $request->attributes->get('supabase_user');
        return view('dashboard', ['user' => $user]);
    }

    // JSON usuario
    public function me(Request $request)
    {
        return response()->json($request->attributes->get('supabase_user'));
    }
}
