@extends('templates/master')

@section('title', 'm o b i l i • Shop')

@section('content')

<div class="container">

  <section class="breadcrumb">
      <a href="/" class="alt-a">Home</a>
      <p> > Productos</p>
  		{{-- <p href="{{route('shop.index')}}" class="alt-a">Productos</p> --}}
      {{-- <p class="product-name">> {{$product->category}}</p> --}}
  </section>
  
  <section class="shop-header">
    <h2>Productos</h2>
    <form class="" action="" method="post">
        <select>
          <option value="">Ordenar por</option>
        </select>
      </form>
  </section>

  <section class="shop-list">

		@foreach ($products as $product)
			<a href="{{route('shop.product', $product->slug)}}">
					<div class="item">
							<img src="{{asset($product->picture)}}" alt="">
							{{-- <p class="product-name">VOLK</p> --}}
							<p class="name">{{$product->name}}</p>
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
