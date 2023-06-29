<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create(){
        return view ('Formulario');
    }
    public function store(Request $request){

        $producto=new ProductoModel();
        $producto->name=$request->name;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->existencias=$request->existencias;
        $producto->proveedor=$request->proveedor;
        $producto->save();

    }
}
