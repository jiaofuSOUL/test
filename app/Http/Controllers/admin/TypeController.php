<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Type;

class TypeController extends Controller
{
    public function type(){
        return view('admin/type');
    }
    public function typeName(Request  $request){
        if($request->isMethod('get')){
            $rank = $request->input('rank');
            // echo $rank;die;
            $type = new Type();
            $type_arr = $type->typeSel($rank);
            // print_r($type_arr);die;   
            $type_json = json_encode($type_arr);
            echo $type_json;
        }else{
            
        }
    }
}
