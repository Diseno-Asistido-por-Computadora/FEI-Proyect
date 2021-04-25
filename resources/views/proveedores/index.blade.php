  
@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif

    @if (session()->get('deleted'))
        <div class="alert alert-danger">
            {{session()->get('deleted')}}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo Electronico</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td> {{$proveedor->id}}</td>
                    <td> {{$proveedor->nombre}} </td>
                    <td> {{$proveedor->direccion}} </td>
                    <td> {{$proveedor->telefono}} </td>
                    <td> {{$proveedor->email}} </td>
                    <td>
                        <a href="{{route('proveedores.edit', $proveedor->id)}}" class="btn btn-success btn-sm">Editar</a>
                        <form action="{{route('proveedores.destroy', $proveedor->id)}}" method="post" style="display: inline-block">
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
