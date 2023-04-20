<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\personModel;
use App\Models\productModel;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ApiUser extends Controller
{
    public function getUser (Request $request){
        return response(personModel::find($request -> id));
    }
    public function getInfoUser(Request $request)
    {
        $person = personModel::join("account","person.id_per","=","account.id_ac") -> where("id_per" ,"=",$request -> id) -> first();
        $getProduct = $this -> getProductByUser($request);
        $quantity = 0;
        $price = 0;
        foreach($getProduct as $getProducts){
            $quantity += $getProducts['quantity'];
            if((int)$getProducts -> price_new != 0){
                $price += $getProducts -> quantity * (int)$getProducts->price_new;
            }else{
                $price += $getProducts -> quantity *(int) $getProducts -> price_old ;
            }
          
        }
        $person-> setAttribute('quantity',$quantity);
        $person-> setAttribute('price',$price);
        return response($person); 
    }

    public function updateCurrent(Request $request){
        $action = $request -> action ;
        switch($action){
            case 'updateName':
                $value = $request -> value;
                $updateUser = personModel::where('id_per',$request -> id) -> first();
                $updateUser -> fullname = $value;
                $updateUser -> save();
                return response(201);
            break;
            case 'updateEmail':
                $value = $request -> value;
                $updateUser = personModel::where('id_per',$request -> id) -> first();
                $updateUser -> email =   $value;
                $updateUser -> save();
                return response(201);
            break;
            case 'updatedates':
                $value = $request -> value;
                $updateUser = personModel::where('id_per',$request -> id) -> first();
                $updateUser -> dates = $value;
                $updateUser -> save();
                return response(201);
            break;
            case 'updateCmnd':
               $value = $request -> value;
                $updateUser = personModel::where('id_per',$request -> id) -> first();
                $updateUser -> cmnd = $value;
                $updateUser -> save();
                return response(201);
            break;
            case 'updateAdress':
               $value = $request -> value;
                $updateUser = personModel::where('id_per',$request -> id) -> first();
                $updateUser -> adress = $value;
                $updateUser -> save();
                return response(201);
            break;
            case 'updateSdt':
               $value = $request -> value;
                $updateUser = personModel::where('id_per',$request -> id) -> first();
                $updateUser -> sdt =$value;
                $updateUser -> save();
                return response(201);
            break;
        }
    }

    public function UpdateImage(Request $request)
    {   
        $id = $request -> id;
        $update = personModel::find($id);
        if ($request->file('img')) {
            $request->validate([
              'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);
            $name1 = time() + 3 . '.' . $request->file('img')->extension();
            $request->file('img')->move(public_path('layout/Img'), $name1);
            $update -> img = $name1;
            $update->save();
            return response() -> json(201);
          }
          return response() -> json(404);
    }

    public function getProductByUser(Request $request)
    {
        $id = $request->id;
        $value = OrderModel::where("id_user","=",$id) -> get();
        $listProduct = [];
        foreach ($value  as $values){
            $product = explode(',',$values->listId_pr);
            $productQuantity = explode(',',$values->quantity);
            $i = 0;
            foreach ($product as $products) {
                $getProducts = productModel::find($products);
                $getProducts['quantity'] = $productQuantity[$i];
                array_push($listProduct,$getProducts);
                $i++;
            }
        }

        for($i = 0 ; $i < count($listProduct) ; $i++){
            for($j = $i + 1 ; $j < count($listProduct) ; $j++){
                if((int)$listProduct[$i]['id_pro'] == (int)$listProduct[$j]['id_pro'] ){
                    (int)$listProduct[$i]['quantity'] += (int)$listProduct[$j]['quantity'];
                    array_splice($listProduct, $j, 1);
                    --$j;
                }
            }
        }

        return $listProduct;
    }

    public function getListOrderById(Request $request){
        $order = OrderModel::where("id_user",$request -> id) -> get();
         return response() -> json( $order);
    }

   

}
