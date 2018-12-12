<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function store(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate('\App\Product');

        return redirect()->route('cart.index')->with('success', 'Todo piola');
    }
}
