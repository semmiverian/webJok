<?php

namespace App\Http\Middleware;

use Closure;

class RedirectRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param   string $roleName
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(auth()->guest())
      {
        return redirect('auth/login');
      }
     if (auth()->check() && ! auth()->user()->hasRole('admin') && ! auth()->user()->hasRole('staff'))
        {
            return abort(411, 'Unauthorized');
        }
      
         return $next($request);
    }
}
