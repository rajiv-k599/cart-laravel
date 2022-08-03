<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::all();
     
        return view('shop.index',compact('product'));
    }

    public function show($id)
    {
        $product=Product::FindOrFail($id);
       
        return view('shop.shop',compact('product'));
    }
       
}
