@extends('templates/master')

@section('title', 'm o b i l i • Checkout')

@section('stripe')
	<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')

<div class="container">

	<h2>Envío y pago</h2>
	
	<div class="showroom-items">
		<section class="showroom">
		<h3 class="alt-title">RETIRO EN SHOWROOM</h3>
		<p>Seleccioná un local por donde preferís retirar tu producto.</p>
		<h4>LOCALES</h4>
		<form>
			<select>
				<option value="">THAMES 2323 - CABA</option>
			</select>
		</form>
	</section>

	<section class="items checkout">
		@foreach (Cart::content() as $item)
			<div class="item">
				<a href="{{route('shop.product', $item->model->slug)}}"><img src="{{asset($item->model->picture)}}"></a>
				<div class="description">
					<div class="description-sup">
						<div class="name-price">
							<div class="name">
								<p>{{$item->model->name}}</p>
								<p>x{{$item->qty}}</p>     
							</div>
							<p class="total-price">${{$item->model->price}}</p>
						</div>
					</div>   
				</div>
			</div>
		@endforeach

    	<div class="totales">
			<div class="subtotal">Subtotal: ${{Cart::subtotal()}} <br> IVA (21%) ${{Cart::tax()}}</div>
			<div class="total">Total: ${{Cart::total()}}</div>
		</div>

	</section>
	</div>
	

	<section class="medios-de-pago">
		<h3 class="alt-title">MEDIO DE PAGO</h3>
		<form>
			<div class="medio-de-pago">
				<input type="radio" name="pago" value="efectivo"><p>Quiero abonar en efectivo al retirar</p>
			</div>

			<div class="medio-de-pago">
				<input type="radio" name="pago" value="mercado-pago"><p>Quiero abonar con MercadoPago</p>
			</div>
		</form>
		<img src="assets/img/pago/mercado-pago.png">
		<form action="{{route('checkout.store')}}" method="POST">
			@csrf
			<input type="submit" value="FINALIZAR COMPRA" class="submit-btn verde finalizar-compra">
		</form>
	</section>

</div>

@endsection