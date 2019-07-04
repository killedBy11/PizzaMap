<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckedOrder extends Model
{
    protected $guarded = [];
    public function checkedOrderItems(){
        return $this->hasMany('App\CheckedOrderItem');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
