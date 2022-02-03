<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Agent;

class AgentsController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        // if ($id = $request->property_id)
        // {
        //     return $response->withView(
        //         'client/property', ['property' => Property::find($id)]
        //      );
        // }
        //
        $agents = ['agents' => Agent::all()];

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
              'admin/agents', $agents
            );
        }

        return $response->withRedirect('/properties');
    }


    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'agent'))
        {
            return $error;
        }

         $agent = new Agent;

         $agent->create(
            array_merge(
                $request->all(),
                ['photo' => $agent->upload_photo()]
            )
        );

        return $response->withSuccess('Agent Added Successfully');
    }

    public function delete(Request $request, Response $response)
    {
        Agent::find($request->agent_id)->delete();

        return $response->withRedirect('/admin/agents');
    }


}
