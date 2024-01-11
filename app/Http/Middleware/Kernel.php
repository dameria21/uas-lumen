<?php

namespace App\Http\Middleware;

use Closure;

class Kernel
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
        // Pre-Middleware Action

        $response = $next($request);

        // Post-Middleware Action

        return $response;
    }
    // File: app/Http/Kernel.php

    protected $middleware = [
        // ...
        \App\Http\Middleware\CorsMiddleware::class,
    ];

    // atau jika Anda ingin menggunakannya di rute tertentu saja:
    protected $routeMiddleware = [
        // ...
        'cors' => \App\Http\Middleware\CorsMiddleware::class,
    ];


}
