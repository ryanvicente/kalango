<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SupabaseService
{
    protected string $url;
    protected string $anon;

    public function __construct()
    {
        $this->url  = rtrim(env('SUPABASE_URL'), '/');
        $this->anon = env('SUPABASE_ANON_KEY');
    }

    public function register(string $email, string $password)
    {
        $response = Http::withHeaders([
            'apikey' => $this->anon,
            'Content-Type' => 'application/json'
        ])->post($this->url . '/auth/v1/signup', [
            'email' => $email,
            'password' => $password
        ]);

        return $response->json();
    }

    public function login(string $email, string $password)
    {
        $response = Http::withHeaders([
            'apikey' => $this->anon,
            'Content-Type' => 'application/json'
        ])->post($this->url . '/auth/v1/token?grant_type=password', [
            'email'    => $email,
            'password' => $password,
        ]);

        return $response->json();
    }

    public function userFromToken(string $token)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'apikey'        => $this->anon,
        ])->get($this->url . '/auth/v1/user');

        return $response->json();
    }
}
