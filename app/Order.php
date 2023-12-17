<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable=['name', 'email', 'gender','address', 'phone', 'note'];
    public function order_detail(){
    	return $this->hasMany('App\OrderDetail','id_order','id');
    }
}
