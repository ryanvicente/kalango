<?php
namespace App\Http\Middleware;
use Closure; use Illuminate\Support\Facades\Session;
class SupabaseAuth {
    public function handle($req, Closure $next){
        if(!Session::has('supabase_user')) return redirect()->route('login')->with('error','Você precisa estar logado.');
        return $next($req);
    }
}
