<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItems;
use App\User;

class SaleController extends Controller
{
    public function index()
    {   
        $orders = Order::all();
        return view('admin.sales.sales', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        $items = OrderItems::where('order_id', $id)->get();
        // Idem a lo de arriba, más rebuscado. No encontré cuál es la diferencia, puede que sea más performante.. pero no sé.
        /* $items = OrderItems::with('order')->whereHas('order', function($query) use ($id){
            $query->where('order_id', $id);
        })->get(); */
        $client = User::findOrFail($order->user_id);

        return view('admin.sales.sale-details', compact('order', 'items', 'client'));
    }
}
