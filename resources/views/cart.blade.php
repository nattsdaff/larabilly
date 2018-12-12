@extends('templates/master')
    
@section('title', 'm o b i l i - Carrito')

@section('content')

	<div class="container">

        @if (session()->has('success'))
            <p style="text-align:center;" class="alert">{{ session()->get('success') }}</p>
        @endif

        <div class="title"><h2 class="alt-title center">MI CARRITO</h2></div>

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
                                    </div>
                                    <p class="price">${{$item->model->price}}</p>
                                </div>
                                {{-- <p class="unit-price">${{$item->model->price}}</p> --}}
                            </div>

                            {{-- <div class="units">
                                <a href="#"><div class="cantidad">-</div></a>
                                <div class="cantidad numero">1</div>
                                <a href="#"><div class="cantidad">+</div></a>
                            </div>
 --}}
                            <div class="cart-actions">
                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" alt="Eliminar"><i class="far fa-trash-alt"></i></button>
                                </form>

                                <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                    @csrf
                                    <button type="submit" alt="Mover a deseados"><i class="far fa-heart" style="font-size: 2em;"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
        </section>

        {{-- <section class="items-desktop">
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
        </section> --}}

        <section class="totales">
            <p>{{ Cart::count() }} item(s) en el carrito</p>
             
            <div class="subtotal">Subtotal: ${{ Cart::subtotal() }} <br><br> IVA (21%): ${{ Cart::tax() }}</div>
            <div class="total">Total: ${{ Cart::total() }}</div>
        
			<div class="botones-compra">
				<a href="{{route('checkout.index')}}" class="submit-btn verde">Iniciar Compra</a>
				<a href="{{route('shop.index')}}" class="alt-a" style="margin: 2rem 0;">Seguir comprando</a>
			</div>
        </section>

        @else
            <h3>No hay items en el carrito</h3>
            <a href="{{route('shop.index')}}" class="btn verde">Volver a la tienda</a>
        @endif
        
        <div class="title"><h3 class="alt-title center">Productos Deseados</h2></div>

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
            <p>No hay productos en su lista de Deseados</p>
        @endif

	</div>

@endsection
