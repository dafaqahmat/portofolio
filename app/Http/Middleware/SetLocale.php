<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $firstSegment = explode('/', trim($request->path(), '/'))[0] ?? '';
        $locale = $request->route('locale');

        if (! $locale && in_array($firstSegment, ['en', 'ar'], true)) {
            $locale = $firstSegment;
        }

        app()->setLocale(in_array($locale, ['en', 'ar'], true) ? $locale : 'id');

        return $next($request);
    }
}
