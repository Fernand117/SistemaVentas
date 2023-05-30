<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function RegistrarProductos(Request $request)
    {
        $datos = $request->all();
        $producto = new ProductoModel();
        $producto->nombre = $datos['nombre'];
        $producto->descripcion = $datos['descripcion'];
        $producto->precio = $datos['precio'];
        $producto->id_categoria = $datos['idCategoria'];
        $producto->id_proveedor = $datos['idProveedor'];
        $producto->save();
        return response()->json(['Mensaje' => 'Producto registrado.'], 200);
    }
}
