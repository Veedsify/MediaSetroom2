<?php

namespace App\Http\Middleware;

use App\Models\PageStat;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageStatMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $pageStat = new PageStat();
        $pageStat->page = $request->path();
        $pageStat->date = now();
        $pageStat->ip = $request->ip();
        $pageStat->save();

        return $next($request);
    }
}
