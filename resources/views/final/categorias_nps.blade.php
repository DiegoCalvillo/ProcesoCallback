@extends('layouts.principal')

@section('title', '- Categorias')

@section('content_categorias_nps')
<div id="page-content-wrapper">
	<form method="POST" action="http://10.100.40.2:3000/encuestas/store" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
	@include('alerts.request')
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1>Categorías de fallos</h1>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					{!! Form::label('full_name', 'Elije una categoría') !!}
					{!! Form::select('categorias', $categorias, null, ['id' => 'categorias', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('full_name', 'Elije comportamiento') !!}
					{!! Form::select('comportamiento', ['placeholder' => 'Selecciona'], null, ['id' => 'comportamiento', 'class' =>'form-control']) !!}
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="javascript:history.back()" class="btn btn-default">Regresar a anterior</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					{!! Form::label('full_name', 'Elije la subcategoría') !!}
					{!! Form::select('sub_categorias', ['placeholder' => 'Selecciona'], null, ['id' => 'sub_categorias',  'class' =>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('full_name', '¿Se resolvió el incoveniente a la entera satisfación del usuario?') !!}
					<select class="form-control" name="incoveniente" id="incoveniente">
						<option selected="true" disabled="disabled">Selecciona</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
					</select>
				</div>
			</div>
			</div>
		</div>
	</form>
</div>
@stop