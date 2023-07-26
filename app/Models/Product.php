<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected  $fillable = [
        'name',
        'description',
        'sku',
        'stock',
        'category_id',
        'original_price',
        'selling_price',
        'image',
    ];

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function productimages(): hasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function orders(): hasMany
    {
        return $this->hasMany(Order::class);
    }
}
