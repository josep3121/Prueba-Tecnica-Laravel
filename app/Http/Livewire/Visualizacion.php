<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Bodega_Producto;
use App\Producto;

class Visualizacion extends Component
{
    public $productos;
    public function render()
    {
        $productos = DB::table('bodega_producto as bd')
        ->select('bd.id','bd.producto_id','productos.nombre','bodegas.nombreb','bd.precio')
        ->join('productos','productos.id','=','bd.producto_id')
        ->join('bodegas','bodegas.id','=','bd.bodega_id')
        ->get(); 
        return view('livewire.visualizacion',compact('productos'));
    }

    public function borrar($id)
    { 
        $prod= Bodega_Producto::findOrFail($id);
        $prod->delete();
        
        return view('home');
    }
    public function ActualizaPro($id)
    { 
        $prod= Producto::findOrFail($id);
        
        
        return view('productos.form_act_pro',compact('prod'));
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
