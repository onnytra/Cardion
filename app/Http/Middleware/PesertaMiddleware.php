<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesertaMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $route = $request->route();

        if ($route) {
            $action = $route->getAction();
            $event = $action['event'] ?? null;
        } else {
            $event = null;
        }
        if (!Auth::guard('peserta')->check()) {
            if ($event === 'poster') {
                return redirect()->route('poster.login')->with(['error' => 'Silahkan login terlebih dahulu!']);
            } elseif ($event === 'olimpiade') {
                return redirect()->route('olimpiade.login')->with(['error' => 'Silahkan login terlebih dahulu!']);
            } else {
                abort(404, 'Silahko login terlebih dahulu!');
            }
        }
        
        return $next($request);
    }
}
