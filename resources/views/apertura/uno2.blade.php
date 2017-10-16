@extends('layouts.principal')
<script>
	function option1(dato) //Corresponde a la pregunta 1
	{
		if(dato == "Si") {
			document.getElementById("P2").style.display = "block";
			document.getElementById("P5").style.display = "none";
			document.getElementById("P6").style.display = "none";
			document.getElementById("PAS6").style.display = "none";
			document.getElementById("PAN6").style.display = "none";
			document.getElementById("P1AS6").style.display = "none";
			document.getElementById("P1AN6").style.display = "none";
			document.getElementById("P7").style.display = "none";
			document.getElementById("PAS7").style.display = "none";
			document.getElementById("P1AS7").style.display = "none";
			document.getElementById("P1AN7").style.display = "none";
			document.getElementById("P8").style.display = "none";
			document.getElementById("P2AN7").style.display = "none";
			document.getElementById("P3AN7").style.display = "none";
			document.getElementById("P5AS7").style.display = "none";
			document.getElementById("P5AN7").style.display = "none";
			document.getElementById("PAN7").style.display = "none";
			document.getElementById("P4AS7").style.display = "none";
			document.getElementById("P4AN7").style.display = "none";
		}
		else if(dato == "No") {
			document.getElementById("P5").style.display = "block";
			document.getElementById("P2").style.display = "none";
			document.getElementById("P3").style.display = "none";
			document.getElementById("P4").style.display = "none";
			document.getElementById("PS3").style.display = "none";
			document.getElementById("PN3").style.display = "none";
			document.getElementById("PAS3").style.display = "none";
			document.getElementById("PAN3").style.display = "none";
			document.getElementById("P3SB").style.display = "none";
			document.getElementById("P3NB").style.display = "none";
			document.getElementById("P1AS3").style.display = "none";
			document.getElementById("P1AN3").style.display = "none";
			document.getElementById("P2AS3").style.display = "none";
			document.getElementById("P2AN3").style.display = "none";
			document.getElementById("P3AS3").style.display = "none";
			document.getElementById("P3AN3").style.display = "none";
			document.getElementById("PS4").style.display = "none";
			document.getElementById("PAS4").style.display = "none";
			document.getElementById("PAN4").style.display = "none";
			document.getElementById("P1AS4").style.display = "none";
			document.getElementById("P1AN4").style.display = "none";
			document.getElementById("P2AS4").style.display = "none";
			document.getElementById("P2AN4").style.display = "none";
			document.getElementById("P3AS4").style.display = "none";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4SB").style.display = "none";
			document.getElementById("P4NB").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
	}

	function option2(dato) //Corresponde a la pregunta 2
	{
		if(dato == "Si") {
			document.getElementById("P3").style.display = "block";
			document.getElementById("P4").style.display = "none";
			document.getElementById("PS4").style.display = "none";
			document.getElementById("PAS4").style.display = "none";
			document.getElementById("PAN4").style.display = "none";
			document.getElementById("P1AS4").style.display = "none";
			document.getElementById("P1AN4").style.display = "none";
			document.getElementById("P2AS4").style.display = "none";
			document.getElementById("P2AN4").style.display = "none";
			document.getElementById("P3AS4").style.display = "none";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4SB").style.display = "none";
			document.getElementById("P4NB").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P4").style.display = "block";
			document.getElementById("P3").style.display = "none";
			document.getElementById("PS3").style.display = "none";
			document.getElementById("PN3").style.display = "none";
			document.getElementById("PAS3").style.display = "none";
			document.getElementById("PAN3").style.display = "none";
			document.getElementById("P3SB").style.display = "none";
			document.getElementById("P3NB").style.display = "none";
			document.getElementById("P1AS3").style.display = "none";
			document.getElementById("P2AS3").style.display = "none";
			document.getElementById("P2AN3").style.display = "none";
			document.getElementById("P3AS3").style.display = "none";
			document.getElementById("P3AN3").style.display = "none";
		}
	}

	function option3(dato) //Corresponde a la pregunta 3
	{
		if(dato == "Si"){
			document.getElementById("PS3").style.display = "block";
			document.getElementById("PN3").style.display = "none";
			document.getElementById("P3SB").style.display = "none";
			document.getElementById("P3NB").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("PN3").style.display = "block";
			document.getElementById("PS3").style.display = "none";
			document.getElementById("PAS3").style.display = "none";
			document.getElementById("PAN3").style.display = "none";
			document.getElementById("P1AS3").style.display = "none";
			document.getElementById("P1AN3").style.display = "none";
			document.getElementById("P2AS3").style.display = "none";
			document.getElementById("P2AN3").style.display = "none";
			document.getElementById("P3AS3").style.display = "none";
			document.getElementById("P3AN3").style.display = "none";
			document.getElementById("P3SB").style.display = "none";
			document.getElementById("P3NB").style.display = "none";
		}
	}

	function option3N(dato)
	{
		if(dato == "Si"){
			document.getElementById("P3SB").style.display = "block";
			document.getElementById("P3NB").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P3SB").style.display = "none";
			document.getElementById("P3NB").style.display = "block";
		}
	}

	function optionalter3(dato) //Corresponde a las opciones alternas de la pregunta 3
	{
		if(dato == "Si"){
			document.getElementById("PAS3").style.display = "block";
			document.getElementById("PAN3").style.display = "none";
			document.getElementById("P1AS3").style.display = "none";
			document.getElementById("P1AN3").style.display = "none";
			document.getElementById("P2AS3").style.display = "none";
			document.getElementById("P2AN3").style.display = "none";
			document.getElementById("P3AS3").style.display = "none";
			document.getElementById("P3AN3").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("PAN3").style.display = "block";
			document.getElementById("PAS3").style.display = "none";
		}
	}

	function option1alter3(dato) 
	{
		if(dato == "Si"){
			document.getElementById("P1AS3").style.display = "block";
			document.getElementById("P1AN3").style.display = "none";	
		}
		else if(dato == "No"){
			document.getElementById("P1AN3").style.display = "block";
			document.getElementById("P1AS3").style.display = "none";
			document.getElementById("P2AS3").style.display = "none";
			document.getElementById("P2AN3").style.display = "none";
			document.getElementById("P3AS3").style.display = "none";
			document.getElementById("P3AN3").style.display = "none";
		}
	}

	function option2alter3(dato)
	{
		if(dato == "Si"){
			document.getElementById("P2AS3").style.display = "block";
			document.getElementById("P2AN3").style.display = "none";
			document.getElementById("P3AS3").style.display = "none";
			document.getElementById("P3AN3").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P2AN3").style.display = "block";
			document.getElementById("P2AS3").style.display = "none";
		}
	}

	function option3alter3(dato)
	{
		if(dato == "Si"){
			document.getElementById("P3AS3").style.display = "block";
			document.getElementById("P3AN3").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P3AN3").style.display = "block";
			document.getElementById("P3AS3").style.display = "none";
		}
	}

	function option4(dato) //Corresponde a la pregunta 4
	{
		if(dato == "Si"){
			document.getElementById("PS4").style.display = "block";
			document.getElementById("PN4").style.display = "none";
		}
		else if (dato == "No"){
			document.getElementById("PS4").style.display = "none";
			document.getElementById("PAN4").style.display = "none";
			document.getElementById("P4SB").style.display = "none";
			document.getElementById("P4NB").style.display = "none";
			document.getElementById("PAS4").style.display = "none";
			document.getElementById("P1AS4").style.display = "none";
			document.getElementById("P1AN4").style.display = "none";
			document.getElementById("P2AS4").style.display = "none";
			document.getElementById("P2AN4").style.display = "none";
			document.getElementById("P3AS4").style.display = "none";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
	}

	function optionalter4(dato)
	{
		if(dato == "Si"){
			document.getElementById("PAS4").style.display = "block";
			document.getElementById("PAN4").style.display = "none";
			document.getElementById("P4SB").style.display = "none";
			document.getElementById("P4NB").style.display = "none";	
		}
		else if(dato == "No"){
			document.getElementById("PAN4").style.display = "block";
			document.getElementById("PAS4").style.display = "none";
			document.getElementById("P1AS4").style.display = "none";
			document.getElementById("P1AN4").style.display = "none";
			document.getElementById("P2AS4").style.display = "none";
			document.getElementById("P2AN4").style.display = "none";
			document.getElementById("P3AS4").style.display = "none";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
	}

	function option1alter4(dato)
	{
		if(dato == "Si"){
			document.getElementById("P1AS4").style.display = "block";
			document.getElementById("P1AN4").style.display = "none";
			document.getElementById("P2AN4").style.display = "none";
			document.getElementById("P2AS4").style.display = "none";
			document.getElementById("P3AS4").style.display = "none";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P1AN4").style.display = "block";
			document.getElementById("P1AS4").style.display = "none";
		}
	}

	function option2alter4(dato)
	{
		if(dato == "Si"){
			document.getElementById("P2AS4").style.display = "block";
			document.getElementById("P2AN4").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P2AN4").style.display = "block";
			document.getElementById("P2AS4").style.display = "none";
			document.getElementById("P3AS4").style.display = "none";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
	}

	function option3alter4(dato)
	{
		if(dato == "Si"){
			document.getElementById("P3AS4").style.display = "block";
			document.getElementById("P3AN4").style.display = "none";
			document.getElementById("P4AS4").style.display = "none";
			document.getElementById("P4AN4").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P3AN4").style.display = "block";
			document.getElementById("P3AS4").style.display = "none";
		}
	}

	function option4alter4(dato)
	{
		if(dato == "Si"){
			document.getElementById("P4AS4").style.display = "block";
			document.getElementById("P4AN4").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P4AN4").style.display = "block";
			document.getElementById("P4AS4").style.display = "none";
		}
	}

	function option1alter4N(dato) //Corresponde a la respuesta negativa de la pregunta 4
	{
		if(dato == "Si"){
			document.getElementById("P4SB").style.display = "block";
			document.getElementById("P4NB").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P4NB").style.display = "block";
			document.getElementById("P4SB").style.display = "none";
		}
	}

	function option5(dato) //Corresponde a la pregunta 5
	{
		if(dato == "Si"){
			document.getElementById("P6").style.display = "block";
			document.getElementById("P7").style.display = "none";
			document.getElementById("PAS7").style.display = "none";
			document.getElementById("PAN7").style.display = "none";
			document.getElementById("P1AS7").style.display = "none";
			document.getElementById("P1AN7").style.display = "none";
			document.getElementById("P2AN7").style.display = "none";
			document.getElementById("P3AN7").style.display = "none";
			document.getElementById("P4AS7").style.display = "none";
			document.getElementById("P4AN7").style.display = "none";
			document.getElementById("P5AS7").style.display = "none";
			document.getElementById("P5AN7").style.display = "none";
			document.getElementById("P8").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P7").style.display = "block";
			document.getElementById("P6").style.display = "none";
			document.getElementById("PAS6").style.display = "none";
			document.getElementById("PAN6").style.display = "none";
			document.getElementById("P1AS6").style.display = "none";
			document.getElementById("P1AN6").style.display = "none";
		}
	}

	function option6(dato)
	{
		if(dato == "Si"){
			document.getElementById("PAS6").style.display = "block";
			document.getElementById("PAN6").style.display = "none";
			document.getElementById("P1AS6").style.display = "none";
			document.getElementById("P1AN6").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("PAN6").style.display = "block";
			document.getElementById("PAS6").style.display = "none";
		}
	}

	function optionalter6(dato)
	{
		if(dato == "Si"){
			document.getElementById("P1AS6").style.display = "block";
			document.getElementById("P1AN6").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P1AN6").style.display = "block";
			document.getElementById("P1AS6").style.display = "none";
		}
	}

	function option7(dato)
	{
		if(dato == "Si"){
			document.getElementById("PAS7").style.display = "block";
			document.getElementById("PAN7").style.display = "none";
			document.getElementById("P4AS7").style.display = "none";
			document.getElementById("P4AN7").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("PAN7").style.display = "block";
			document.getElementById("PAS7").style.display = "none";
			document.getElementById("P1AS7").style.display = "none";
			document.getElementById("P1AN7").style.display = "none";
			document.getElementById("P2AN7").style.display = "none";
			document.getElementById("P3AN7").style.display = "none";
			document.getElementById("P5AS7").style.display = "none";
			document.getElementById("P5AN7").style.display = "none";
			document.getElementById("P8").style.display = "none";
		}
	}

	function optionalter7(dato)
	{
		if(dato == "Si"){
			document.getElementById("P1AS7").style.display = "block";
			document.getElementById("P1AN7").style.display = "none";
			document.getElementById("P5AS7").style.display = "none";
			document.getElementById("P5AN7").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P1AN7").style.display = "block";
			document.getElementById("P1AS7").style.display = "none";
			document.getElementById("P2AN7").style.display = "none";
			document.getElementById("P3AN7").style.display = "none";
			document.getElementById("P8").style.display = "none";
		}
	}

	function option1alter7(dato)
	{
		if(dato == "Si"){
			location = "http://10.100.40.2:3000/encuesta_ir";
			document.getElementById("P2AN7").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P2AN7").style.display = "block";
			document.getElementById("P8").style.display = "none";
		}
	}

	function option2alter7(dato)
	{
		if(dato == "Si"){
			location = "http://10.100.40.2:3000/encuesta_ir";
			document.getElementById("P3AN7").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P3AN7").style.display = "block";
			document.getElementById("P8").style.display = "none";
		}
	}

	function option3alter7(dato)
	{
		if(dato == "Si"){
			document.getElementById("P4AS7").style.display = "block";
			document.getElementById("P4AN7").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P4AN7").style.display = "block";
			document.getElementById("P4AS7").style.display = "none";
		}
	}

	function option4alter7(dato)
	{
		if(dato == "Si"){
			document.getElementById("P5AS7").style.display = "block";
			document.getElementById("P5AN7").style.display = "none";
		}
		else if(dato == "No"){
			document.getElementById("P5AN7").style.display = "block";
			document.getElementById("P5AS7").style.display = "none";
		}
	}

</script>

@section('title', '- Apertura')

@section('content_apertura')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
		<!--Pregunta 1-->
			<div class="col-lg-12" id="P1">
			@include('alerts.sucess')
				<h1>Apertura.</h1>
				<p>1.- <em>¿Tiene folio pendiente de resolución?</em></p>
				<p><input type="radio" id="1" name="option1" value="Si" onchange="option1(this.value);"> <b>Si:</b> contacta al usuario y continua con el paso 2</p>
				<p><input type="radio" id="2" name="option1" value="No" onchange="option1(this.value);"> <b>No:</b> contacta al usuario y continua con el paso 5</p>
			</div>
		<!--FIN de la pregunta 1-->	

		<!--Pregunta 2-->
			<div class="col-lg-12" style="display: none;" id="P2">
				<font color="#1F618D">
					<p>2.- Hola <em>(buenos dias, buenas tardes, buenas noches)</em>. Mi nombre es: <em>{!! Auth::user()->name !!}</em> del departamento de Calidad de Telcel, ¿tengo el gusto con el Sr. (Srita.) <em>(menciona el nombre del usuario)?</em></p>
					<p><em>Esperar respuesta del usuario.</em></p>
					<p><input type="radio" id="1" name="option2" value="Si" onchange="option2(this.value);"> <b>Si:</b> 
					<p><input type="radio" id="2" name="option2" value="No" onchange="option2(this.value);"> <b>No:</b>
				</font>
			</div>
		<!--FIN de la pregunta 2-->
		
		<!--Pregunta 3-->	
			<div class="col-lg-12" style="display: none;" id="P3">
				<font color="#1F8D3D">
					3.- <b>Si.</b><p>Mucho gusto, le llamo en relación con la llamada que Usted hizo al *111 el <em>(Especificar Fecha de llamada)</em>, me percaté que no quedó muy satisfech@ con el servicio que le proporcionamos y me gustaría platicar con usted al respecto ¿Es este un buen momento para tomar mi llamada?</p>
					<p><em>Esperar respuesta del usuario.</em></p>
					<p><input type="radio" id="1" name="option3" value="Si" onchange="option3(this.value);"> <b>Si:</b> ¿El folio ya fue cerrado?</p> 
					<p><input type="radio" id="2" name="option3" value="No" onchange="option3(this.value);"> <b>No:</b> ¿Cuando sería mas conveniente para usted?</p>
				</font>
			</div>
		<!--FIN de la pregunta 3-->

		<!--Afirmativo de la pregunta 3-->
		<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PS3">
			<font color="#1F8D3D">
				<p><em>Esperar respuesta del usuario</em></p>
				<p><input type="radio" id="1" name="optionalter3" value="Si" onchange="optionalter3(this.value)"><b>Si:</b></p>
				<p><input type="radio" id="2" name="optionalter3" value="No" onchange="optionalter3(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN del Afirmativo de la pregunta 3-->
		
		<!--Afirmativo pregunta alterna 3-->
		<div class="col-lg-12" style="display: none; margin-left: 130px;" id="PAS3">
			<font color="#1F8D3D">
				<p>Sr. (Srita) <em>(Mencionar Nombre del usuario)</em>, le contacto para informarle que: <em>(Explicar respuesta del Folio)</em></p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo pregunta alterna 3-->

		<!--Negativa pregunta alterna 3-->
		<div class="col-lg-12" style="display: none; margin-left: 130px;" id="PAN3">
			<font color="#1F8D3D">
				<p>Sr. (Srita) <em>(Mencionar el nombre del usuario)</em>, dandole seguimiento al folio <em>(mencionar numero de folio)</em> le contacto para informarle que aún no tenemos repsuesta, sin embargo, estaré al pendiente para comunicarnos con usted tan pronto tengamos una respuesta <em>(Explicar tipo de folio y tiempo de solución)</em>. Mientras tanto, <b>¿hay algo mas que pueda hacer por usted?</b></p>
				<p><input type="radio" id="1" name="option1alter3" value="Si" onchange="option1alter3(this.value)"><b>Si:</b></p>
				<p><input type="radio" id="2" name="option1alter3" value="No" onchange="option1alter3(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN Negativa pregunta alterna 3-->

		<!--Afirmativo de la segunda pregunta alterna de la pregunta 3-->
		<div class="col-lg-12" style="display: none; margin-left: 180px;" id="P1AS3">
			<font color="#1F8D3D">
				<p><em> Resuelve la duda o incoveniente del usuario</em></p>
				<b>¿Se resolvió?</b>
				<p><input type="radio" name="option2alter3" value="Si" onchange="option2alter3(this.value)"><b>Si:</b></p>
				<p><input type="radio" name="option2alter3" value="No" onchange="option2alter3(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN Afirmativo de la segunda pregutna alterna de la pregunta 3-->

		<!--Negativa de la segunda pregunta alterna de la pregunta 3-->
		<div class="col-lg-12" style="display: none; margin-left: 180px;" id="P1AN3">
			<font color="#1F8D3D">
				<p><em>Cierra la llamada</em></p>
			</font>
			<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
		</div>
		<!--FIN Negativa de la segunda pregunta alterna de la pregunta 3-->

		<!--Afirmativo de la tercera pregunta alterna de la pregunta 3-->
		<div class="col-lg-6" style="display: none; margin-left: 230px;" id="P2AS3">
			<font color="#1F8D3D">
				<p>De acuerdo <em>(Mencionar Nombre del usuario)</em>, entonces como acordamos, yo le estaría marcando cuando tenga respuesta de su folio, de mi parte sería todo, muchas gracias por su tiempo y que tenga buen día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la tercera pregunta alterna de la pregunta 3-->

		<!--Negativa de la tercera pregunta alterna de la pregunta 3-->
		<div class="col-lg-12" style="display: none; margin-left: 230px;" id="P2AN3">
			<font color="#1F8D3D">
				<p><em> Pide apoyo al supervisor e intenta resolver el incoveniente del usuario.</em></p>
				<b><em>¿Se resolvió?</em></b>
				<p><input type="radio" name="option3alter3" value="Si" onchange="option3alter3(this.value)"><b>Si:</b></p>
				<p><input type="radio" name="option3alter3" value="No" onchange="option3alter3(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN Negativa de la tercera pregunta alterna de la pregunta 3-->

		<!--Afirmativo de la cuarta pregunta alterna de la pregunta 3-->
		<div class="col-lg-6" style="display: none; margin-left: 280px;" id="P3AS3">
			<font color="#1F8D3D">
				<p>De acuerdo <em>(Mencionar el nombre del usuario)</em> entonces como acordamos, yo le estaría marcando cuando tenga respuesta de su folio, de mi parte sería todo, muchas gracias por su tiempo y que tenga buen día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la cuarta pregunta alterna de la pregunta 3-->

		<!--Negativa de la cuarta pregunta alterna de la pregunta 3-->
		<div class="col-lg-12" style="display: none; margin-left: 280px;" id="P3AN3">
			<font color="#1F8D3D">
				<p><em>Escala la llamada al Supervisor.</em></p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa de la cuarta pregunta alterna de la pregunta 3-->

		<!--Negativa de la pregunta 3-->	
			<div class="col-lg-6" style="display: none; margin-left: 80px;" id="PN3">
				<font color="#1F8D3D">
					<p><em>Esperar respuesta del usuario</em></p>
					<p><input type="radio" name="option4" value="Si" onchange="option3N(this.value)"><b>Proporciona dia y hora:</b></p>
					<p><input type="radio" name="option4" value="No" onchange="option3N(this.value)"><b>Se rehusa a tomar la llamada:</b></p>
				</font>	
			</div>
		<!--FIN de la Negativa de la pregunta 3-->	

		<!--Opción Proporciona dia y hora-->
		<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P3SB">
			<font color="#1F8D3D">
				<p>Muy bien, entonces yo me estaría comunicando con Usted <em>(repetir el tiempo y hora)</em>. Le agradezco haberme dado un poco de su tiempo Sr. (Srta)<em>(Mencionar Nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Opción Proporciona dia y hora-->

		<!--Opción Se rehusa tomar la llamada-->
		<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P3NB">
			<font color="#1F8D3D">
				<p>En ese caso no le molesto más, le agradezco haberme dado un poco de su tiempo Sr. (Srta) <em>(Mencionar Nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Opción Se rehusa tomar la llamada-->

		<!--Pregunta 4-->
			<div class="col-lg-12" style="display: none;" id="P4">
				<font color="#1F8D3D">
					<p>4.- <b>No:</b> ¿Es Usted el usuario de esta línea?</p>
					<p><input type="radio" name="option5" value="Si" onchange="option4(this.value)"><b>Si:</b></p>
					<p><input type="radio" name="option5" value="No" onchange="option4(this.value)"><b>No:</b></p>
				</font>
			</div>
		<!--FIN de la pregunta 4-->	

		<!--Afirmativo a la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PS4">
			<font color="#1F8D3D">
				<p>Mucho gusto, le llamo en atención a la llamada que Usted hizo al *111 el <em>(Especificar Fecha de llamada)</em>, me percaté que no quedó satisfech@ con el servicio que le proporcionamos y me gustaría platicar con usted al respecto. ¿Es este un buen momento para tomar mi llamada?</p>
				<p><input type="radio" name="optionalter4" value="Si" onchange="optionalter4(this.value)"><b>Si:</b> ¿El folio ya fue cerrado?</p>
				<p><input type="radio" name="optionalter4" value="No" onchange="optionalter4(this.value)"><b>No:</b> ¿Cuando sería mas conveniente para usted?</p>
			</font>
		</div>
		<!--FIN Afirmativo a la pregunta 4-->

		<!--Afirmativo de la pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 130px;" id="PAS4">
			<font color="#1F8D3D">
				<p><em>Esperar respuesta del usuario</em></p>
				<p><input type="radio" name="option1alter4" value="Si" onchange="option1alter4(this.value)"><b>Si:</b></p>
				<p><input type="radio" name="option1alter4" value="No" onchange="option1alter4(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN Afirmativo de la pregunta alterna de la pregunta 4-->

		<!--Afirmativo de la segunda pregutna alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 180px;" id="P1AS4">
			<font color="#1F8D3D">
				<p>Sr. (Srta)<em>(Mencionar Nombre de Usuario)</em>, le contacto para informarle que <em>(Explicar respuesta del folio)</em>.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la segunda pregunta alterna de la pregunta 4-->

		<!--Negativa de la segunda pregutna alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 180px;" id="P1AN4">
			<font color="#1F8D3D">
				<p>Sr. (Srta)<em> (Mencionar Nombre de usuario)</em>, dandole seguimiento al folio <em>(mencionar numero de folio)</em> le contacto para informarle que aún no tenemos respuesta, sin embargo,</p><p> estaré al pendiente para comunicarnos con usted tan pronto tengamos una respuesta. <em>(Explicar tipo de folio y tiempo de solución)</em>. Mientras tanto, ¿hay algo más que pueda hacer por usted?</p> 
				<p><input type="radio" name="option2alter4" value="Si" onchange="option2alter4(this.value)"><b>Si:</b><em> Resulve la duda o incoveniente del usuario</em></p>
				<p><input type="radio" name="option2alter4" value="No" onchange="option2alter4(this.value)"><b>No:</b><em> Cierra la llamada</em></p>
			</font>
		</div>
		<!--FIN Negativa de la segunda pregunta alterna de la pregunta 4-->

		<!--Afirmativo de la segunda pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 230px;" id="P2AS4">
			<font color="#1F8D3D">
				<p><em> ¿Se resolvió?</em></p>
				<p><input type="radio" name="option3alter4" value="Si" onchange="option3alter4(this.value)"><b>Si:</b></p>
				<p><input type="radio" name="option3alter4" value="No" onchange="option3alter4(this.value)"><b>No:</b> <em>Pide apoyo al supervisor e intenta resolver el incoveniente del usuario.</em></p>
			</font>
		</div>
		<!--FIN Afirmativo de la segunda pregunta alterna de la pregunta 4-->

		<!--Afirmativo de la tercera pregunta alterna de la pregunta 4-->
		<div class="col-lg-6" style="display: none; margin-left: 280px;" id="P3AS4">
			<font color="#1F8D3D">
				<p>De acuerdo <em>(Mencionar Nombre de usuario)</em>, entonces como acordamos, yo le estaría marcando cuando tenga respuesta de su folio, de mi parte sería todo, muchas gracias por su tiempo y que tenga buen día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la tercera pregunta alterna de la pregunta 4-->

		<!--Negativa de la tercera pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 280px;" id="P3AN4">
			<font color="#1F8D3D">
				<p><em> ¿Se resolvió?</em></p>
				<p><input type="radio" name="option4alter4" value="Si" onchange="option4alter4(this.value)"><b>Si:</b></p>
				<p><input type="radio" name="option4alter4" value="No" onchange="option4alter4(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN Negativa de la tercera pregunta alterna de la pregunta 4-->

		<!--Afirmativo de la cuarta pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 330px;" id="P4AS4">
			<font color="#1F8D3D">
				<p>De acuerdo <em>(Mencionar el nombre del usuario)</em>, entonces como acordamos, yo le estaría marcando cuando tenga respuesta de su folio, de mi parte sería todo,</p><p> muchas gracias por su tiempo y que tenga un buen día.</p> 
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la cuarta pregunta alterna de la pregunta 4-->

		<!--Negativa de la cuarta pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 330px;" id="P4AN4">
			<font color="#1F8D3D">
				<em>Escala la llamada al Supervisor.</em>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa de la cuarta pregunta alterna de la pregunta 4-->

		<!--Negativa de la segunda pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 230px;" id="P2AN4">
			<font color="#1F8D3D">
				<em>Cierra la llamada.</em>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa de la segunda pregunta alterna de la pregunta 4-->

		<!--Negativa de la pregunta alterna de la pregunta 4-->
		<div class="col-lg-12" style="display: none; margin-left: 130px;" id="PAN4">
			<font color="#1F8D3D">
				<p><em> Esperar respuesta del usuario.</em>
				<p><input type="radio" name="option1alter4N" value="Si" onchange="option1alter4N(this.value)"><b>Proporciona día y hora: </b></p>
				<p><input type="radio" name="option1alter4N" value="No" onchange="option1alter4N(this.value)"><b>Se rehusa a tomar la llamada: </b></p>
			</font>
		</div>
		<!--FIN Negativa de la pregunta alterna de la pregunta 4-->

		<!--Proporciona dia y hora Pregunta 4-->
		<div class="col-lg-6" style="display: none; margin-left: 180px;" id="P4SB">
			<font color="#1F8D3D">
				<p>Muy bien, entonces yo me estaría comunicando con Usted <em>(repetir el tiempo y hora)</em>. Le agradezco haberme dado un poco de su tiempo Sr. (Srta) <em>(Mencionar Nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em>del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>	
			</font>	
		</div>
		<!--FIN Proporciona dia y hora Pregunta 4-->

		<!--Se rehusa a tomar la llamada Pregunta 4-->
		<div class="col-lg-6" style="display: none; margin-left: 180px;" id="P4NB">
			<font color="#1F8D3D">
				<p>En ese caso no le molesto más, le agradezco haber dado un poco de su tiempo Sr. (Srta) <em>(mencionar el nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em>del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
			<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Se rehusa a tomar la llamada Pregunta 4-->

		<!--Pregunta 5-->
			<div class="col-lg-12" style="display: none;" id="P5">
				<font color="#1F618D">
					<p>5.- Hola <em>(buenos días, buenas tardes, buenas noches)</em>. Mi nombre es: <em>{!! Auth::user()->name !!}</em> del departamento de Calidad de Telcel, ¿tengo el gusto con el Sr. (Srita.) <em>(menciona el nombre del usuario)?</em> </p>
					<p><em>Esperar respuesta del usuario.</em></p>
					<p><input type="radio" id="1" name="option1" value="Si" onchange="option5(this.value);"> <b>Si:</b> 
					<p><input type="radio" id="2" name="option1" value="No" onchange="option5(this.value);"> <b>No:</b>
				</font>
			</div>
		<!--FIN de la pregunta 5-->	

		<!--Afirmativo a la pregunta 5 Se pasa a la pregunta 6-->
		<div class="col-lg-12" style="display: none;" id="P6">
			<font color="#1F8D3D">
				6.-<b>Si:</b><p>Mucho gusto, le llamo en relación a la llamada que Usted Hizo al *111 el <em>(Especificar la fecha de llamada)</em>, me percaté que no quedó muy satisfech@ con el servicio que le proporcionamos y me gustaría platicar con usted al respecto ¿Es este un buen momento para tomar mi llamada?</p>	
				<p><input type="radio" name="option6" value="Si" onchange="option6(this.value)"><b>Si: </b><em>Iniciar con la solución de la llamada</em></p>
				<p><input type="radio" name="option6" value="No" onchange="option6(this.value)"><b>No: </b>¿Cuando sería mas conveniente para usted?</p>	
			</font>
		</div>
		<!--FIN Afirmativo a la pregunta 5-->

		<!--Afirmativo de la primera pregunta alterna de la pregunta 6-->
		<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PAS6">
			<font color="#1F8D3D">
				<p><em> Iniciar con la solución de la llamada</em></p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la primera pregunta alterna de la pregunta 6-->

		<!--Negativa de la primera pregunta alterna de la pregunta 6-->
		<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PAN6">
			<font color="#1F8D3D">
				<p><em>Esperar respuesta del usuario</em></p>
				<p><input type="radio" name="optionalter6" value="Si" onchange="optionalter6(this.value)"><b>Proporciona dia y hora:</b></p>
				<p><input type="radio" name="optionalter6" value="No" onchange="optionalter6(this.value)"><b>Se rehusa a tomar la llamada:</b></p>
			</font>
		</div>
		<!--FIN Negativa de la primera pregunta alterna de la pregunta 6-->

		<!--Afirmativo de la segunda pregunta alterna de la pregunta 6-->
		<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P1AS6">
			<font color="#1F8D3D">
				<p>Muy bien, entonces yo me estaría comunicando con Usted <em>(repetir el tiempo y hora)</em>, le agradezco haberme dado un poco de su tiempo Sr. (Srta)<em>(Mencionar el nombre del Usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>	
			</font>
		</div>
		<!--FIN Afirmativo de la segunda pregunta alterna de la pregunta 6-->

		<!--Negativa de la segunda pregunta alterna de la pregunta 6-->
		<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P1AN6">
			<font color="#1F8D3D">
				<p>En ese caso no le molesto más, le agradezco haber dado un poco de su tiempo Sr. (Srta)<em> (Mencionar el nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em>del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa de la segunda pregunta alterna de la pregunta 6-->

		<!--Negativa a la pregunta 5 Se pasa a la pregunta 7-->
		<div class="col-lg-12" style="display: none;" id="P7">
			<font color="#1F8D3D">
				<p>7.-<b>No:</b> ¿Es usted el usuario de esta línea?</p>
				<p><input type="radio" name="option7" value="Si" onchange="option7(this.value)"><b>Si: </b></p>
				<p><input type="radio" name="option7" value="No" onchange="option7(this.value)"><b>No: </b></p>
			</font>
		</div>
		<!--FIN Negativa a la pregunta 7-->

		<!--Afirmativo a la primera pregunta alterna de la pregunta 7-->
		<div class="col-lg-6" style="display: none; margin-left: 80px;" id="PAS7">
			<font color="#1F8D3D">
				<p>Muy bien, mire le llamo en relación a la llamada que Usted hizo al *111 el <em>(Especificar fecha de llamada)</em>, me percaté que no quedó muy satisfech@ con el servicio que le proporcionamos y me gustaría platicar con usted al respecto. ¿Con quien tengo el gusto?</p>
				<em>Esperar respuesta del usuario</em>
				<p>Mucho gusto <em>(Mencionar Nombre de usuario)</em>, ¿es este un buen momento para tomar mi llamada?</p>
				<p><input type="radio" name="optionalter7" value="Si" onchange="optionalter7(this.value)"><b>Si:</b><em> Iniciar con la solución de la llamada</em></p>
				<p><input type="radio" name="optionalter7" value="No" onchange="optionalter7(this.value)"><b>No:</b> ¿Cuando sería mas conveniente para usted?</p>
			</font>
		</div>
		<!--FIN Afirmativo a la primera pregunta alterna de la pregunta 7-->

		<!--Afirmativo de la segunda pregunta alterna de la pregunta 7-->
		<div class="col-lg-12" style="display: none; margin-left: 130px;" id="P1AS7">
			<font color="#1F8D3D">
				<p><em>¿Se resolvió?</em></p>
				<p><input type="radio" name="option1alter7" value="Si" onclick="option1alter7(this.value)"><b>Si:</b> <em>Continúa en el paso 8.</em></p>
				<p><input type="radio" name="option1alter7" value="No" onchange="option1alter7(this.value)"><b>No:</b> <em>Pide apoyo a supervisor e intente resolver el inconveniente del usuario.</em></p>
			</font>
		</div>
		<!--FIN Afirmativo de la segunda pregunta alterna de la pregunta 7-->

		<!--Negativa de la tercera pregunta alterna de la pregunta 7-->
		<div class="col-lg-12" style="display: none; margin-left: 180px;" id="P2AN7">
			<font color="#1F8D3D">
				<p><em>¿Se resolvió?</em></p>
				<p><input type="radio" name="option2alter7" value="Si" onclick="option2alter7(this.value)"><b>Si:</b> Continúa en el paso 8.</p>
				<p><input type="radio" name="option2alter7" value="No" onchange="option2alter7(this.value)"><b>No:</b></p>
			</font>
		</div>
		<!--FIN Negativa de la tercera pregunta alterna de la pregunta 7-->

		<!--Negativa de la cuarta pregunta alterna de la pregunta 7-->
		<div class="col-lg-12" style="display: none; margin-left: 230px;" id="P3AN7">
			<font color="#1F8D3D">
				<p><em> Escala la llamada al supervisor</em></p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa de la cuarta pregunta alterna de la pregunta 7-->

		<!--Negativo de la segunda pregunta alterna de la pregunta 7-->
		<div class="col-lg-12" style="display: none; margin-left: 130px;" id="P1AN7">
			<font color="#1F8D3D">
				<p><em> Esperar respuesta del usuario</em></p>
				<p><input type="radio" name="option4alter7" value="Si" onchange="option4alter7(this.value)"><b>Proporciona día y hora:</b></p>
				<p><input type="radio" name="option4alter7" value="No" onchange="option4alter7(this.value)"><b>Se rehusa a tomar la llamada:</b></p>
			</font>
		</div>
		<!--FIN Negativo de la segunda pregunta alterna de la pregunta 7-->

		<!--Afirmativo de la sexta pregunta alterna de la pregunta 7-->
		<div class="col-lg-6" style="display: none; margin-left: 180px;" id="P5AS7">
			<font color="#1F8D3D">
				<p> Muy bien, entonces yo me estaría comunicando con Usted <em>(repetir el tiempo y hora)</em>. Le agradezco haberme dado un poco de su tiempo Sr. (Srta) <em>(Mencionar el nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo de la sexta pregunta alterna de la pregunta 7-->

		<!--Negativa de la sexta pregunta alterna de la pregunta 7-->
		<div class="col-lg-6" style="display: none; margin-left: 180px;" id="P5AN7">
			<font color="#1F8D3D">
				<p> En ese caso no le molesto más, le agradezco haber dado un poco de su tiempo Sr. (Srta) <em>(Mencionar nombre del usuario)</em>, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa de la sexta pregunta alterna de la pregunta 7-->

		<!--Negativa a la primera pregunta alterna de la pregunta 7-->
		<div class="col-lg-12" style="display: none; margin-left: 80px;" id="PAN7">
			<font color="#1F8D3D">
				<p>¿Cuando podría localizar <em>(Mencionar nombre de usuario)</em>?</p>
				<em>(Esperar respuesta del usuario)</em>
				<p><input type="radio" name="option3alter7" value="Si" onchange="option3alter7(this.value)"><b>Proporciona día y hora:</b></p>
				<p><input type="radio" name="option3alter7" value="No" onchange="option3alter7(this.value)"><b>Se rehusa dar información:</b></p>
			</font>
		</div>
		<!--FIN Negativa a la primera pregunta alterna de la pregunta 7-->

		<!--Afirmativo a la quinta pregunta alterna de la pregunta 7-->
		<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P4AS7">
			<font color="#1F8D3D">
				<p>Muy bien, entonces yo me estaría comunicando <em>(repetir el tiempo y hora)</em>, le agradezco haberme dado un poco de su tiempo, le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Afirmativo a la quinta pregunta alterna de la pregunta 7-->

		<!--Negativa a la quinta pregunta alterna de la pregunta 7-->
		<div class="col-lg-6" style="display: none; margin-left: 130px;" id="P4AN7">
			<font color="#1F8D3D">
				<p>En ese caso le agradezco haberme dado un poco de su tiempo le recuerdo mi nombre <em>{!! Auth::user()->name !!}</em> del Departamento de Calidad de Telcel, que tenga un excelente día.</p>
				<a href="/categorias" class="btn btn-default">Guardar y elegir la categoría</a>
			</font>
		</div>
		<!--FIN Negativa a la quinta pregunta alterna de la pregunta 7-->
		</div>
	</div>
</div>	
@stop