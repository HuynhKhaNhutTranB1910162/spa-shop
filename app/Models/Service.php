<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'description',
        'original_price',
        'selling_price',
        'image',
    ];

    public function servicePackages(): BelongsToMany
    {
        return $this->belongsToMany(ServicePackage::class, 'service_service_packages', 'service_package_id','service_id');
    }
}
