<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    use HasFactory;

    public function cover_image(){
        return $this->hasOne('App\Models\CoverImage', 'blog_id', 'id')->where('type',1);
    }

    public function attachments(){
        return $this->hasMany('App\Models\Assets', 'blog_id', 'id')->where('type',0);
    }
}
