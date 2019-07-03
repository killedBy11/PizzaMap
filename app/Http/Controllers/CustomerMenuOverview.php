<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;

class CustomerMenuOverview extends Controller
{
    public function index($company_id)
    {
        $company = Company::find($company_id);
        $products = Product::where('company_id', $company_id)->get();
        return view('customermenuoverview', compact('company', 'products'));
    }
}
