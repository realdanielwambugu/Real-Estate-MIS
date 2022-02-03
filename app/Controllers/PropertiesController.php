<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Property;

class PropertiesController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if ($id = $request->property_id)
        {
            return $response->withView(
                'client/property', ['property' => Property::find($id)]
             );
        }

        $properties = ['properties' => Property::all()];

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
              'admin/properties', $properties
            );
        }

        return $response->withView(
            'client/properties', $properties
         );
    }

    public function properties_side(Request $request, Response $response)
    {
        return $response->withView(
            'client/properties_side', ['user' => auth()->user()]
         );
    }

    public function addProperty(Request $request, Response $response)
    {
        if (Gate::allows('add-property-form'))
        {
            return  $response->withView('/client/add_property');
        }

        return  $response->withRedirect('/plans');
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'Property'))
        {
            return $error;
        }

        $res = Gate::inspect('create', $property = new Property);

        if ($res->allowed())
        {
            $property->create(
                array_merge(
                    $request->all(),
                    ['photo' => $property->upload_photo()]
                )
            );
        }
        else
        {
            return $response->withError($res->message());
        }

        return $response->withSuccess('Property Added Successfully');
    }

    public function delete(Request $request, Response $response)
    {
        Property::find($request->property_id)->delete();

        return $response->withRedirect('/client/properties_side');
    }


}
