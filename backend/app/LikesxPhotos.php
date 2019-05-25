<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikesxPhotos extends Model
{
    protected $fillable = ['user_id','post_id'];
}
