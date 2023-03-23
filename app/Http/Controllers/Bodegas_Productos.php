<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bodega_Producto;

class Bodegas_Productos extends Controller
{
    public function formularioAsoPro(){

          //CATALOGO DE  PRODUCTOS
          $codpro = DB::table('productos as pro')

        
          //select sirve como atributo para visualizar unicamente los atributos que yo desee que aparezcan
          ->select('pro.id','pro.nombre')
          
          //nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
          ->get(); 
          $codbo = DB::table('bodegas as bo')
          ->select('bo.id','bo.nombreb')
          ->get(); 
       
        return view('bodegas.form_asoc_prod',compact('codpro','codbo'));

    }

    public function registrarAsociacion(Request $request){
        //Aqui se hace el registro de productos en la base de datos
        $bodpro = new Bodega_Producto();
        $bodpro->producto_id = $request->input('idprod');
        $bodpro->bodega_id = $request->input('idbod');
        $bodpro->precio = $request->input('precio');
        
        $bodpro->save();
        return redirect()->route('home');
        
  
    }
}
