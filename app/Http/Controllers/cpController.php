<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\CPostale;


class cpController extends Controller
{
    //

    public function mostrar(){
        $cp=CPostale::all();
        foreach($cp as $codip)
        {
            echo $codip-> Id . '<br>';
            echo $codip-> codigo . '<br>';
            echo $codip-> asentamiento . '<br>';
            echo $codip-> tipo_asenta . '<br>';
            echo $codip-> municipio . '<br>';
            echo $codip-> estado . '<br>';
            echo $codip-> ciudad . '<br>';

            echo '<hr>';
        }
    }
}
