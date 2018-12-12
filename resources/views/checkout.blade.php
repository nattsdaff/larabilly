@extends('templates/master')

@section('title', 'm o b i l i • c h e c k o u t')

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
		<div class="item">
            <a href=""><img src="assets/img/deseados/deseados-1.jpg"></a>
            <div class="description">
                <div class="description-sup">
                    <div class="name-price">
                        <div class="name">
                        	<p>Sillón Byron</p>        
                        </div>
                        <p class="total-price">$300</p>
                    </div>
                </div>   
            </div>
        </div>

		<div class="item">
            <a href=""><img src="assets/img/deseados/deseados-1.jpg"></a>
            <div class="description">
                <div class="description-sup">
                    <div class="name-price">
                        <div class="name">
                        	<p>Sillón Byron</p>        
                        </div>
                        <p class="total-price">$300</p>
                    </div>
                </div>   
            </div>
        </div>

		<div class="item">
            <a href=""><img src="assets/img/deseados/deseados-1.jpg"></a>
            <div class="description">
                <div class="description-sup">
                    <div class="name-price">
                        <div class="name">
                        	<p>Sillón Byron</p>        
                        </div>
                        <p class="total-price">$300</p>
                    </div>
                </div>   
            </div>
        </div>

    	<div class="totales">
			<div class="subtotal">Subtotal: $0</div>
			<div class="total">Total: $0</div>
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
		<input type="submit" value="FINALIZAR COMPRA" class="submit-btn verde finalizar-compra">
	</section>

</div>

@endsection