<?php

namespace App\Http\Controllers;

use App\Company;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addItem($company_id, $product_id){
        $user_id = Auth::user()->id;
        $order = Order::firstOrCreate([
            'user_id' => $user_id,
            'company_id' => $company_id
        ], [
            'user_id' => $user_id,
            'company_id' => $company_id
        ]);
        $order_item = OrderItem::firstOrCreate([
            'order_id' => $order->id,
            'product_id' => $product_id
        ], [
            'order_id' => $order->id,
            'product_id' => $product_id,
            'quantity' => 0
        ]);
        $order_item->quantity+=1;
        $order_item->save();
        return redirect('/menuoverview/'.$company_id);
    }
    public function removeItem($company_id, $product_id){
        $user_id = Auth::user()->id;
        $order = Order::firstOrCreate([
            'user_id' => $user_id,
            'company_id' => $company_id
        ], [
            'user_id' => $user_id,
            'company_id' => $company_id
        ]);
        $order_item = OrderItem::firstOrCreate([
            'order_id' => $order->id,
            'product_id' => $product_id
        ], [
            'order_id' => $order->id,
            'product_id' => $product_id,
            'quantity' => 0
        ]);
        if($order_item->quantity > 0)
            $order_item->quantity-=1;
        if($order_item->quantity == 0)
            $order_item->delete();
        else
            $order_item->save();
        return redirect('/menuoverview/'.$company_id);
    }

    public function checkout($order_id){
        $order = Order::find($order_id);
        if(!$order){
            return redirect('/');
        }
        else{
            if($order->orderItem()->count() < 1)
                return redirect('/');
            else{
                foreach($order->orderItem as $item){
                    $item->delete();
                }
            }
        }
        return view('orderSubmited');
    }

}
