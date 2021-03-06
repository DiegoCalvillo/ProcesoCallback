@extends('layouts.principal')

<?php  $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/asesores" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro modificado exitosamente <a href="/asesores" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'destroy')
		<div class="alert alert-danger" role="alert">
  			<strong>Registro eliminado exitosamente!</strong> <a href="/asesores" class="alert-link">Click aqui para quitar mensaje</a>
		</div>
	@endif

@section('title', '- Asesores')

@section('content_asesores')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/asesores/search">
	{!! csrf_field() !!}
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Registro de Asesores</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group input-group">
						<input type="text" class="form-control" placeholder="Buscar asesor" name="nombre_asesor" id="nombre_asesor" required>
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">Buscar</button>
						</span>
					</div>
				</div>
				@if(Auth::user()->puesto_id == 2)
				<div class="col-lg-6">
					<div class="form-group input-group">
						<a href="http://10.100.40.2:3000/asesores_registro" class="btn btn-primary">Agregar Nuevo</a>
					</div>
				</div>
				@endif
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Registros
						</div>
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>SARE</th>
										<th>Equipo</th>
										<th>Campaña</th>
										<th>Supervisor</th>
										<th>Status Asesor</th>
										@if(Auth::user()->puesto_id == 2)
										<th>Opciones</th>
										@endif
									</tr>
								</thead>
								<tbody>
									@foreach($asesores as $asesor)
										<tr>
											<td>{{ $asesor->nombre_asesor }}</td>
											<td>{{ $asesor->sare }}</td>
											<td>{{ $asesor->equipo->nombre_equipo }}</td>
											<td>{{ $asesor->campana->nombre_campana }}</td>
											<td>{{ $asesor->supervisores->nombre_supervisor }}</td>
											<td>{{ $asesor->estatus->nombre_estatus }}</td>
											@if(Auth::user()->puesto_id == 2)
											<td>
												<a href="{{ route('asesores/edit', ['id' => $asesor->id]) }}" class="btn btn-primary btn-xs">Editar</a>
											</td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
							{{ $asesores->links() }}
						</div>
					</div>	
				</div>
			</div>
		</div>
	</form>
</div>
@stop