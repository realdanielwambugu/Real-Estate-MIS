<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Message extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'msg',
    ];


}
