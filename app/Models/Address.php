<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'house_number',
        'address',
        'user_id',
        'ward_id',
        'district_id',
        'city_id',
    ];
}
