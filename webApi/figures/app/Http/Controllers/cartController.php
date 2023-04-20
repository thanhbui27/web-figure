<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;

class cartController extends Controller
{
    public function index()
    {
        // dd(session()->get('cart'));
        return view('cart');
    }
    public function action(Request $request){
        $action = $request -> action;
            switch($action){
                case 'add':
                    $this -> addCart($request);
                break;
                case 'remove':
                    $this -> RemovePr($request);
                break;
                case 'update':
                $this -> updateQuantity($request);
                break;
                case 'addCartD':
                $this -> addCartD($request);
                break;
            }
    }
    public function addCartD(Request $request){
        $id = $request->id;
        $quantity = $request -> quantity;
        $product = productModel::where('id_pro', $id)->get();
        if(!$product) {
            abort(404);
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
            return redirect('cart');
        }
       
        if(isset($cart[$id])) {
            $cart[$id]['quantity']+=$quantity;
            session()->put('cart', $cart);
            return redirect('cart');
        }
     
        $cart[$id] = [
            "id_pro" => $product[0] -> id_pro,
            "name_pro" => $product[0]->name_pro,
             "quantity" => $quantity,
            "price" => (int) $product[0]->price_new !== 0  ? $product[0]->price_new : $product[0]->price_old ,
            "img" => $product[0]->image
        ];
        session()->put('cart', $cart);
        return redirect('cart');
    }
    public function addCart(Request $request)
    {
        $id = $request->id;
        $product = productModel::where('id_pro', $id)->get();
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "id_pro" => $product[0] -> id_pro,
                        "name_pro" => $product[0]->name_pro,
                        "quantity" => 1,
                        "price" => (int) $product[0]->price_new !== 0  ? $product[0]->price_new : $product[0]->price_old ,
                        "img" => $product[0]->image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect() -> back();
        }
       
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect() -> back();
        }
     
        $cart[$id] = [
            "id_pro" => $product[0] -> id_pro,
            "name_pro" => $product[0]->name_pro,
             "quantity" => 1,
            "price" => (int) $product[0]->price_new !== 0  ? $product[0]->price_new : $product[0]->price_old ,
            "img" => $product[0]->image
        ];
        session()->put('cart', $cart);
        return redirect() -> back();
    }

    public function showCart()
    {
        $cart = session()->get('cart');
        if(isset($cart)){
            return count($cart);
        }else{
            return 0;
        }
      
    }
    public function RemovePr(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
        }
    }
    public function updateQuantity(Request $request){
        $id = $request->id;
        $quantity = $request -> quantity;
        if($id){
            $cart = session()->get('cart');
            if(isset($cart[$id])){
                $cart[$id]['quantity'] = $quantity;
                session()->put('cart', $cart);
            }
            if($quantity === '0' ){
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
        }
        
    }
}
