<?php

namespace App\Http\Middleware;

use App\Models\Place;
use Closure;

class CheckPointMiddleware
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
        if(isset($request->id))
        {
            if(!Place::find($request->id))
            {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
