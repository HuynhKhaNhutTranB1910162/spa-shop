<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';

    protected $fillable = [
        'image',
        'product_id',
    ];

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
