<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\SupabaseService;

class AuthController extends Controller
{
    protected $supabase;

    public function __construct(SupabaseService $supabase)
    {
        $this->supabase = $supabase;
    }

    public function registerPage() {
        return view('auth.register');
    }

    public function register(Request $r)
    {
        $r->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'name' => 'required'
        ]);

        $res = $this->supabase->register($r->email, $r->password);

        if (isset($res['error'])) {
            return back()->with('error', $res['error']['message']);
        }

        return redirect()->route('login')->with('success', 'Conta criada! Verifique seu email.');
    }

    public function loginPage() {
        return view('auth.login');
    }

    public function login(Request $r)
    {
        $r->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $supabase = app(\App\Services\SupabaseService::class);
    
        $res = $supabase->login($r->email, $r->password);
    
        // Se der erro
        if (isset($res['error'])) {
            return back()->with('error', $res['error']['message']);
        }
    
        // Salvar usuário retornado
        Session::put('supabase_user', $res['user']);
    
        // Salvar token correto
        Session::put('supabase_token', $res['access_token']);
    
        return redirect()->route('dashboard');
    }


    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
