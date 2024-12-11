<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventAdminFromHome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika pengguna login dan role adalah admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect('/admin'); // Arahkan ke halaman admin
        }

        return $next($request); // Lanjutkan jika bukan admin
    }
}
