<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected  $fillable = ['user_id', 'image_url', 'name', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
