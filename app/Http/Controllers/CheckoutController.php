<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use App\Order;
use App\OrderItems;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Cart::count() < 1) {
            $route = '/cart';
        } else {
            $route = '/checkout';
        }
        return view($route);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Guardar orden en BD
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'store_address' => $request->store_address,
            'subtotal' => Cart::subtotal(),
            'tax' => Cart::tax(),
            'payment' => $request->payment,
            'total' => Cart::total(),
            'status' => 'Pendiente'
        ]);

        // Guardar items del carrito en BD
        foreach (Cart::content() as $item) {
            OrderItems::create([
                'order_id' => $order->id,
                'name' => $item->model->name,
                'price' => $item->model->price,
                'quantity' => $item->qty
            ]);
        }

        Cart::destroy();

        return redirect('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
