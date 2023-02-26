<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing_plan extends Model
{
    use HasFactory;
    public function plan(){
        return $this->belongsTo(Plan::class,'plan_id');
    }
}
