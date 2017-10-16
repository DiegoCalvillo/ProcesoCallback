@extends('layouts.principal')
<script type="text/javascript">
	function option8(dato)
	{
		if(dato == "Si"){
			document.getElementById("PAS8").style.display = "block";
			document.getElementById("PAN8").style.display = "none";
			document.getElementById("P1AN8").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("PAS8").style.display = "none";
			document.getElementById("PAN8").style.display = "block";
		}
	}

	function optionalter8(dato)
	{
		if(dato == "Si"){
			document.getElementById("PAS8").style.display = "none";
			document.getElementById("P1AN8").style.display = "none";
		}
		else{
			location = "http://10.100.40.2:3000/encuesta_nps";
		}
	}

	function option1alter8(dato)
	{
		if(dato == "Si"){
			location = "http://10.100.40.2:3000/encuesta_nps";
		}
		else{
			document.getElementById("P1AN8").style.display = "block";
		}
	}
</script>
@section('title', '- IR')

@section('content_ir')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<!--Pregunta 8-->
			<div class="col-lg-12" style="display: block;" id="P8">
			@include('alerts.sucess')
				<h1>Encuesta IR</h1>
				<p>8.- <em>(Mencionar Nombre del usuario)</em>, ¿diría usted que <em>(mencionar el mótivo de insatisfacción)</em> ha quedadoresuelto?</p>
				<br>
				<em>Ejemplo: ¿Diría Usted que su duda sobre cargos adicionales en su factura del mes de abril quedó resuelta?</em>
				<em>¿Diría Usted que la activación de sus números frecuentes quedó resuelta?</em>
				<p><input type="radio" name="option8" value="Si" onchange="option8(this.value)"><b>Si:</b></p>
				<p><input type="radio" name="option8" value="No" onchange="option8(this.value)"><b>No:</b></p>
			</div>
			<!--FIN Pregunta 8-->
		
			<!--Afirmativo a la primera pregunta alterna de la Pregunta 8-->
			<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PAS8">
				<p>Me alegra escuchar eso <em>(Mencionar el nombre del usuario)</em>, ¿Hay algo más que pueda hacer por usted?</p>
				<p><input type="radio" name="optionalter8" value="Si"><b>Si: </b><em>Resuelve la duda o incoveniente y repite paso 8.</em></p>
				<p><input type="radio" name="optionalter8" value="No" onclick="optionalter8(this.value)"><b>No: </b><em>Prosigue al paso 1 deNPS. La pregunta de NPS se debe realizar después de que el cliente haya confirmado que el motivo de insatisfacción haya quedadoresuelto.</em></p>
			</div>
			<!--FIN Afirmativo a la primera pregunta alterna de la Pregunta 8-->
		
			<!--Negativo de la primera pregunta alterna de la pregunta 8-->
			<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PAN8">
				<p><em>Pide apoyo a supervisor e intenta resolver el inconveniente del usuario.</em></p>
				<em>¿Se resolvió?</em>
				<p><input type="radio" name="option1alter8" value="Si" onclick="option1alter8(this.value)"><b>Si: </b><em>Prosigue al paso 1 deNPS. La pregunta de NPS se debe realizar después de que el cliente haya confirmado que el motivo de insatisfacción haya quedadoresuelto</em></p>
				<p><input type="radio" name="option1alter8" value="No" onclick="option1alter8(this.value)"><b>No: </b><em> Escala la llamada al supervisor.</em></p>
			</div>
			<!--FIN Negativo de la primera pregunta alterna de la pregunta 8-->

			<div class="col-lg-12" style="display: none; margin-left: 88px;" id="P1AN8">
				<a href="/categorias-nps" class="btn btn-default">Guardar y elegir la categoría</a>
			</div>

		</div>
	</div>
	@section('sidebar')
		@parent
		<a href="javascript:history.back()" class="btn btn-default">Regresar a anterior</a>
	@stop
</div>
@stop