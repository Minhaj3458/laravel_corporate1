<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;
    public function blog_Category(){
        return $this->belongsTo(Blog_Category::class,'blog_category_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
