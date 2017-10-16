@extends('layouts.principal')

<?php $message=Session::get('message') ?>
<!--Mensaje que se despliega cuando se termina una encuesta-->
    @if($message == 'store')
        <div class="alert alert-success" role="alert">
            La encuesta ha finalizado y ha sido guardada satisfactoriamente <a href="http://10.100.40.2:3000/inicio" class="alert-link">Click aquí para quitar mensaje</a>
        </div>
    @endif
@section('title', '- Inicio')

@section('content_inicio')
        <div id="page-content-wrapper">
            <form method="POST" action="http://10.100.40.2:3000/inicio/store" accept-charset="UTF-8" enctype="multipart/form-data">
            @include('alerts.request')
            @include('alerts.errors')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Proceso Callback (Calidad)</h1>
                                <p>Esta aplicación web es para uso exclusivo del Departamento de Calidad de Telcel.</p>
                                <strong><p>Antes de iniciar la Encuesta CallBack porfavor llena la siguiente información.</p></strong>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Supervisor') !!}
                                    {!! Form::select('supervisores', $supervisores, null, ['id' => 'supervisores', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Asesor') !!}
                                    {!! Form::select('asesores', ['placeholder' => 'Seleccione un Asesor'], null, ['id' => 'asesores', 'class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Score Asesor') !!}
                                    {!! Form::select('score_asesor', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], null, ['class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Mótivo de Falla') !!}
                                    {!! Form::select('motivos', $motivos, null, ['id' => 'motivos', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Fecha de Callback') !!}
                                    {!! Form::text('fecha_callback', null, ['class' => 'form-control', 'id' => 'fecha_callback']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Iniciar Encuesta</button>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
@stop