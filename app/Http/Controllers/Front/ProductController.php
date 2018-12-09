<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function show($id)
    {   
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
}