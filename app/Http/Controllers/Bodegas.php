<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bodega;
use App\Bodega_Producto;

class Bodegas extends Controller
{
    public function formularioRegBodegas(){

        
        return view('bodegas.form_regis_bodegas');

    }

    public function registrarBodega(Request $request){
        //Aqui se hace el registro de productos en la base de datos
        $Bodega = new Bodega();
        $Bodega->id = $request->input('id');
        $Bodega->nombreb = $request->input('nameBo');
        
        $Bodega->save();
        return redirect()->route('home');
        
  
    }
}
