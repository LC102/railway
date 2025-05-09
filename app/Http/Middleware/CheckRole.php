<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user() || !$this->hasRole($request->user(), $role)) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }

    private function hasRole($user, string $role): bool
    {
        return match ($role) {
            'admin' => $user->isAdmin(),
            'tallerista' => $user->isTallerista(),
            'user' => $user->isUser(),
            default => false,
        };
    }
} 