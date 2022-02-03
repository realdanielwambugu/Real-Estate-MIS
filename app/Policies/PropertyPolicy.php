<?php

Namespace App\Policies;

use App\Models\User;

use App\Models\Property;

use Xcholars\Auth\Access\Response;

class PropertyPolicy
{
    /**
    * check if the user can view the given
    *
    * @return bool;
    */
    public function show(User $user, Property $Property)
    {

    }

    /**
    * check if the user can create new
    *
    * @return bool;
    */
    public function create(User $user, Property $Property)
    {  
        return $user->isSubscribed() && !$user->propertyLimitReached()
               ? Response::allow()
               : Response::deny('Sorry, You have reached you property listing limit.');
    }

    /**
    * check if the user can update the given
    *
    * @return bool;
    */
    public function update(User $user, Property $Property)
    {

    }


    /**
    * check if the user can delete the given
    *
    * @return bool;
    */
    public function delete(User $user, Property $Property)
    {

    }
}
