<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $level): Response
    {
        // Memeriksa apakah pengguna memiliki level yang sesuai
        // if (auth()->check() && auth()->user()->level != $level) {
        //     abort(403); // Jika level tidak sesuai, berikan error 403
        // }
        // if (auth()->user() && in_array(auth()->user()->level, $level)) {
        //     return $next($request);
        // }

        // // return $next($request);
        // return redirect()->route('layouts.app');

        if (Auth::check()) {
            if (Auth::user()->level != $level) {
                return redirect('/admin'); // Redirect ke admin jika level bukan yang diinginkan
            }
        }

        return $next($request);

    }
}
