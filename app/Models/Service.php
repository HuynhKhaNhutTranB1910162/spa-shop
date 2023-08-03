<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
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

    public static function getServiceById(string $id): Model|Collection|Builder|array|null
    {
        return Service::query()->findOrFail($id);
    }
}
