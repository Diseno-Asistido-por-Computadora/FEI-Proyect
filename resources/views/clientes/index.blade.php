@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

@if (session()->get('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $cliente)
        <tr>
            <td> {{$cliente->id}}</td>
            <td> {{$cliente->nombre}} </td>
            <td> {{$cliente->direccion}} </td>
            <td> {{$cliente->telefono}} </td>
            <td> {{$cliente->Correo}} </td>
            <td>
                <a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-success btn-sm">Editar</a>
                <form action="{{route('clientes.destroy', $cliente->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop