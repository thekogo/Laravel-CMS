<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = ['contact', 'url', 'logo_url'];

    protected $table = 'follows';
}
