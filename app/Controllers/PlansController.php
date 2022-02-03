<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Plan;

use App\Models\Subscription;

class PlansController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        $plans = ['plans' => Plan::all()];

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
              'admin/plans', $plans
            );
        }

        return $response->withView(
            'client/plans', $plans
         );
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'plan'))
        {
            return $error;
        }

        Plan::create($request->all());

        return $response->withSuccess('Plan Added Successfully');
    }

    public function delete(Request $request, Response $response)
    {
        $plan = Plan::find($request->plan_id);

       foreach ($plan->subscription as $subscription)
       {
           $subscription->delete();
       }

        $plan->delete();

        return $response->withRedirect('/plans');
    }


}
