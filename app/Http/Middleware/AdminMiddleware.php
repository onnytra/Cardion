<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('web')->check()) {
            return redirect()->route('auth.admin.login')->with(['error' => 'Silahkan login terlebih dahulu!']);
        }
        
        return $next($request);
    }
}
