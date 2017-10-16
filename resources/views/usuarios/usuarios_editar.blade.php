@extends('layouts.principal')

@section('title', '- Editar Usuario')

@section('content_editar_usuarios')
<div id="page-content-wrapper">
	{!! Form::model($users, ['route' => 'usuarios/update', 'method' => 'put','novalidate']) !!}
	{!! Form::hidden('id', $users->id) !!}
	@include('alerts.request')
	@include('alerts.errors')
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Edición de Usuarios</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Valores actuales
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										{!! Form::label('full_name', 'Nombre') !!}
										{!! Form::text('name', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('full_name', 'SARE') !!}
										{!! Form::text('sare', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('full_name', 'Correo') !!}
										{!! Form::text('email', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										{!! Form::label('full_name', 'Rol') !!}
										{!! Form::text('puesto_id', $users->puesto->puesto, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										{!! Form::label('full_name', 'Estatus de la cuenta') !!}
										{!! Form::text('estatus_id', $users->estatus->nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Valores a cambiar
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Cambiar Rol</label>
										<select class="form-control" name="puesto" id="puesto">
											<option value="{{ $users->puesto_id }}" selected="true">Selecciona</option>
											<?php  foreach($puesto as $puestos){
												echo '<option value= "'.$puestos['id'].'">'.$puestos['puesto'].'</option>';
											}?>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Cambiar Estatus de la cuenta</label>
										<select class="form-control" name="estatus" id="estatus">
											<option value="{{ $users->estatus_id }}">Selecciona</option>
											<?php  foreach($estatus as $estatus){
												echo '<option value= "'.$estatus['id'].'">'.$estatus['nombre_estatus'].'</option>';
											}?>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Credenciales de Usuario
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										{!! Form::label('full_name', 'Nombre de Usuario') !!}
										{!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!}
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										{!! Form::label('full_name', 'Confirmar contraseña') !!}
										<input class="form-control" type="password" name="password1">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										{!! Form::label('full_name', 'Confirmar cambio de contraseña') !!}
										<input class="form-control" type="password" name="password2">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}
</div>
@stop