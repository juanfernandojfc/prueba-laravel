@extends('layouts\base-layout')

@section('contenido')

<form action="/productos" method="POST">
  @csrf
  <div class="mt-3 container">

    <div class="mb-3">
      <label for="nombreProducto" class="form-label">Nombre Producto</label>
      <input type="text" class="form-control" id="nombreProducto" name="nombre" aria-describedby="productNommbreHelp">
    </div>
    <div class="mb-3">
      <label for="descripcionProducto" class="form-label">Descripcion</label>
      <input type="text" class="form-control" id="descripcionProducto" name="descripcion" aria-describedby="producDescripciontHelp">
    </div>
    <div class="mb-3">
      <label for="precioProducto" class="form-label">Precio</label>
      <input type="number" class="form-control" id="precioProducto" name="precio" aria-describedby="productPrecioHelp">
    </div>
    <div class="mb-3">
      <label for="stockProducto" class="form-label">Stock</label>
      <input type="number" class="form-control" id="stockProducto" name="stock" aria-describedby="productStockHelp">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

@endsection