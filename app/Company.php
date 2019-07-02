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
}
