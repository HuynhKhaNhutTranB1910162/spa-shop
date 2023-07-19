<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $hidden = [
        'name',
        'sku',
        'description',
        'stock',
        'price',
        'selling_price',
    ];
}
