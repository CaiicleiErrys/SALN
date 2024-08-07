<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->isAdmin()) {
            return $next($request); // Admins can access all pages.
        }

        // For non-admin users, restrict access to selected pages.
        abort(403, 'Unauthorized');
    }
}
