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

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success', 'El producto ya estaba en su carrito!');
        } 

        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate('\App\Product');

        return redirect()->route('cart.index')->with('success', 'El producto fue agregado a su carrito!');
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success', 'Producto eliminado del carrito.');
    }
}
