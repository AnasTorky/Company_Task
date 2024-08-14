<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Company;


class ProductController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $products= Product::all();
        return view('products', compact('companies','products'));
    }
    public function create_product(Request $request){
        $c = Company::find($request->company_id);
        Product::create([
               'name' => $request->name,
               'company_id' => $request->company_id,
               'company_name' => $c->name,
               'details' => $request->details,
           ]);
        return redirect()->route('productsindex');
    }
    public function update_product($id){
        $updated_Product = Product::find($id);
        $updated_Product->update([
            'name' => $request->name,
            'company_id' => $request->company_id,
            'company_name' => $request->company_name,
            'details' => $request->details,
        ]);
        return view("products");
    }
    public function delete_product($id){
        $updated_Product = Product::find($id);
        $updated_Product->delete();
        $products = Product::all();
        return redirect()->route('productsindex');
    }
}
