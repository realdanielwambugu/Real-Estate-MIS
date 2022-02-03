<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Message;

class MessagesController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        $messages = ['messages' => Message::all()];

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
              'admin/messages', $messages
            );
        }

        return $response->withRedirect('/properties');
    }


    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'message'))
        {
            return $error;
        }

        Message::create($request->all());

        return $response->withSuccess('Message sent Successfully');
    }



}
