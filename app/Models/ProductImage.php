<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $hidden = [
        'image',
        'product_id',

    ];
}
