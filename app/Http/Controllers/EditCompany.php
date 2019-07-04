<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Company;

class EditCompany extends Controller
{
    function index($company_id)
    {
        $company = Company::find($company_id);
        return view('editcompany',compact('company'));
    }

    function editCompany(Request $request, $company_id)
    {
        $company = Company::find($company_id);
        if(Auth::user()->id==$company->user_id) {

            $company->company_name = $request->company_name;
            $company->contact_person_name = $request->contact_person_name;
            $company->address = $request->address;
            $company->phone = $request->phone;
            $company->email = $request->email_company;
            $company->own_website = $request->website;
            $company->working_hours = $request->working_hours;
            $company->company_description = $request->company_description;

            if($request->file('logo'))
            {
                $file = $request->file('logo');
                $stored = Storage::disk('local')->put('public/logos', $file);
                $path = Storage::url($stored);
                $company -> logo=$path;
            }
            $company->save();
            return redirect('companyoverview/'.$company_id);
        }
        else{
            return redirect('/access-denied');
        }
    }

}
