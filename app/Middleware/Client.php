<?php

Namespace App\Middleware;

use Xcholars\Http\Request;

use Xcholars\Support\Proxies\Response;

use Closure;

use Xcholars\Support\Proxies\Gate;

class Client
{
   /**
    * Handle the user request.
    *
    * @param object \Xcholars\Http\Request  $request
    * @param object Closure $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        if (!Gate::allows('view-admin-content'))
        {
            return Response::withRedirect('/');
        }

        return $next($request);
    }
}
