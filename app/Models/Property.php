<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Property extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'type',
        'contract_type',
        'price',
        'location',
        'bedrooms',
        'bathrooms',
        'area',
        'photo',
        'description',
    ];

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('properties'));

        $file = new \Upload\File('photo', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
