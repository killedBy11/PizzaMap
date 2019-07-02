<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;

class CustomerMenuOverview extends Controller
{
    public function index()
    {

        return view('customermenuoverview' );
    }
}
