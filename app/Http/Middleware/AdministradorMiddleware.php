<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdministradorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario está autenticado
        if ($request->user() && $request->user()->usuario_administrador) {
            return $next($request); // Permitir acceso al usuario administrador
        }

        // Si no es administrador, redirigir a una ruta específica o mostrar un mensaje
        return redirect('/')->with('error', 'No tienes permisos de administrador.');
    }
}
