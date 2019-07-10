<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function denied(){
        return view('accessDenied');
    }
    public function pizzaPage(){
        $items = Product::all();
        return view('pizzaPage', compact('items'));
    }
    public function landing(){
        $companies = Company::simplePaginate(10);
        return view('welcome', compact('companies'));
    }
    public function search(Request $request, $searchquery)
    {
        if(strlen($searchquery) >= 3)
        {
        $companies=Company::query()
                            ->where("company_name", "LIKE", "%{$searchquery}%")
                            ->limit(20)
                            ->get();
        }
        else
        {
            $companies = [];
        }
        return view('search', compact('companies'));
    }
}
