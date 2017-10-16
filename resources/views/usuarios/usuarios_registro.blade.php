@extends('layouts.principal')

@section('title', '- Registro Usuarios')

@section('content_registro_usuarios')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/usuarios/store" accept-charset="UTF-8" enctype="multipart/form-data">
	@include('alerts.request')
		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Usuarios</h1>
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
									{!! Form::label('full_name', 'Nombre') !!}
									{!! Form::text('name', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Rol') !!}
									{!! Form::select('puesto', $puesto, null, ['id' => 'puesto', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'SARE') !!}
									{!! Form::text('sare', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Correo') !!}
									{!! Form::email('email', null, ['class' => 'form-control']) !!}
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
						<div class="col-lg-12">
							<div class="form-group">
								{!! Form::label('full_name', 'Nombre de Usuario') !!}
								{!! Form::text('username', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Contraseña</label>
								<input class="form-control" type="password" name="password" id="password">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Confirmar contraseña</label>
								<input class="form-control" type="password" name="password2" id="password2">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Registrar Usuario</button>
	</div>
	</form>
</div>
@stop