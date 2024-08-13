<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies', compact('companies'));
    }
    public function create_company(Request $request){
        Company::create([
            'name' => $request->name,
            'country' => $request->country,
            'city' => $request->city,
            'size' => $request->size
           ]);
        return $request;
    }
    public function update_company(Request $request){
        $updated_Company->update([
            'name' => $request->name,
            'country' => $request->country,
            'city' => $request->city,
            'size' => $request->size
        ]);
        return $request;
    }
    public function delete_company($id){
        $companies = Company::all();
        $updated_Company = Company::find($id);
        $updated_Company->delete();
        return view("companies",compact('companies'));
    }
}
