$("#supervisores").change(function(event){
	$.get("asesores/"+event.target.value+"", function(response, supervisores){
		$("#asesores").empty();

		$("#asesores").append("<option value= '0'>Seleccione un Asesor</option>");
		for(i=0; i<=response.length; i++)
		{
			if(response[i].estatus_id == 1)
			{
				$("#asesores").append("<option value= '"+response[i].id+"'>"+response[i].nombre_asesor+"</option>");
			}
		}
	});
});

$(document).ready(function(){
	var valor = $("#supervisores").val();
	//alert(valor);

	$.get("asesores/"+valor+"", function(response, supervisores){
		$("#asesores").empty();
		//$("#asesores").append("<option value='placeholder'>Seleccione un Asesor</option>");
		for(i=0; i<=response.length; i++)
		{
			if(response[i].estatus_id == 1)
			{
				$("#asesores").append("<option value= '"+response[i].id+"'>"+response[i].nombre_asesor+"</option>");
			}
		}
	});
});