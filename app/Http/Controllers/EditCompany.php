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
        $valRequest = $request->validate([
            'company_name' => 'required|max:255',
            'contact_person_name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email_company' => 'required|email',
            'website' => 'required|url',
            'working_hours' => 'required',
            'company_description' => 'required',
        ]);
        if(Auth::user()->id==$company->user_id) {

            $company->company_name = $valRequest['company_name'];
            $company->contact_person_name = $valRequest['contact_person_name'];
            $company->address = $valRequest['address'];
            $company->phone = $valRequest['phone'];
            $company->email = $valRequest['email_company'];
            $company->own_website = $valRequest['website'];
            $company->working_hours = $valRequest['working_hours'];
            $company->company_description = $valRequest['company_description'];

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
