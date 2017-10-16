@extends('layouts.principal')

@section('title', '- Registro')

@section('content_supervisores_registro')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/supervisores/store" accept-charset="UTF-8" enctype="multipart/form-data">
	@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Supervisores</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Datos Generales
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Nombre del Supervisor') !!}
									{!! Form::text('nombre_supervisor', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Equipo') !!}
									{!! Form::select('equipo', $equipo, null, ['id' => 'equipo', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'SARE') !!}
									{!! Form::text('sare', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Campaña') !!}
									{!! Form::select('campana', $campana, null, ['id' => 'campana', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Guardar</button>	
	</form>
</div>
@stop