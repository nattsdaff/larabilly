@extends('templates/master')

@section('title', 'm o b i l i • c a r r i t o')

@section('content')

	<div class="container">
		<section class="title">
			<h2>MI CARRITO</h2>

			<div class="producto-subtotal">
				<p>PRODUCTO</p>
				<p>SUBTOTAL</p>
			</div>
		</section>

		<section class="items">
			<div class="item">
				<a href="product"><img src="assets/img/deseados/deseados-1.jpg"></a>
				<div class="description">
					<div class="name-price">
						<div class="name">
							<p>Sillón Byron</p>
							<a href="#"><i class="far fa-trash-alt"></i></a>
						</div>
						<p>$100</p>
					</div>
					<p>$100</p>
					<div class="cantidad">
						<a href="#"><div>-</div></a>
						<div>1</div>
						<a href="#"><div>+</div></a>
					</div>
				</div>
			</div>

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
