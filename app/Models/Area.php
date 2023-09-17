<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Area extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
