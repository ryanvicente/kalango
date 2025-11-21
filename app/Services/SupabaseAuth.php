<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SupabaseAuth
{
    protected $url;
    protected $anon;

    public function __construct()
    {
        $this->url = rtrim(config('services.supabase.url') ?? env('SUPABASE_URL'), '/');
        $this->anon = config('services.supabase.anon') ?? env('SUPABASE_ANON_KEY');
    }

    /**
     * Chama um endpoint do supabase user.
     * Retorna um JSON do usuario com sucesso ou fracasso
     */
    public function userFromToken(string $token)
    {
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'apikey' => $this->anon,
        ])->get($this->url . '/auth/v1/user');

        if ($resp->ok()) {
            return $resp->json();
        }
        return null;
    }
}
