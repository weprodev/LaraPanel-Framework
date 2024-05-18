<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    protected function defaultRedirectUri(): string
    {
        // Here you can redirect user based on the Role and permission to specific page like Admin or Profile

        return config('larapanel.auth.default.redirection');
    }
}
