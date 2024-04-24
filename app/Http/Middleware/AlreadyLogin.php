<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AlreadyLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route("login");
        }if (Auth::user()->usertype_id == 1) {
            return redirect()->route("cashier.dashoboard");
        }if (Auth::user()->usertype_id == 2) {
            return redirect()->route("assesor.dashboard");
        }if (Auth::user()->usertype_id == 3) {
            return redirect()->route("guard.dashboard");
        }if (Auth::user()->usertype_id == 4) {
            return redirect()->route("queuedisplay.dashboard");
        }if (Auth::user()->usertype_id == 5) {
            return redirect()->route("AdminDash");
        }if (Auth::user()->status == 'Unverified') {
            return redirect()->route("unverified.dashboard");
        }
        return $next($request);
    }
}
