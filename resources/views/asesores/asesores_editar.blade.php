@extends('layouts.principal')

@section('title', '- Edición')

@section('content_asesores_edicion')
<div id="page-content-wrapper">
	{!! Form::model($asesores, ['route' => 'asesores/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $asesores->id) !!}
	@include('alerts.request')
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Editar Asesor: {{ $asesores->nombre_asesor }}</h1>
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
										{!! Form::label('full_name', 'Nombre del Asesor') !!}
										{!! Form::text('nombre_asesor', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('full_name', 'SARE') !!}
										{!! Form::text('sare', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
								</div>
								<div class="col-lg-6">				
									<div class="form-group">
										{!! Form::label('full_name', 'Equipo') !!}
										{!! Form::text('equipo_id', $asesores->equipo->nombre_equipo, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('full_name', 'Campaña') !!}
										{!! Form::text('campana_id', $asesores->campana->nombre_campana, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
								</div>
								<div class="col-lg-6">	
									<div class="form-group">
										{!! Form::label('full_name', 'Supervisor') !!}
										{!! Form::text('supervisor_id', $asesores->supervisores->nombre_supervisor, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('full_name', 'Estatus del Asesor') !!}
										{!! Form::text('estatus_id', $asesores->estatus->nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Valores a cambiar
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Cambiar Equipo</label>
										<select class="form-control" name="equipo" id="equipo">
											<option value="{{ $asesores->equipo->id }}">Selecciona</option>
											<?php foreach($equipo as $equipos){
												echo '<option value= "'.$equipos['id'].'">'.$equipos['nombre_equipo'].'</option>';
											}?>
										</select>
									</div>
									<div class="form-group">
										<label>Cambiar Campaña</label>
										<select class="form-control" name="campana" id="campana">
											<option value="{{ $asesores->campana->id }}">Selecciona</option>
											<?php foreach($campana as $campañas){
												echo '<option value= "'.$campañas['id'].'">'.$campañas['nombre_campana'].'</option>';
											}?>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Cambiar Supervisor</label>
										<select class="form-control" name="supervisor" id="supervisor">
											<option value="{{ $asesores->supervisores->id }}">Selecciona</option>
											<?php foreach($supervisores as $supervisores){
													echo '<option value = "'.$supervisores['id'].'">'.$supervisores['nombre_supervisor'].'</option>';
											}?>
										</select>
									</div>
									<div class="form-group">
										<label>Cambiar Estatus del Asesor</label>
										<select class="form-control" name="estatus" id="estatus">
											<option value="{{ $asesores->estatus_id }}">Selecciona</option>
											<?php foreach($estatus as $estatus){
												echo '<option value= "'.$estatus['id'].'">'.$estatus['nombre_estatus'].'</option>';
											}?>
										</select>
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