@extends('templates/master')
    
@section('title', 'm o b i l i - Carrito')

@section('content')

	<div class="container">
		<section class="title">
            @if (session()->has('success'))
                {{ session()->get('success') }}
            @endif
			<h2>MI CARRITO</h2>

			<div class="producto-subtotal">
				<p>PRODUCTO</p>
				<p>SUBTOTAL</p>
			</div>
		</section>

		<section class="items">
            @if (Cart::count() > 0)
                <p>{{ Cart::count() }} item(s) en el carrito</p>
        
                @foreach (Cart::content() as $item)
                    <div class="item">
                        <a href="product"><img src="{{ asset($item->model->picture) }}"></a>
                        <div class="description">
                            <div class="name-price">
                                <div class="name">
                                    <p>{{$item->model->name}}</p>
                                    <form action="#">
                                        <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                                <p>${{$item->model->price}}</p>
                            </div>
                            <p>${{$item->model->price}}</p>
                            <div class="cantidad">
                                <a href="#"><div>-</div></a>
                                <div>1</div>
                                <a href="#"><div>+</div></a>
                            </div>
                        </div>
                    </div>
                @endforeach
             @else
                <h3>No hay items en el carrito</h3>
            @endif

			<div class="totales">
				<div class="subtotal">Subtotal: $300</div>
				<div class="total">Total: $300</div>
			</div>

			<div class="botones-compra">
				<input type="submit" value="INICIAR COMPRA" class="submit-btn verde">
				<a href=""><p>Seguir comprando</p></a>
			</div>
		</section>
	</div>

@endsection
