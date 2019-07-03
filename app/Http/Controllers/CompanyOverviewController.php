<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyOverviewController extends Controller
{
    public function index($company_id)
    {
        $company = Company::find($company_id);
        $items = Product::where('company_id', $company_id)->get();
        return view('companyoverview', compact('items', 'company'));
    }
    public function deleteRequest(Request $request, $company_id, $product_id){
        $item = Product::find($request->product_id);
        $item->delete();
        return redirect('/companyoverview/' . $company_id);
    }
}
