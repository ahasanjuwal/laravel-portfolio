<?php

namespace App\Http\Middleware;

use Closure;

class newmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if($request->www<=200){
      return redirect('home');
    }
        return $next($request);
    }
}
