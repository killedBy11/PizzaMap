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
        $valRequest = $request->validate([
            'product_name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'currency' => 'required|max:3|min:3',
            'gramaj' => 'required|numeric',
        ]);
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
            'name' => $valRequest['product_name'],
            'description' =>$valRequest['description'],
            'photo' => $path,
            'price' => $valRequest['price'],
            'currency' => $valRequest['currency'],
            'gramaj' => $valRequest['gramaj']
        ]);
        return redirect('/companyoverview/'. $company_id);
    }
<<<<<<< HEAD
     public function editmenuitem($company_id,$product_id)
     {
         $company = Company::find($company_id);
         $product = Product::find($product_id);
         return view( 'editMenuItem', compact('company','product'));
     }

     public function updateMenuItem(Request $request, $company_id, $product_id)
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

         $product = Product::find($product_id);
            ///in caz ca produsul nu exista
         if($product!=null)
         {
             if($company->id != $product->company_id)
             {
                 return redirect('/access-denied');
             }
         }else
         {
             return redirect('/access-denied');
         }

         $product->name = $request->get('product_name');
         $product->description = $request->get('description');
         if($request->file('photo'))
         {
             $file = $request->file('photo');
             $stored = Storage::disk('local')->put('public/pizzas', $file);
             $path = Storage::url($stored);
             $product -> photo=$path;
         }
         $product->price = $request->get('price');
         $product->currency = $request->get('currency');
         $product->gramaj = $request->get('gramaj');
         $product->save();
         return redirect('/companyoverview/'. $company_id);
     }
=======

    public function editForm($company_id, $product_id){
        $product = Product::find($product_id);
        if(!$product || $product->company_id != $company_id)
            return redirect('/access-denied');
        return view('editProduct', compact('product'));
    }

    public function editSubmit(Request $request, $company_id, $product_id){
        $product = Product::find($product_id);
        if(!$product || $product->company_id != $company_id)
            return redirect('/access-denied');
        $valRequest = $request->validate([
            'product_name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'currency' => 'required|max:3|min:3',
            'gramaj' => 'required|numeric',
        ]);
        $product->name = $valRequest['product_name'];
        $product->description = $valRequest['description'];
        $product->price = $valRequest['price'];
        $product->currency = $valRequest['currency'];
        $product->gramaj = $valRequest['gramaj'];
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

>>>>>>> 6d9c3e1c3f1c17e703af84b1dd624d78bec2578b
}
