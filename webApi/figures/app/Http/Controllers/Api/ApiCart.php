<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\productModel;
use Illuminate\Http\Request;

class ApiCart extends Controller
{
    public function showCart(Request $request)
    {
        $cart = session()->get('cart');
        dd($cart);
        if(isset($cart)){
            return response(count($cart));
        }else{
            return response(0);
        }
      
    }
    public function addCartD(Request $request){
        $id = $request->id;
        $quantity = $request -> quantity;
        $product = productModel::where('id_pro', $id)->get();
        if(!$product) {
            return response(404);
        }
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "id_pro" => $product[0] -> id_pro,
                        "name_pro" => $product[0]->name_pro,
                        "quantity" => $quantity,
                        "price" => (int) $product[0]->price_new !== 0 ? $product[0]->price_new : $product[0]->price_old ,
                        "img" => $product[0]->image
                    ]
            ];
            session()->put('cart', $cart);
            return response(session()->get('cart'));
        }
       
        if(isset($cart[$id])) {
            $cart[$id]['quantity']+=$quantity;
            session()->put('cart', $cart);
            return response(session()->get('cart'));
        }
     
        $cart[$id] = [
            "id_pro" => $product[0] -> id_pro,
            "name_pro" => $product[0]->name_pro,
             "quantity" => $quantity,
            "price" => (int) $product[0]->price_new !== 0  ? $product[0]->price_new : $product[0]->price_old ,
            "img" => $product[0]->image
        ];
        session()->put('cart', $cart);
        return response(session()->get('cart'));
    }

    

    public function RemovePr(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
                return response(201);
            }
        }
    }

}
