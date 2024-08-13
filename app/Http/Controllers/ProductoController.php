<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Productos = Producto::all();
        return view('productos.productos')->with('Productos', $Productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.productos-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.productos-editar')->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto-> precio= $request->input('precio');
        $producto-> stock= $request->input('stock');
        $producto->save();
        return redirect('/productos')->with('success','producto actualizado');;
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect('/productos')->with('success','producto eliminado');
    }
}
