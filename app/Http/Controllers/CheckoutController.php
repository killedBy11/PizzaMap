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
        $valRequest = $request->validate([
            'address' => 'required|max:255',
            'paymentMethod' => 'required',
        ]);
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
            'address' => $valRequest['address'],
            'payment' => $valRequest['paymentMethod'],
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

    public function resendOrder($order_id){
        $user = Auth::user();
        $order = CheckedOrder::find($order_id);
        if(!$user || !$order || $user->id != $order->user_id || $order->status != "done")
            return redirect('/access-denied');
        $order->status = "waiting";
        $newOrder = Order::updateOrCreate([
            'company_id' => $order->company_id,
            'user_id' => $order->user_id,
        ], [
            'company_id' => $order->company_id,
            'user_id' => $order->user_id,
        ]);
        $orderItems = CheckedOrderItem::where('checked_order_id', $order_id)->get();
        $oldItems = OrderItem::where('order_id', $newOrder->id)->get();
        foreach($oldItems as $item){
            $item->delete();
        }
        foreach($orderItems as $item){
            OrderItem::create([
                'quantity' => $item->quantity,
                'product_id' => $item->product_id,
                'order_id' => $newOrder->id
            ]);
        }
        return redirect('/checkout/' . $newOrder->id);
    }
}
