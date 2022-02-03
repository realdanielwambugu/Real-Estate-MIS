<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\User;

use App\Models\Booking;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Hash;

 class ProfileController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
              'admin/clients', ['users' => User::all()]
            );
        }

        return $response->withView(
            'client/profile',
            ['user' => User::find($request->id)]
         );

    }

    public function account(Request $request, Response $response)
    {
        return $response->withView(
            'client/include/account',
            ['user' => User::find(auth()->id())]
        );
    }

    public function properties(Request $request, Response $response)
    {
        return $response->withView(
            'client/include/properties',
            ['user' => User::find(auth()->id())]
        );
    }

    public function delete(Request $request, Response $response)
    {
        $user = User::find($request->id);

        foreach ($user->property as $property)
        {
            $property->delete();
        }

        $user->delete();

        return $response->withRedirect('admin/clients');
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'userUpdate'))
        {
            return $error;
        }

        $request->post->set('password', Hash::make($request->password));

        $user = auth()->user()->update($request->except('confirmPassword'));

        return $response->withSuccess('Profile updated successdfully');
    }

}
