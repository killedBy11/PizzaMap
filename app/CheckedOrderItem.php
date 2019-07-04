<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckedOrderItem extends Model
{
    protected $guarded = [];
    public function checkedOrder(){
        return $this->belongsTo('App\CheckedOrder');
    }
    public function product(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
