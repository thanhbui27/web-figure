<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\productModel;
use App\Models\personModel;

class orderController extends Controller
{
    public function index()
    {
        $listOrder = OrderModel::orderBy('id_ord', 'desc')->paginate(8);
        return view('admin.adminOrder')->with(['listOrder' => $listOrder]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $value = OrderModel::find($id);
        $id_user = $value->id_user;
        $getInfUser = personModel::find($id_user);
        $product = explode(',', $value->listId_pr);
        $productQuantity = explode(',', $value->quantity);
        $listProduct = [];
        foreach ($product as $products) {
            array_push($listProduct, productModel::find($products));
        }
        return response() -> json([$listProduct, $productQuantity, $getInfUser]);
    }
    public function search(Request $request)
    {
        $action = $request->action;
        switch ($action) {
            case 'searchMaGD':
                $key = $request->key;
                if ($request->ajax()) {
                    $products = OrderModel::where('maGD', 'LIKE', '%' . $key . '%')->get();
                    return response($products);
                }
                break;
            case 'searchDate' :
                $key = $request->key;
                if ($request->ajax()) {
                    $products = OrderModel::where('dates', 'LIKE', '%' . $key . '%')->get();
                    return response($products);
                }
            break;
        }
    }
}
