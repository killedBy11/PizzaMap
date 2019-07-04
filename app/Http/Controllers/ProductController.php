<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('addmenu');
    }

    public function store(Request $request, $company_id)
    {
        if(!Auth::check()){
            return redirect('/access-denied');
        }
        $user = Auth::user();
        $company = Company::find($company_id);
        if($company != null){
            if($user->id != $company->user_id){
                return redirect('/access-denied');
            }
        }else {
            return redirect('/access-denied');
        }
        $file = $request -> file('picture');
        $stored = Storage::disk('local')->put('public/pizzas', $file);
        $path = Storage::url($stored);
        $product = Product::create([
            'company_id' => $company_id,
            'name' => $request->get('product_name'),
            'description' =>$request->get('description') ,
            'photo' => $path,
            'price' => $request->get('price'),
            'currency' => $request->get('currency'),
            'gramaj' => $request->get('gramaj')
        ]);
        return redirect('/companyoverview/'. $company_id);
    }

    public function editForm($product_id, $company_id){
        $product = Product::find($product_id);
        if(!$product || $product->company_id != $company_id)
            return redirect('/access-denied');
        return view('editProduct', compact('product'));
    }

    public function editSubmit(Request $request, $product_id, $company_id){
        $product = Product::find($product_id);
        if(!$product || $product->company_id != $company_id)
            return redirect('/access-denied');
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->currency = $request->currency;
        $product->gramaj = $request->gramaj;
        if($request->file('picture'))
        {
            $file = $request->file('picture');
            $stored = Storage::disk('local')->put('public/pizzas', $file);
            $path = Storage::url($stored);
            $product->photo = $path;
        }
        $product->save();
        return redirect('/companyoverview/'.$company_id);
    }

}
