@extends('templates/master')

@section('title', 'm o b i l i • s t o r e')

@section('content')

<div class="container">
  <section class="route products">
    <p>
  		<a href="/">Home</a>>
  		<a href="store">Productos</a>>
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
