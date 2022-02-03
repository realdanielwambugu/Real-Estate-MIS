<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class User extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'password',
        'status',
    ];

    public function isAdmin()
    {
        return $this->type === 'admin';
    }

    public function subscription()
    {
        return Subscription::where('user_id', $this->id)->first();
    }

    public function isSubscribedTo($plan_id)
    {
        return $this->subscription() ? $this->subscription()->id == $plan_id : false;
    }

    public function isSubscribed()
    {
        return $this->subscription();
    }

    public function property()
    {
        return $this->hasMany(Property::class);
    }

    public function propertyLimitReached()
    {
        return $this->isSubscribed()
        ? $this->property()->count() == $this->subscription()->plan->number_of_properties
        : false;
    }
}
