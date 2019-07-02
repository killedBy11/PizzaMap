<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HasCompany extends Controller
{
    static public function hasCompany()
    {
        $user = Auth::user();
        $company = Company::where('user_id',$user->id)->first();
        return $company;
    }

}
