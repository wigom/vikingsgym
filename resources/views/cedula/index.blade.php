@extends('adminlte::page')
@section('title', 'Cedula')


@section('content_header')
<h1>Cedula</h1>
@stop

@section('content')
<div class="bd-example">

    <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>

    <div class="box">
        <div class="container-2">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="buscar" placeholder="Buscar..." />
        </div>
    </div>

</div>

@stop

@section('css')

@stop
