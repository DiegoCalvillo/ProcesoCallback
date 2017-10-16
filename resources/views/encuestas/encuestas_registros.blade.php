@extends('layouts.principal')

@section('title', '- Registros Encuestas')

@section('content_registros_encuestas')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Reporte de encuestas</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Registros
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>#</th>
									<th>SARE</th>
									<th>Asesor</th>
									<th>Fecha (Encuesta)</th>
									<th>Hora</th>
									<th>Score NPS</th>
									<th>Categoría</th>
									<th>Sub Categoría</th>
									<th>Comportamiento</th>
								</tr>
							</thead>
							<tbody>
								@foreach($encuesta as $encuestas)
									<tr>
										<td>{{ $encuestas->id }}</td>
										<td>{{ $encuestas->sare }}</td>
										<td>{{ $encuestas->User->name }}</td>
										<td>{{ $encuestas->fecha_encuesta }}</td>
										<td>{{ $encuestas->hora_encuesta }}</td>
										<td></td><!--Corresponde al Score NPS-->
										<td>{{ $encuestas->categorias->nombre_categoria }}</td>
										<td>{{ $encuestas->sub_categorias->nombre_sub_categorias }}</td>
										<td>{{ $encuestas->comportamiento->nombre_comportamiento }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		@section('sidebar')
			@parent
			<a href="/excel" class="btn btn-default">Generar reporte de Excel</a>
		@stop
	</div>
</div>
@stop