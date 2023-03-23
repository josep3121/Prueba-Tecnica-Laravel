<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Producto;
use App\Bodega_Producto;
class Productos extends Controller
{
    public function formularioRegProductos(){

        
        return view('productos.form_regis_productos');

    }

    public function registrarProducto(Request $request){
        //Aqui se hace el registro de productos en la base de datos
        $producto = new Producto();
        $producto->id = $request->input('id');
        $producto->cod = $request->input('cod');
        $producto->nombre = $request->input('name');
        
       
       
        
        $producto->save();
        return redirect()->route('home');
        
  
    }
    public function ActualizaReg(Request $request,$id){
        //Aqui se hace el registro de productos en la base de datos
        $prod= Producto::findOrFail($id);
        $prod->id = $request->input('id');
        $prod->cod = $request->input('cod');
        $prod->nombre = $request->input('name');
        
       
       
        
        $prod->save();
        return redirect()->route('home');
        
  
    }
}
