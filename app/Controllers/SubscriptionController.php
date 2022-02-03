<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Plan;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    use \App\Traits\HasValidation;

    public function checkout(Request $request, Response $response)
    {
        return $response->withView(
            'client/checkout', [ 'plan' => Plan::find($request->plan_id)]
         );
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'checkout'))
        {
            return $error;
        }

        Subscription::where('user_id', auth()->id())->delete();

        $request->post->set('user_id', auth()->id());

        Subscription::create($request->all());

        return $response->withSuccess('You Have Subscribed Successfully');
    }

}
