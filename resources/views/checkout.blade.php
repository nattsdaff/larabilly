@extends('templates/master')

@section('title', 'm o b i l i • Checkout')

@section('stripe')
	<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')

<div class="container">

        <div class="title"><h2 class="alt-title center">Envío y Pago</h2></div>
	
	<div class="showroom-items">
		<section class="showroom">
		<h3 style="margin-top:5rem;">RETIRO EN SHOWROOM</h3>
		<p>Seleccioná un local por donde preferís retirar tu producto.</p>
		<h4>LOCALES</h4>
		<form>
			<select>
				<option value="">THAMES 2323 - CABA</option>
			</select>
		</form>
	</section>

	

	<section class="medios-de-pago">
		<h3 style="margin-top:5rem;">MEDIO DE PAGO</h3>
		<form>
			<div class="medio-de-pago">
				<input type="radio" name="pago" value="efectivo"><p>Quiero abonar en efectivo al retirar</p>
			</div>

			<div class="medio-de-pago">
				<input type="radio" name="pago" value="mercado-pago"><p>Quiero abonar con MercadoPago</p>
			</div>
		</form>
		<img src="assets/img/pago/mercado-pago.png">
	</section>
	
</div>
		<div style="margin-top:4rem;display: flex;justify-content: center;">
			<form action="{{route('checkout.store')}}" method="POST">
				@csrf
				<input type="submit" value="FINALIZAR COMPRA" class="submit-btn verde finalizar-compra">
			</form>
		</div>

@endsection