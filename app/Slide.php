<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $table = 'slide';
    protected $fillable=['title','name', 'image','status', 'created_at', 'updated_at'];
}
