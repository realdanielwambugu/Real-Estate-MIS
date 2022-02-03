<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Settings;

use App\Models\Agent;

use Xcholars\Support\Proxies\Gate;

class SettingsController extends Controller
{
    use \App\Traits\HasValidation;

   public function show(Request $request, Response $response)
   {
        if (!Settings::count())
        {
            Settings::create();
        }

        $settings = Settings::find(1);

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
              'admin/settings', ['settings' => $settings]
            );
        }

        return $response->withView(
          'client/about_us',
          ['settings' => $settings, 'agents' => Agent::limit(3)->get()]
        );
   }

   public function contact_us(Request $request, Response $response)
   {
        if (!Settings::count())
        {
            Settings::create();
        }

        $settings = Settings::find(1);

        return $response->withView(
          'client/contact_us',
          ['settings' => $settings]
        );
   }

   public function update(Request $request, Response $response)
   {
       if ($error = $this->isInvalid($request, 'settings'))
       {
           return $error;
       }

       Settings::find($request->id)->update($request->except('id'));

       return $response->withSuccess('Settings updated succesfully');
   }

}
