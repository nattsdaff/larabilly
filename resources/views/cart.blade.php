@extends('templates/master')
    
@section('title', 'm o b i l i - Carrito')

@section('content')

	<div class="container">

        @if (session()->has('success'))
            <h4>{{ session()->get('success') }}</h4>
        @endif

        <div class="title"><h2 class="alt-title">MI CARRITO</h2></div>

        @if (Cart::count() > 0)

		<section class="title">
			<div class="producto-subtotal">
				<p>PRODUCTO</p>
				<p>SUBTOTAL</p>
			</div>
		</section>

		<section class="items">
                @foreach (Cart::content() as $item)
                    <div class="item">
                        <a href="{{route('shop.product', $item->model->slug)}}"><img src="{{ asset($item->model->picture) }}"></a>
                        <div class="description">
                            <div class="description-sup">
                                <div class="name-price">
                                    <div class="name">
                                        <p>{{$item->model->name}}</p>
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                    <p class="total-price">${{$item->model->price}}</p>
                                </div>
                                <p class="unit-price">${{$item->model->price}}</p>
                            </div>

                            <div class="units">
                                <a href="#"><div class="cantidad">-</div></a>
                                <div class="cantidad numero">1</div>
                                <a href="#"><div class="cantidad">+</div></a>
                            </div>

                            <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                @csrf
                                <button type="submit">Mover a Productos Deseados</button>
                            </form>
                        </div>
                    </div>
                @endforeach
        </section>

        <section class="totales">
            <p>{{ Cart::count() }} item(s) en el carrito</p>
             
            <div class="subtotal">Subtotal: ${{ Cart::subtotal() }} <br> IVA (21%): ${{ Cart::tax() }}</div>
            <div class="total">Total: ${{ Cart::total() }}</div>
        
			<div class="botones-compra">
				<a href="{{route('checkout.index')}}" class="submit-btn verde">Iniciar Compra</a>
				<a href="{{route('shop.index')}}"><p>Seguir comprando</p></a>
			</div>
        </section>

        @else
            <h3>No hay items en el carrito</h3>
            <a href="{{route('shop.index')}}" class="btn verde">Volver a la tienda</a>
        @endif
        
        <div class="title"><h2 class="alt-title">Productos Deseados</h2></div>

        @if (Cart::instance('saveForLater')->count() > 0)

            <p>{{ Cart::instance('saveForLater')->count() }} item(s) en su lista de Deseados</p>

        <section class="items">
                @foreach (Cart::instance('saveForLater')->content() as $deseado)
                    <div class="item">
                        <a href="{{route('shop.product', $deseado->model->slug)}}"><img src="{{ asset($deseado->model->picture) }}"></a>
                        <div class="description">
                            <div class="description-sup">
                                <div class="name-price">
                                    <div class="name">
                                        <p>{{$deseado->model->name}}</p>
                                        <form action="{{ route('saveForLater.destroy', $deseado->rowId) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn" type="submit"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                    <p class="total-price">${{$deseado->model->price}}</p>
                                </div>
                                <p class="unit-price">${{$deseado->model->price}}</p>
                            </div>

                            <form action="{{ route('saveForLater.switchToCart', $deseado->rowId) }}" method="POST">
                                @csrf
                                <button type="submit">Mover al Carrito</button>
                            </form>

                        </div>
                    </div>
                @endforeach
        </section>

        @else
            <h3>No hay productos en su lista de Deseados</h3>
        @endif

	</div>

@endsection
