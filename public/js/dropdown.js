$("#categorias").change(function(event){
	$.get("sub_categorias/"+event.target.value+"", function(response, categorias){
		$("#sub_categorias").empty();
		for(i=0; i<response.length; i++)
		{
			$("#sub_categorias").append("<option value='"+response[i].id+"'>"+response[i].nombre_sub_categorias+"</option>");
		}
	});
});
