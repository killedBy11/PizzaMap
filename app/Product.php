<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'company_id','name','description','photo','price','currency','gramaj'
    ];
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function orderItem(){
        return $this->belongsTo('App\OrderItem');
    }
}
