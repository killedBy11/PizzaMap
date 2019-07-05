<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function orderItem(){
        return $this->hasMany('App\OrderItem');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }
}
