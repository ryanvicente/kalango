<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\SupabaseAuth;

class VerifySupabaseToken
{
    protected $supabase;

    public function __construct(SupabaseAuth $supabase)
    {
        $this->supabase = $supabase;
    }


    /**Request, espera o access token */
    public function handle(Request $request, Closure $next)
    {
        $header = $request->header('Authorization', '');
        if (!preg_match('/Bearer\s+(.*)$/i', $header, $matches)) {
            return response()->redirectTo('/login');
        }

        $token = $matches[1];

        try {
            $user = $this->supabase->userFromToken($token);
            if (!$user) {
                return response()->redirectTo('/login');
            }
            //guarda o usuario na request para o controller
            $request->attributes->set('supabase_user', $user);
            return $next($request);
        } catch (\Exception $e) {
            Log::error('Supabase verification error: '.$e->getMessage());
            return response()->redirectTo('/login');
        }
    }
}
