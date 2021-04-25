@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h1 class="card-title">Nuevo Cliente</h1>
    </div>
    <br>
    <form method="post" action="{{route('clientes.store')}}">
    @csrf
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombre Cliente:</label>
                    <input type="text" class="form-control" name="nombre">
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
                    <label for="txtNombre" class="visually-hidden">Direccion:</label>
                    <textarea type="text" class="form-control" rows="3" name="direccion"></textarea>
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
                    <label for="txtNombre" class="visually-hidden">Telefono:</label>
                    <input type="number" class="form-control" name="telefono">
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
                    <label for="txtNombre" class="visually-hidden">Correo:</label>
                    <input type="email" class="form-control" name="Correo">
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
</div>
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
<script>
console.log('Hi!');
</script>
@stop