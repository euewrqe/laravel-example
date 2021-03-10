<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValue
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
        // perform action before response
        echo "perform action before response<br />";
        $request = $next($request);

        // perform action after dispatched
        echo "perform action after response<br />";

        return $request;
    }

    /**
     * Handle tasks after response sent to the browser
     *
     * @param $request
     * @param $response
     */
    public function terminate($request, $response){
        echo "send end";
    }
}
