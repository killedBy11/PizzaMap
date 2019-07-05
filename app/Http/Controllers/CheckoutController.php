<?php

namespace App\Http\Controllers;

use App\CheckedOrder;
use App\CheckedOrderItem;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function getForm(){
        return view('checkoutForm');
    }

    public function completeCheckout(Request $request, $order_id){
        $user = Auth::user();
        if(!$user)
            return redirect('/');
        $order = Order::find($order_id);
        if(!$order)
            return redirect('/');
        if($order->user_id != $user->id)
            return redirect('/access-denied');
        $checkedOrder = CheckedOrder::create([
            'company_id' => $order->company_id,
            'user_id' => $order->user_id,
            'address' => $request->address,
            'payment' => $request->paymentMethod,
            'status' => 'waiting'
        ]);
        $order_items = OrderItem::where('order_id', $order_id)->get();
        foreach($order_items as $item){
            CheckedOrderItem::create([
                'quantity' => $item->quantity,
                'product_id' => $item->product_id,
                'checked_order_id' => $checkedOrder->id
            ]);
        }
        return redirect('/order-placed/'.$order_id);
    }

}
