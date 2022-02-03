<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Agent extends Model
{
    protected $fillable = [
        'fullName',
        'title',
        'email',
        'phone',
        'photo',
        'password',
    ];

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('agents'));

        $file = new \Upload\File('photo', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }
}
