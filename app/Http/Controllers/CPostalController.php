<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPostale;

class CPostalController extends Controller
{
    //
    public function mostrarCP(Request $request){

        //$codigos = Codigo::find($request->codigo);
    
        $co = CPostale::where('codigo', $request->codigo)->get();
            //cp aenta municipio ciudad
        return view('colonia', ['co'=>$co]);
    
        }
    
        public function verMunicipio($Id){
            $municipio = CPostale::where('Id', $Id)->get();
            
            return view('municipio', ['muni'=>$municipio]);
            
        }
    
        public function verEstado($municipio){
            $estado = CPostale::where('municipio', $municipio)->get();
            
            return view('estado', ['estado'=>$estado]);
            
        }
}
