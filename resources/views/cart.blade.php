@extends('templates/master')

@section('title', 'mobili - Carrito')

@section('content')
<div class="container">
    @if (session()->has('success'))
        {{ session()->get('success') }}
    @endif
    <h1>Mi Carrito</h1>

    @if (Cart::count() > 0)
        <p>{{ Cart::count() }} item(s) en el carrito</p>
    
        @foreach (Cart::content() as $item)
            
        
        <div class="item" style="display: flex;justify-content: space-evenly;align-items: center;background: lightgray;margin:1rem 0;">
            <img src="{{ asset('storage/products/asdasd.jpeg') }}" alt="" width="120">
            <h2>{{$item->model->name}}</h2>
            <p>{{$item->model->price}}</p>
            <form action="">
                <button class="btn" type="submit">Borrar</button>
            </form>
        </div>
        <h4>Subtotal</h4>
        <h3>Total</h3>
        @endforeach
    @else

        <h3>No hay items en el carrito</h3>

    @endif
</div>
    
@endsection
