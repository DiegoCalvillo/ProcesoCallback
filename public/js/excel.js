$("#btnImport").click(function(e){
	window.open('data:application/vnd.ms-excel,' + escape($('#reporte').html()));
	//window.open('data:application/vnd.ms-excel;base64,' + $.base64.encode($('#reporte').html()));//+ $.base64.encode(("#reporte").html())); 
	e.preventDefault();
});