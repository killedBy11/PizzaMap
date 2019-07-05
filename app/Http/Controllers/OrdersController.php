<?php

namespace App\Http\Controllers;

use App\CheckedOrder;
use App\CheckedOrderItem;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function displayUserOrders(){
        $user = Auth::user();
        if(!$user)
            return redirect('/');
        $orders = CheckedOrder::where('user_id', $user->id)->with('checkedOrderItems')->orderBy('status', 'desc')->orderBy('created_at', 'desc')->simplePaginate(10);
        return view('displayUserOrders', compact('orders'));
    }

    public function displayCompanyOrders($company_id){
        $company = Company::find($company_id);
        if($company->user_id != Auth::user()->id)
            return redirect('/access-denied');
        $orders = CheckedOrder::where('company_id', $company_id)->with('checkedOrderItems')->orderBy('status', 'desc')->orderBy('created_at', 'desc')->simplePaginate(10);
        return view('placedOrdersCompany', compact('orders', 'company_id'));
    }

    public function deleteCompanyOrder($company_id, $order_id){
        $orderItems = CheckedOrderItem::where('checked_order_id', $order_id)->get();
        foreach($orderItems as $order){
            $order->delete();
        }
        CheckedOrder::find($order_id)->delete();
        return redirect('/placed-orders/'.$company_id);
    }

    public function prevStatus($company_id, $order_id){
        $order = CheckedOrder::find($order_id);
        switch($order->status){
            case 'pending':
                $order->status = 'waiting';
                break;
            case 'done':
                $order->status = 'pending';
                break;
        }
        $order->save();
        return redirect('/placed-orders/'.$company_id);
    }

    public function nextStatus($company_id, $order_id){
        $order = CheckedOrder::find($order_id);
        switch($order->status){
            case 'waiting':
                $order->status = 'pending';
                break;
            case 'pending':
                $order->status = 'done';
                break;
        }
        $order->save();
        return redirect('/placed-orders/'.$company_id);
    }
}
