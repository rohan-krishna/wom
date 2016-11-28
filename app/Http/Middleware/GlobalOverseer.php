<?php

namespace App\Http\Middleware;

use Closure;

class GlobalOverseer
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
        // set sitename
        config(['app.name' => 'WOM']);
        return $next($request);
    }
}
