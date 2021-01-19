<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['image_1', 'image_2', 'image_3'];

    protected $table = 'setting';
}
