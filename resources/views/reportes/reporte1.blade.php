@extends('layouts.principal')

@section('title', '- Reporte1')

@section('content_reporte1')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Reporte 1</h1>
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
									<th>Supervisor</th>
									<th>Asesor (Encuestado)</th>
									<th>Score Asesor</th>
									<th>Motivo Falla</th>
									<th>Fecha (Encuesta)</th>
									<th>Hora</th>
								</tr>
							</thead>
							<tbody>
								@foreach($reportes1 as $reportes1)
									<tr>
										<td>{{ $reportes1->id }}</td>
										<td>{{ $reportes1->sare }}</td>
										<td>{{ $reportes1->User->name }}</td>
										<td>{{ $reportes1->supervisores->nombre_supervisor }}</td>
										<td>{{ $reportes1->asesores->nombre_asesor }}</td>
										<td>{{ $reportes1->score_asesor }}</td>
										<td>{{ $reportes1->motivos->nombre_motivo }}</td>
										<td>{{ $reportes1->fecha_callback }}</td>
										<td>{{ $reportes1->hora_encuesta }}</td>
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