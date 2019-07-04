<?php

namespace App\Http\Controllers;

use App\CheckedOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function displayUserOrders(){
        $user = Auth::user();
        if(!$user)
            return redirect('/');
        $orders = CheckedOrder::where('user_id', $user->id)->with('checkedOrderItems')->simplePaginate(2);
        return view('displayUserOrders', compact('orders'));
    }
}
