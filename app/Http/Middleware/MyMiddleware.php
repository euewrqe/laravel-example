<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MyMiddleware
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
        // if any thing redirect to home
        
        Log::channel("stdout")->debug('before');
        $resp = $next($request);
        Log::channel("stdout")->debug('after');
        return $resp;
    }
}
