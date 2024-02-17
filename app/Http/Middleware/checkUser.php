<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkUser
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->status == 0){
            return redirect()->back();
        }

        return $next($request);
    }
}
