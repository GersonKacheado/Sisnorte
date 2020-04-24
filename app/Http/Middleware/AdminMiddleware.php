<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if('auth:admin'){
        return $next($request);
   }
        return redirect('admin.login');
    }

   /* public function handle($request, Closure $next)
    {
        $usuario = \Auth::user();
        if($usuario !== null && $usuario->administrador){
        return $next($request);
   }
        return redirect('admin.login');
    }*/
}
