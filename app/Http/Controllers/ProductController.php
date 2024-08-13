<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function create_product(){
        Product::create([
               'name' => $request->name,
               'details' => $request->details,
           ]);
        return view("products");
    }
    public function update_product($id){
        $updated_Product = Product::find($id);
        $updated_Product->update([
            'name' => $request->name,
            'details' => $request->details,
        ]);
        return view("products");
    }
    public function delete_product($id){
        $updated_Product = Product::find($id);
        $updated_Product->delete();
        $products = Product::all();
        return view('products', compact('products'));
    }
}
