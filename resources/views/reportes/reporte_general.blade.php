@extends('layouts.principal')

@section('title', '- Reporte')

@section('content_reporte_general_1')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/reportes/search">
	{!! csrf_field() !!}
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Reporte de encuestas</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>SARE</th>
									<th>Asesor</th>
									<th>Supervisor</th>
									<th>Asesor (Encuestado)</th>
									<th>Score Asesor</th>
									<th>Motivo Falla</th>
									<th>Fecha de CallBack</th>
									<th>Hora</th>
									<th>Categoría</th>
									<th>SubCategoría</th>
									<th>Comportamiento</th>
									<th>Fecha Encuesta</th>
									<th>¿Se resolvió?</th>
								</tr>
							</thead>
							<tbody>
								@foreach($reportes as $reportes)
									<tr>
										<td>{{ $reportes->sare }}</td>
										<td>{{ $reportes->asesor }}</td>
										<td>{{ $reportes->supervisor }}</td>
										<td>{{ $reportes->nombre }}</td>
										<td>{{ $reportes->score_asesor }}</td>
										<td>{{ $reportes->motivo }}</td>
										<td>{{ $reportes->fecha_callback }}</td>
										<td>{{ $reportes->hora_encuesta }}</td>
										<td>{{ $reportes->categoria }}</td>
										<td>{{ $reportes->sub_categoria }}</td>
										<td>{{ $reportes->comportamiento }}</td>
										<td>{{ $reportes->fecha_encuesta }}</td>
										<td>{{ $reportes->incoveniente }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop