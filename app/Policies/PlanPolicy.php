<?php

Namespace App\Policies;

use App\Models\User;

use App\Models\Plan;

class PlanPolicy
{
    /**
    * check if the user can view the given
    *
    * @return bool;
    */
    public function show(User $auth, Plan $plan)
    {
       
    }

    /**
    * check if the user can create new
    *
    * @return bool;
    */
    public function create(User $auth, Plan $plan)
    {

    }

    /**
    * check if the user can update the given
    *
    * @return bool;
    */
    public function update(User $auth, Plan $plan)
    {

    }


    /**
    * check if the user can delete the given
    *
    * @return bool;
    */
    public function delete(User $auth, Plan $plan)
    {

    }
}
