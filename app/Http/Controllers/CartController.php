<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem($company_id, $product_id){
        $user_id = Auth::user()->id;
        if(Order::where())
        return redirect('/menuoverview/'.$company_id);
    }
}
