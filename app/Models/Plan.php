<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Plan extends Model
{
    protected $fillable = [
        'type',
        'duration',
        'price',
        'free_space',
        'number_of_agents',
        'number_of_properties',
    ];

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

}
