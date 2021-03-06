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
    public function typeAdd(Request  $request){
        if($request->isMethod('post')){
            $arr = $request->input();
            // print_r($arr);die;
            $type = new Type();
            $result = $type->typeAdd($arr);
            if($result){
                return redirect('/admin/success/TypeController/type');
            }else{
                return redirect('/admin/fail/TypeController/type');
            }
        }
    }
    // 当前在DEMO分支上
    // 当前在主分支上！
    // 当前在TEST分支中！！！
    // 当前主分支已经和test分支合并了
    // 当前的demo分支已经和主分支合并了，现在是demo分支
}
