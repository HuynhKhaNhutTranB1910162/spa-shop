<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    protected $table = 'service_packages';

    protected $fillable = [
        'name',
        'description',
        'original_price',
        'selling_price',
        'image',

    ];
}
