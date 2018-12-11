@extends('templates/master')
@section('title', 'm o b i l i • Mi cuenta')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Mi cuenta</li>
</ol>
@endsection
@section('content')

<section class="micuenta">
        <!-- HOLA, USUARIO       -->
        <div class="container">
            <div class="container-micuenta">
                <div class="info">
                    <h2 class="alt-title">MI CUENTA</h2>
                    <h1>Hola, Marta</h1>
                    <p>Email: {{$datos->email}}</p>
                    <p>Nombre y apellido: {{$datos->first_name}} {{$datos->last_name}}</p>
                    <p>Dni: {{$datos->first_name}}</p>
                    <p>Teléfono: {{$datos->phone}}</p>
                    <p>Fecha de nacimiento: {{$datos->birthday}}</p>
                    <a href="#" class="btn verde">Editar</a><br>
                    <a href="logout.php" class="btn gris-claro">Salir</a><br>
                </div>
                <!-- AVATAR       -->
                <div class="avatar">
                    <form method="POST" action="{{route('profile.store')}}" novalidate class="needs-validation" enctype="multipart/form-data">
                        <input type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" id="picture">
                        @if ($errors->has('picture'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('picture') }}</strong>
                            </span>
                        @endif
                    </form>
                    <img class="avatar" src="{{asset($product->picture)}}" alt="Avatar usuario">
                                        
                    <i class="far fa-smile"></i>
                   
                </div>
            </div>            
        </div>            
    </section>


    <div class="container">
		<section class="title">
            @if (session()->has('success'))
                {{ session()->get('success') }}
            @endif
			<h2 class="alt-title">MI CUENTA</h2>
			<div class="producto-subtotal">
				<p>DATOS PERSONALES</p>
			</div>
		</section>

		<section class="items">
            @if (Cart::count() > 0)
        
                @foreach (Cart::content() as $item)
                    <div class="item">
                        <a href="{{route('shop.product', $item->model->slug)}}"><img src="{{ asset($item->model->picture) }}"></a>
                        <div class="description">
                            <div class="description-sup">
                                <div class="name-price">
                                <div class="name">
                                    <p>{{$item->model->name}}</p>
                                    <form action="#">
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
                        </div>
                    </div>
                @endforeach
        </section>

        <section class="totales">
                <p>{{ Cart::count() }} item(s) en el carrito</p>
             @else
                <h3>No hay items en el carrito</h3>
            @endif

				<div class="subtotal">Subtotal: $300</div>
				<div class="total">Total: $300</div>
		

			<div class="botones-compra">
				<input type="submit" value="INICIAR COMPRA" class="submit-btn verde">
				<a href=""><p>Seguir comprando</p></a>
			</div>
        </section>
		
	</div>

@endsection
