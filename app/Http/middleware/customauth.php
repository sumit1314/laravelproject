<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use session;

class customauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "hi from middleware";
        $path=$request->path();

        if($path=="login" |||$path=="register") && session::get('user'))
        {
return redirect('/')
        }
else if($path!=="login" && !session::get('user')) && (&path!="regsiter")

        return $next($request);


    }
}
