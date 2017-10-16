@extends('layouts.principal')
<?php  $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/usuarios" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro modificado exitosamente <a href="/usuarios" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif
@section('title', '- Usuarios')

@section('content_usuarios')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/usuarios/search">
	{!! csrf_field() !!}
		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Usuarios</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar usuario" name="name" id="name" required>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Buscar</button>
					</span>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group input-group">
					<a href="http://10.100.40.2:3000/usuarios/create" class="btn btn-primary">Agregar nuevo usuario</a>
				</div>
			</div>
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
									<th>Nombre de usuario</th>
									<th>SARE</th>
									<th>Rol</th>
									<th>Correo</th>
									<th>Estatus</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td>{{ $user->name }}</td>
										<td>{{ $user->username }}</td>
										<td>{{ $user->sare }}</td>
										<td>{{ $user->puesto->puesto}}</td>
										<td>{{ $user->email }}</td>
										<td>{{ $user->estatus->nombre_estatus }}</td>
										<td>
											<a class="btn btn-primary btn-xs" href="{{ route('usuarios/edit', ['id' => $user->id]) }}">Editar</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						{{ $users->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
@stop