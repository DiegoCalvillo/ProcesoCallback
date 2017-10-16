@extends('layouts.principal')

@section('title', '- Reporte')

@section('content_reporte_general_2')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/reportes/search">
	{!! csrf_field() !!}
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Reporte de Encuestas</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div id="reporte">
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
								@foreach($reportes2 as $reportes2)
									<tr>
										<td>{{ $reportes2->sare }}</td>
										<td>{{ $reportes2->asesor }}</td>
										<td>{{ $reportes2->supervisor }}</td>
										<td>{{ $reportes2->nombre }}</td>
										<td>{{ $reportes2->score_asesor }}</td>
										<td>{{ $reportes2->motivo }}</td>
										<td>{{ $reportes2->fecha_callback }}</td>
										<td>{{ $reportes2->hora_encuesta }}</td>
										<td>{{ $reportes2->categoria }}</td>
										<td>{{ $reportes2->sub_categoria }}</td>
										<td>{{ $reportes2->comportamiento }}</td>
										<td>{{ $reportes2->fecha_encuesta }}</td>
										<td>{{ $reportes2->incoveniente }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
						<input type="button" name="btnImport" id="btnImport" class="btn btn-primary" value="Generar Reporte de Excel">
				</div>
			</div>
		</div>
	</form>
</div>
@stop