@extends('adminlte::page')
@section('title', 'Proveedores')

@section('content')
<div class="row">
	<div class="col-lg-12">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Editar Proveedor</h3>
                            </div>
                            <form role="form" id="form" method="POST" action="{{ route('proveedor.update', $proveedor->id) }}">
                                @method('PATCH')
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="ruc">RUC</label>
                                                <input class="form-control"
                                                    type="text"
                                                    name="ruc"
                                                    id="ruc"
                                                    value="{{ old('ruc', $proveedor->ruc) }}"
                                                    placeholder="Introduzca RUC del proveedor">
                                                    @foreach ($errors->get('ruc') as $error)
                                                        <span class="text text-danger">{{ $error }}</span>
                                                    @endforeach
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <select class="form-control" name="estado" id="estado">
                                                    @foreach($estados as $key => $estado)
                                                        <option value="{{ $key }}"
                                                            @if($key == old('estado', $proveedor->estado)) selected @endif
                                                            >{{ $estado }}</option>
                                                    @endforeach
                                                </select>
                                                @foreach ($errors->get('estado') as $error)
                                                    <span class="text text-danger">{{ $error }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="razon_social">Raz??n Social</label>
                                        <input class="form-control"
                                            type="text"
                                            name="razon_social"
                                            id="razon_social"
                                            value="{{ old('razon_social', $proveedor->razon_social) }}"
                                            placeholder="Introduzca raz??n social del proveedor">
                                            @foreach ($errors->get('razon_social') as $error)
                                                <span class="text text-danger">{{ $error }}</span>
                                            @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripci??n</label>
                                        <textarea class="form-control"
                                            rows="3"
                                            type="text"
                                            name="descripcion"
                                            id="descripcion"
                                            value="{{ old('descripcion', $proveedor->descripcion) }}"
                                            placeholder="Introduzca descripcion del proveedor">{{ old('descripcion', $proveedor->descripcion) }}</textarea>
                                            @foreach ($errors->get('descripcion') as $error)
                                                <span class="text text-danger">{{ $error }}</span>
                                            @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Direcci??n</label>
                                        <input class="form-control"
                                            type="text"
                                            name="direccion"
                                            id="direccion"
                                            value="{{ old('direccion', $proveedor->direccion) }}"
                                            placeholder="Introduzca direcci??n del proveedor">
                                            @foreach ($errors->get('direccion') as $error)
                                                <span class="text text-danger">{{ $error }}</span>
                                            @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="telefono">Tel??fono</label>
                                                <input class="form-control"
                                                    type="text"
                                                    name="telefono"
                                                    id="telefono"
                                                    value="{{ old('telefono', $proveedor->telefono) }}"
                                                    placeholder="Introduzca tel??fono del proveedor">
                                                    @foreach ($errors->get('telefono') as $error)
                                                        <span class="text text-danger">{{ $error }}</span>
                                                    @endforeach
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control"
                                                    type="text"
                                                    name="email"
                                                    id="email"
                                                    value="{{ old('email', $proveedor->email) }}"
                                                    placeholder="Introduzca email del proveedor">
                                                    @foreach ($errors->get('email') as $error)
                                                        <span class="text text-danger">{{ $error }}</span>
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Grabar</button>
                                    <a href="{{ route('proveedor.index') }}" class="btn btn-secondary btn-close">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</div>
</div>
@stop