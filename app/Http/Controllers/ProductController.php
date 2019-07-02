<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index()
    {
        return view('addmenu');
    }

    public function store(Request $request, $company_id)
    {
        $user = Auth::user();
        $company = Company::find($company_id);
        if($company != null){
            if($user->id != $company->user_id){
                return redirect('/access-denied');
            }
        }else {
            return redirect('/access-denied');
        }
        $path = $request->file('picture')->store('public/photos');
        $product = Product::create([
            'company_id' => $company_id,
            'name' => $request->get('name'),
            'description' =>$request->get('description') ,
            'photo' => $path,
            'price' => $request->get('price'),
            'currency' => $request->get('currency'),
            'gramaj' => $request->get('gramaj')
        ]);
        return redirect('/home');
    }
}
