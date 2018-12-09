@extends('templates/master')

@section('title', 'm o b i l i • Shop')

@section('content')

<div class="container">
  <section class="route products">
    <p>
  		<a href="/">Home</a>>
  		<a href="{{route('shop.index')}}">Productos</a>>
    </p>
    <p class="product-name">Living room</p>
  </section>

  <section class="categoria">
    <h1>Living Room</h1>
    <div class="descripcion-orden">
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
      <form class="" action="" method="post">
        <select class="" name="">
          <option value="">Ordenar por</option>
        </select>
      </form>
    </div>
  </section>

  <section class="relacionados">

		@foreach ($products as $product)
			<a href="{{route('shop.product', $product->id)}}">
					<div class="relacionado">
							<img src="{{asset($product->picture)}}" alt="">
							<p class="product-name">VOLK</p>
							<p>{{$product->name}}</p>
							<p class="price">${{$product->price}}</p>
					</div>
			</a>
		@endforeach
    
  </section>

  <section class="features store">
    <div class="features-item">
        <span class="features-icon"><i class="fas fa-shopping-basket"></i></span>
        <h5 class="features-title">Comprá online. Recibí en tienda</h5>
    </div>
    <div class="features-item">
        <span class="features-icon"><i class="fas fa-shipping-fast"></i></span>
        <h5 class="features-title">Servicio de entrega rápido y económico</h5>
    </div>
    <div class="features-item">
        <span class="features-icon"><i class="fas fa-lock"></i></span>
        <h5 class="features-title">Compra fácil y 100% segura</h5>
    </div>
  </section>

</div>

@endsection
