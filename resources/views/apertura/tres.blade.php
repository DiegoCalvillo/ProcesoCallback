
@extends('layouts.principal')
<script type="text/javascript">
	function option9(score_nps)
	{
		if(score_nps >= 9){
			document.getElementById("P1E9").style.display = "block";
			document.getElementById("P2E9").style.display = "none";
			document.getElementById("P10").style.display = "none";
			document.getElementById("PS10").style.display = "none";
			document.getElementById("PN10").style.display = "none";
			document.getElementById("P1S10").style.display = "none";
			document.getElementById("P1N10").style.display = "none";
		}
		else if(score_nps <= 8){
			document.getElementById("P2E9").style.display = "block";
			document.getElementById("P10").style.display = "block";
			document.getElementById("P1E9").style.display = "none";
		}
	}

	function option10(dato)
	{
		if(dato == "Si"){
			document.getElementById("PS10").style.display = "block";
			document.getElementById("PN10").style.display = "none";
			document.getElementById("P1S10").style.display = "none";
			document.getElementById("P1N10").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("PN10").style.display = "block";
			document.getElementById("PS10").style.display = "none";
		}
	}

	function optionalter10(dato)
	{
		if(dato == "Si"){
			document.getElementById("P1S10").style.display = "block";
			document.getElementById("P1N10").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P1N10").style.display = "block";
			document.getElementById("P1S10").style.display = "none";
		}
	}

	function option1alter10(dato)
	{

	}
</script>
@section('title', '- NPS')

@section('content_nps')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<!--Pregunta 9-->
			<div class="col-lg-12" style="display: block;" id="P9">
			@include('alerts.sucess')
				<h1>Encuesta NPS</h1>
				<p>9.- Me alegra que <em>(mencionar motivo de insatisfacción)</em> haya quedado resuelto ahora permitale preguntarle: En la escala del 1 al 10, donde 1 es muy poco probable y 10 es muy probable ¿que tán probable es 	que Usted recomiende la marca Telcel a un amigo o familiar?</p>
				<div class="col-lg-6">
					<select class="form-control" name="score_nps" id="score_nps" 	onchange="option9(this.value)">
						<option selected="true" disabled="disabled">Seleccione</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>
			</div>
			<!--FIN Pregunta 9-->
	
			<!--Respuesta que se despliega del 9 y 10-->
			<div class="col-lg-12" style="display: none;" id="P1E9">
				<b>Si la respuesta es 9 o 10</b>
				<p>Me alegra que esté satisfecho con nuestro servicio, por mi parte sería todo <em>(mencionar nombre del usuario)</em>. Gracias por elegir 	Telcel y que tenga buen día.</p>		
				<a class="btn btn-default" href="/categorias-nps">Guardar y elegir categoría</a>
			</div>
			<!--FIN Respuesta que se despliega del 9 y 10-->
	
			<!--Respuesta que se despliega en 8 o menos-->
			<div class="col-lg-12" style="display: none;" id="P2E9">
				<b>Si la respuesta es 8 o menor</b>
				<p>Lamento escuchar eso <em>(Mencionar nombre de usuario)</em>, nos interesa mejorar la percepción de Telcel ¿que podría hacer para que nos califique con 9 o 10?</p>
				<em>Esperar respuesta del Usuario.</em>
			</div>
			<!--FIN Respuesta que se despliega en 8 o menos-->
	
			<!--Pregunta 10-->
			<div class="col-lg-12" style="display: none;" id="P10">
				<font color="#1F8D3D">
					<p>10.- <em>Intenta solucionar la inconformidad del usuario y al final repite el <a href="/encuesta_ir"><b>paso 8</b></a></em></p>
					<em>¿Se resolvió?</em>
					<p><input type="radio" name="option10" value="Si" onchange="option10(this.value)"><b>Si:</b></p>
					<p><input type="radio" name="option10" value="No" onchange="option10(this.value)"><b>No:</b></p>
				</font>
			</div>
			<!--FIN Pregunta 10-->
	
			<!--Afirmativo de la primera pregunta alterna de la pregunta 10-->
			<div class="col-lg-6" style="display: none; margin-left: 80px;" id="PS10">
				<font color="#1F8D3D">
					<p> Me alegra haber podido ayudarle hoy con <em>(Repetir todos los motivos de contacto)</em>, por mi parte sería todo <em>(	Mencionar nombre de usuario)</em>. Gracias por elegir Telcel y que 	tenga un buen día.</p>
					<a href="/categorias-nps" class="btn btn-default">Guardar y elegir 	categoría</a>
				</font>
			</div>
			<!--FIN Afirmativo de la primera pregunta alterna de la pregunta 10-->
	
			<!--Negativa a la primera pregunta alterna de la pregunta 10-->
			<div class="col-lg-6" style="display: none; margin-left: 80px;" id="PN10">
				<font color="#1F8D3D">
					<p><em>(Mencionar nombre de usuario)</em>, lamento que la solución que le ofrezco no sea de su entera satisfacción, ¿Le 	interesaría que lo comunique con mi supervisor para que nos apoye 	revisando este caso, estaría de acuerdo?</p>
					<p><input type="radio" name="optionalter10" value="Si" onchange="optionalter10(this.value)"><b>Si:</b></p>
					<p><input type="radio" name="optionalter10" value="No" onchange="optionalter10(this.value)"><b>No:</b></p>	
				</font>
			</div>
			<!--FIN Negativa a la primera pregunta alterna de la pregunta 10-->
	
			<!--Afirmativo a la segunda pregunta alterna de la pregunta 10-->
			<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P1S10">
				<font color="#1F8D3D">
					<p>Permítame un momento mientras lo comunico</p>
					<a href="/categorias-nps" class="btn btn-default">Guardar y elegir categoría</a>
				</font>
			</div>
			<!--FIN Afirmativo a la segunda pregutna alterna de la pregunta 10-->
	
			<!--Negativo a la segunda pregunta alterna de la pregunta 10-->
			<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P1N10">
				<font color="#1F8D3D">
					<p>De acuerdo <em>(Mencionar nombre del usuario)</em>, entonces de mi parte sería todo, muchas gracias por su tiempo y que 	tenga buen día.</p>
					<a href="/categorias-nps" class="btn btn-default">Guardar y elegir categoría</a>
				</font>
			</div>
			<!--FIN Negativo a la segunda pregunta alterna de la pregunta 10-->
		</div>
	</div>
	@section('sidebar')
		@parent
		<a href="javascript:history.back()" class="btn btn-default">Regresar a anterior</a>
	@stop
</div>

@stop