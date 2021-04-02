@extends('adminlte::page')
@section('title', 'Cedulas')

@section('content_header')
    <h1>Cedulas</h1>
@stop

@section('content')
<div class="col-sm-12">
  </div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover" id="tabla">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Estado Civil</th>
                        <th>Fec. de Nac.</th>
                        <th>Sexo</th>
                        <th>Domicilio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cedulas as $key => $cedula)
                    <tr>
                        <td>{{ $cedula->cedula }}</td>
                        <td>{{ $cedula->apellido }}</td>
                        <td>{{ $cedula->nombre }}</td>
                        <td>{{ $cedula->estadociv }}</td>
                        <td>{{ $cedula->fechanac }}</td>
                        <td>{{ $cedula->sexo }}</td>
                        <td>{{ $cedula->domicilio }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop


