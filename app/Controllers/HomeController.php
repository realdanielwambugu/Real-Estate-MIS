<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

class HomeController
{
    public function show(Request $request, Response $response)
    {
        if (Gate::allows('view-admin-content'))
        {
            return $response->withRedirect('/plans');
        }

        return $response->withRedirect('/properties');
    }

}
