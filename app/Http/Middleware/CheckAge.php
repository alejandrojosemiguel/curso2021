<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DateTime;

class CheckAge
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

        $fecha = New DateTime();

        if(auth()->user()->birthday>$fecha->modify('-18 year')->format('Y-m-d')){
            return redirect(route('prueba.na'));
        }

        return $next($request);

    }
}
