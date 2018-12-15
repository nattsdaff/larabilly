@extends('templates/master')

@section('title', 'm o b i l i • '.$product->name)

@section('content')

<div class="container">

	<section class="breadcrumb">
		<a href="/" class="alt-a">Home</a>
		<p class="product-name"> > </p>
			<a href="{{route('shop.index')}}" class="alt-a">Productos</a>
		<p class="product-name">> {{$product->name}}</p>
	</section>

	<section class="product">
		<div class="product-main">
			<!--SLIDER DE PRODUCTO-->
			<div class="product-image slider-producto product">
				<div class="item"><img src="{{asset($product->picture)}}" alt=""></div>
			</div>


			<div class="description">
				<h2>{{$product->name}}</h2>
				<p class="price">${{$product->price}}</p>
				<div class="payment">
					<p><i class="far fa-credit-card"></i> HASTA 12 CUOTAS <a href="https://www.mercadopago.com.ar/ayuda/medios-de-pago-cuotas-promociones_264" target="_blank" class="alt-a">Ver medios de pago
					</a></p>
					{{-- <div class="cuotas">
					</div> --}}
					
				</div>
				{{-- <div class="colors">
					<h5>Colores disponibles</h5>
					<div class="circulos">
						<div class="circulo" id="color1"></div>
						<div class="circulo" id="color2"></div>
						<div class="circulo" id="color3"></div>
						<div class="circulo" id="color4"></div>
					</div>
				</div> --}}
				<form action="{{route('cart.store', $product)}}" method="POST">
					@csrf
					<input type="submit" value="AGREGAR AL CARRITO" class="submit-btn verde">
				</form>
			</div>
			
		</div>

		<div class="product-aside">
			<p>{{$product->description}}</p>
			<div class="reviews">
					<h3 class="alt-title">Opiniones</h3>
					<div class="opinion">
						<div class="estrellas">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
							<h6 class="opinion-nombre">Damián</h6>
							<p class="comentario">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<a href="#" class="alt-a">Ver todas las opiniones</a>
							{{-- <input type="submit" value="VER TODAS LAS OPINIONES" class="submit-btn gris"> --}}
					</div> 
			</div>
		</div>

	</section>

	<section class="related">
		<h3 class="alt-title">PRODUCTOS RELACIONADOS</h3>
		<section class="shop-list">

			<a href="{{route('shop.product', 'catre-napper')}}">
				<div class="item">
					<img src="/assets/img/deseados/deseados-3.jpg" alt="">
					{{-- <p class="product-name">VOLK</p> --}}
					<p class="name">CATRE NAPPER</p>
					<p class="price">$13000</p>
				</div>
			</a>
			<a href="{{route('shop.product', 'sillon-byron')}}">
				<div class="item">
					<img src="/assets/img/deseados/deseados-4.jpg" alt="">
					{{-- <p class="product-name">VOLK</p> --}}
					<p class="name">SILLÓN BYRON</p>
					<p class="price">$8500</p>
				</div>
			</a>
			<a href="{{route('shop.product', 'banquito-eco')}}">
				<div class="item">
					<img src="/assets/img/deseados/deseados-5.jpg" alt="">
					{{-- <p class="product-name">VOLK</p> --}}
					<p class="name">BANQUITO ECO</p>
					<p class="price">$5350</p>
				</div>
			</a>
			
		</section>
		
		{{-- <div class="related-products">
			<a href="/product">
				<div class="relacionado">
					<img src="assets/img/deseados/deseados-1.jpg" alt="">
					<p class="product-name">VOLK</p>
					<p>ST. CHARLES DESK</p>
					<p class="price">$7500</p>
				</div>
			</a>
			<a href="/product">
				<div class="relacionado">
					<img src="assets/img/deseados/deseados-2.jpg" alt="">
					<p class="product-name">ABC</p>
					<p>NEW YORK SEDIA VELVET DINING ARM CHAIR</p>
					<p class="price">$8000</p>
				</div>
			</a>
			<a href="/product">
				<div class="relacionado">
					<img src="assets/img/deseados/deseados-1.jpg" alt="">
					<p class="product-name">VOLK</p>
					<p>ST. CHARLES DESK</p>
					<p class="price">$7500</p>
				</div>
			</a>
			<a href="/product">
				<div class="relacionado">
					<img src="assets/img/deseados/deseados-2.jpg" alt="">
					<p class="product-name">ABC</p>
					<p>NEW YORK SEDIA VELVET DINING ARM CHAIR</p>
					<p class="price">$8000</p>
				</div>
			</a>
		</div> --}}
	</section>

</div>

@endsection
