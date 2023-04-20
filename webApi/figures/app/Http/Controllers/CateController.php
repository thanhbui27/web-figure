<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\sortHeightModel;
use App\Models\sortpriceModel;

class CateController extends Controller
{
    public function index()
    {
        $cate = categoryModel::paginate(5);
        $height = sortHeightModel::get();
        $price = sortpriceModel::get();
        return view('admin.adminSort')->with(['cate' => $cate, 'height' => $height, 'price' => $price]);
    }
    public function create(Request $request)
    {
        $action = $request->action;
        switch ($action) {
            case 'cate':
                $name = $request->namecate;
                $cate = categoryModel::where('name_cate', $name)->first();
                if (!$cate) {
                    categoryModel::create([
                        'name_cate' => $name
                    ]);
                    return redirect()->back();
                }
                return redirect()->back();
                break;
            case 'price':
                $name = $request->name;
                $start = $request->priceStart;
                $end = $request->PriceEnd;
                $price = sortpriceModel::where('name', $name)->first();
                if (!$price) {
                    sortpriceModel::create([
                        'name' => $name,
                        'pricetStart' => $start,
                        'pricetEnd' => $end
                    ]);
                    return redirect()->back();
                }
                return redirect()->back();
                break;
            case 'height':
                $name = $request->name;
                $start = $request->heightStart;
                $end = $request->heightEnd;
                $price = sortHeightModel::where('name', $name)->first();
                if (!$price) {
                    sortHeightModel::create([
                        'name' => $name,
                        'heightStart' => $start,
                        'heightEnd' => $end
                    ]);
                    return redirect()->back();
                }
                return redirect()->back();
                break;
            default:
            return view('admin.adminAddLisstSort');
        }
    }
    public function edit(Request $request){
        $action = $request -> action;
        switch($action){
            case 'cate':
                $cate = categoryModel::find($request -> id);
                return $cate;
            break;
            case 'height':
                $height = sortHeightModel::find($request -> id);
                return $height;
            break;
            case 'price':       
                $price = sortpriceModel::find($request -> id);
                return $price;
            break;          
        }
    }
    public function update(Request $request){
        $action = $request -> action;
        switch($action){
            case 'cate':
                $name = $request -> name;

                $cate = categoryModel::find($request -> id);
                
                $cate -> name_cate = $name;
                $cate -> save();
                
                return 'thanh cong';
            break;
            case 'height':
                $heightStart = $request -> start;
                $heightEnd = $request -> end;
                $height = sortHeightModel::find($request -> id);
                $height -> heightStart = $heightStart ;
                $height -> heightEnd = $heightEnd ;

                $height -> save();
                return 'thanh cong';
            break;
            case 'price':       
                $priceStart = $request -> start;
                $priceEnd = $request -> end;
                $price = sortpriceModel::find($request -> id);
                $price -> pricetStart = $priceStart ;
                $price -> pricetEnd = $priceEnd ;
                $price -> save();
                return 'thanh cong';
            break;          
        }
    }
    public function destroy(Request $request){
        $action = $request -> action;
        switch($action){
            case 'cate':
                 categoryModel::find($request -> id) -> delete();
                return 'thanh cong';
            break;
            case 'height':
              
                sortHeightModel::find($request -> id) -> delete();
               
                return 'thanh cong';
            break;
            case 'price':       
               sortpriceModel::find($request -> id) -> delete();
               
                return 'thanh cong';
            break;          
        }
    }
    public function listCate(){
        return categoryModel::get();
    }
}
