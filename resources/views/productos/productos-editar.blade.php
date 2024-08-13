@extends('layouts\base-layout')

@section('contenido')

<form action="/productos/{{$producto->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mt-3 container">
    <div class="mb-3">
      <label for="nombreProducto" class="form-label">Nombre Producto</label>
      <input type="text" class="form-control" id="nombreProducto" name="nombre" aria-describedby="productNommbreHelp" value="{{$producto->nombre}}">
    </div>
    <div class="mb-3">
      <label for="descripcionProducto" class="form-label">Descripcion</label>
      <input type="text" class="form-control" id="descripcionProducto" name="descripcion" aria-describedby="producDescripciontHelp" value="{{$producto->descripcion}}">
    </div>
    <div class="mb-3">
      <label for="precioProducto" class="form-label">Precio</label>
      <input type="number" class="form-control" step="any" min="0" id="precioProducto" name="precio" aria-describedby="productPrecioHelp" value="{{$producto->precio}}">
    </div>
    <div class="mb-3">
      <label for="stockProducto" class="form-label">Stock</label>
      <input type="number" class="form-control" step="any" min="0" id="stockProducto" name="stock" aria-describedby="productStockHelp" value="{{$producto->stock}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

@endsection