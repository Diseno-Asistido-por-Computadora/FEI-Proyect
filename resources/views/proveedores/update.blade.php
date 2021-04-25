@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Editar Proveedor</h1>
@stop

@section('content')
    <form method="post" action="{{route('proveedores.update', $proveedor->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$proveedor->nombre}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Dirección:</label>
                    <textarea type="text" class="form-control" rows="3" name="direccion" >{{$proveedor->direccion}}</textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Telefono:</label>
                    <input type="text" class="form-control" name="telefono" value="{{$proveedor->telefono}}">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Correo Electrónico:</label>
                    <input type="email" class="form-control" name="email" value="{{$proveedor->email}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop