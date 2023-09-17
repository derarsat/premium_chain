<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function atmosphere_images()
    {
        return $this->hasMany(BrandAtmosphere::class);
    }
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}


