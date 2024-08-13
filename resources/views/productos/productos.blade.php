@extends('layouts\base-layout')

@section('contenido')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Productos as $Producto)
            <tr>
                <th scope="row">{{$Producto->id}}</th>
                <td>{{$Producto->nombre}}</td>
                <td>{{$Producto->descripcion}}</td>
                <td>{{$Producto->precio}}</td>
                <td>{{$Producto->stock}}</td>
                <td>

                    <form action="/productos/{{$Producto->id}}/edit" style="display: inline;">
                        @csrf
                        <button class="btn btn-success mb-1 border border-black" type="submit">Editar</button>
                    </form>

                    <form action="/productos/{{$Producto->id}}" method="post"  style="display: inline;">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger border border-black" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection