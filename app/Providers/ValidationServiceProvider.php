<?php

Namespace App\providers;

use Xcholars\Validation\ValidationServiceProvider as ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{
   /**
    * The Validation rules mappings for the application.
    *
    * @var array
    */
    protected $mappings = [
        'signup' => \App\Validation\ForSignup::class,
        'login' => \App\Validation\ForLogin::class,
        'plan' => \App\Validation\ForPlan::class,
        'checkout' => \App\Validation\ForCheckout::class,
        'Property' => \App\Validation\ForProperty::class,
        'agent' => \App\Validation\ForAgent::class,
        'settings' => \App\Validation\ForSettings::class,
        'userUpdate' => \App\Validation\ForUserUpdate::class,
        'message' => \App\Validation\ForMessage::class,

    ];
}
