$("#sub_categorias").change(function(event){
	$.get("comportamiento/"+event.target.value+"", function(response, sub_categorias){
		$("#comportamiento").empty();
		for(i=0; i<response.length; i++)
		{
			$("#comportamiento").append("<option value='"+response[i].id+"'>"+response[i].nombre_comportamiento+"</option>")
		}
	});
});