<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\CPostale;
use DB;

class postalesController extends Controller
{
    //

    function postales(){
        $list=DB::table('codigos_postales')
                        ->groupBy('codigo')
                        ->get();

        return view('postales')->with('list',$list);
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('codigos_postales')
                        ->where($select, $value)
                        ->groupBy($dependent)
                        ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }
}
