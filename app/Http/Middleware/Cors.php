<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class Cors
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
        $request->header('Access-Control-Allow-Origin', '*');
        $request->header('Access-Control-Allow-Credentials', 'true');
        $request->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $request->header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');

        return $next($request);
    }
}
