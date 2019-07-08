<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Company;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $enabled = null;
        if(isset($data['check']))
            $enabled = 'required';
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name' => [$enabled],
            'contact_person_name' => [$enabled],
            'address' => [$enabled],
            'phone' => [$enabled, ($enabled ? 'numeric' : null)],
            'email_company' => [$enabled, ($enabled ? 'email' : null)],
            'website' => [$enabled, ($enabled ? 'url' : null)],
            'working_hours' => [$enabled],
            'company_description' => [$enabled],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
//        $path = $request->file('logo')->store('public/logos');
        $this->redirectTo = '/';
        if(isset($data['check'])){
            $file = $request -> file('logo');
            $stored = Storage::disk('local')->put('public/logos', $file);
            $path = Storage::url($stored);
            $company = Company::create([
                'company_name' => $data['company_name'],
                'contact_person_name' => $data['contact_person_name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'email' => $data['email_company'],
                'own_website' => $data['website'],
                'working_hours' => $data['working_hours'],
                'company_description' => $data['company_description'],
                'user_id' => $user->id,
                'logo' => $path
            ]);
            $this->redirectTo = '/companyoverview/' . $company->id;
        }
        return $user;
    }

}
