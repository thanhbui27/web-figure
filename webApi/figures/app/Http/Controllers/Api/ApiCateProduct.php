<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\categoryModel;
use Illuminate\Http\Request;

class ApiCateProduct extends Controller
{   
    public function index(){
        $cate = categoryModel::get();
        return response($cate);
    }

    public function getCate(Request $request){
        $id = $request -> id;
        $getNameCate = categoryModel::where("id_cate","=","$id") -> first();
        return response() -> json($getNameCate);
    }
}
