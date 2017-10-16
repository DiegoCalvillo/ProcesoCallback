@extends('layouts.principal')

@section('title', '- Reporte 2')

@section('content_reporte2')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Reporte 2</h1>
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
									<th>Categoría</th>
									<th>SubCategoría</th>
									<th>Comportamiento</th>
									<th>Fecha Encuesta</th>
									<th>¿Se resolvió?</th>
								</tr>
							</thead>
							<tbody>
								@foreach($reportes2s as $reportes2s)
									<tr>
										<td>{{ $reportes2s->id }}</td>
										<td>{{ $reportes2s->categorias->nombre_categoria }}</td>
										<td>{{ $reportes2s->sub_categorias->nombre_sub_categorias }}</td>
										<td>{{ $reportes2s->comportamiento->nombre_comportamiento }}</td>
										<td>{{ $reportes2s->fecha_encuesta }}</td>
										<td>{{ $reportes2s->incoveniente }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop