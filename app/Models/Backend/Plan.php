<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public function pricing_plan ()
    {
     return $this->hasMany(Pricing_plan::class);
    }
}
