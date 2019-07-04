<?php

namespace App\Http\Middleware;

use App\Company;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class CompanyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if(!$user){
            return redirect('/login');
        }
        $company_id = $request->route()->company_id;
        if($company_id) {
            $company = Company::find($company_id);
            if ($company && Gate::denies('canAccessCompany', $company))
                return redirect('/access-denied');
        }
        return $next($request);
    }
}
