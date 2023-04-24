<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthCustom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (empty($request->header('key')) || empty(env('API_KEY', null))) {
            return response()->json(
                [
                    "error" => "API key is missing."
                ],
                Response::HTTP_FORBIDDEN
            );
        }

        if ($request->header('key') != env('API_KEY')) {
            return response()->json(
                [
                    "error" => "Invalid API key."
                ],
                Response::HTTP_UNAUTHORIZED
            );
        }
        return $next($request);
    }
}
