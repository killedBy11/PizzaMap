<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerMenuOverview extends Controller
{
    public function index($company_id)
    {
        $company = Company::find($company_id);
        $products = Product::where('company_id', $company_id)->get();
        $user = null;
        $order = null;
        if(Auth::check()){
            $user = Auth::user();
            $order = $user->orders()->with('orderItem', 'orderItem.product')->where('company_id', $company_id)->first();
        }
        return view('customermenuoverview', compact('company', 'products', 'order'));
    }

    public function reviewPost(Request $request, $company_id){
        dd($request);
        return redirect('/menuoverview/'.$company_id);
    }
}
