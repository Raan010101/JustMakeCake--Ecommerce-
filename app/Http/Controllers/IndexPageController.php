<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class IndexPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        $productsall = Product::get();

        return view('index')->with(['products'=>$products,'productsall'=>$productsall])  ;
        
    }

    public function singelProducts(Request $req)
    {
        $id = $req->product_id;
        $product = Product::where('id',$id)->first();

        return view('single-product')->with('products',$product);   
    }

}

    