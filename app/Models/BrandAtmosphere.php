<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class BrandAtmosphere extends Model

{
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}