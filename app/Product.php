<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function category(){
    	return $this->belongsTo('App\Category','cat_id','id');
    }
    public function order_detail(){
    	return $this->hasMany('App\OrderDetail','id_product','id');
    }
}
