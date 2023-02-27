<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Category extends Model
{
    use HasFactory;
    public function blog ()
    {
     return $this->hasMany(Blog::class);
    }
}
