<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('shop', compact('products'));
    }

    public function show($slug)
    {   
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product', compact('product'));
    }
}