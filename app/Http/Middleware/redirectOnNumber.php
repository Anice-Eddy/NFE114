<?php

namespace App\Http\Middleware;

use Closure;

class redirectOnNumber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //redirige vers l'url "/" si number1 existe et qu'il est <= 2
        if (isset($request->number1) && $request->number1 <= 2) {
            return redirect("/");
        } else {
            //sinon, on continue
            return $next($request);
        }
    }
}
