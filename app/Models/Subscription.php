<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Subscription extends Model
{
    protected $fillable = [
        'user_id',
        'plan_id',
        'payment_code',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
