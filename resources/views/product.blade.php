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


	<section class="container-product">
		<div class="product-main">
			<!--SLIDER DE PRODUCTO-->
			<div class="product-image slider-producto product">
				<div class="item"><img src="{{asset($product->picture)}}" alt=""></div>
			</div>


			<div class="description">
				<h2>{{$product->name}}</h2>
				<p class="price">${{$product->price}}</p>
				<div class="pay">
					<div class="cuotas">
						<i class="far fa-credit-card"></i>
						<p>HASTA 12 CUOTAS</p>
					</div>
					<a href="https://www.mercadopago.com.ar/ayuda/medios-de-pago-cuotas-promociones_264" target="_blank">
						<p>Ver medios de pago</p>
					</a>
				</div>
				<div class="colors">
						<h5>Colores disponibles</h5>
						<div class="circulos">
							<div class="circulo" id="color1"></div>
							<div class="circulo" id="color2"></div>
							<div class="circulo" id="color3"></div>
							<div class="circulo" id="color4"></div>
						</div>
			
						{{-- <input type="submit" value="AGREGAR AL CARRITO" class="submit-btn verde"> --}}
						<form action="{{route('cart.store', $product)}}" method="POST">
							@csrf
							<input type="submit" value="AGREGAR AL CARRITO" class="submit-btn verde">
						</form>
				</div>
			</div>
		</div>

		<div class="product-secondary">
			<p>{{$product->description}}</p>
			<div class="opiniones">
					<h3>Opiniones</h3>
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
					</div>
					<input type="submit" value="VER TODAS LAS OPINIONES" class="submit-btn gris">
			</div>
		</div>

	</section>


	<div class="relacionados">
		<h6>PRODUCTOS RELACIONADOS</h6>
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

	</div>

</div>

@endsection
