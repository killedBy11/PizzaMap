<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id', 'company_name', 'contact_person_name', 'address', 'phone', 'email', 'own_website', 'working_hours', 'logo', 'company_description'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }

    public function order(){
        return $this->hasMany('App\Order');
    }
    public function checkedOrders(){
        return $this->hasMany('App\CheckedOrder');
    }
    public function reviews(){
        return $this->hasMany('App\Review');
    }
}
