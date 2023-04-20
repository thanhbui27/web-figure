<?php

namespace App\Http\Controllers;

use App\Models\accountModel;
use Illuminate\Http\Request;
use App\Models\personModel;
use App\Models\OrderModel;
use App\Models\blog_likeModel;
use App\Models\CommentBlogModel;
use App\Models\commentDPModel;
use App\Models\postModel;
use App\Models\rateModel;
use App\Models\productModel;
use App\Models\spinModel;

class userController extends Controller
{
    public function updateUser(Request $request){
        $id = $request -> id_per;
        $fullname = $request -> fullname;
        $email = $request -> email;
        $date = $request->date;
        $adress = $request -> adress;
        $sdt = $request -> sdt;
        $cmnd = $request -> cmnd;

        $updateUser = personModel::where('id_per',$id) -> first();
        $updateUser -> fullname = $fullname;
        $updateUser -> email = $email;
        $updateUser -> dates = $date;
        $updateUser -> cmnd = $cmnd;
        $updateUser -> sdt = $sdt;
        $updateUser -> adress = $adress;

        $cus =[
            'id_cus' => $id,
            'fullname' => $fullname,
            'email' => $email,
            'dates' => $date,
            'cmnd' => $cmnd,
            'adress' => $adress,
            'sdt' => $sdt
        ];
        session($cus);
        $updateUser -> save();
        return redirect('user');
    }
    public function updateCurrent(Request $request){
        $action = $request -> action ;
        switch($action){
            case 'updateName':
                $value = $request -> value;
                $updateUser = personModel::where('id_per',session('id')) -> first();
                $updateUser -> fullname = $value;
                session()->put('fullname',$value);
                $updateUser -> save();
            break;
            case 'updateEmail':
                $value = $request -> value;
                $updateUser = personModel::where('id_per',session('id')) -> first();
                $updateUser -> email =   $value;
                session()->put('email',  $value);
                $updateUser -> save();
            break;
            case 'updatedates':
                $value = $request -> value;
                $updateUser = personModel::where('id_per',session('id')) -> first();
                $updateUser -> dates = $value;
                session()->put('dates',$value);
                $updateUser -> save();
            break;
            case 'updateCmnd':
               $value = $request -> value;
                $updateUser = personModel::where('id_per',session('id')) -> first();
                $updateUser -> cmnd = $value;
                session()->put('cmnd',$value);
                $updateUser -> save();
            break;
            case 'updateAdress':
               $value = $request -> value;
                $updateUser = personModel::where('id_per',session('id')) -> first();
                $updateUser -> adress = $value;
                session()->put('adress',$value);
                $updateUser -> save();
            break;
            case 'updateSdt':
               $value = $request -> value;
                $updateUser = personModel::where('id_per',session('id')) -> first();
                $updateUser -> sdt =$value;
                session()->put('sdt', $value);
                $updateUser -> save();
            break;
        }
    }
    public function show(){
       $customer =  personModel::join('account','account.id_ac','=','person.id_per') -> paginate(8); 
       return view('admin.adminCustomer') -> with(['customer' => $customer]);
    }
    public function getInf(Request $request){
        $id = $request -> id;
        $NumOrder = OrderModel::where('id_user',$id)->get();
        $info = accountModel::where('id_ac',$id) -> first();
        $quantity = $this -> explodeQuantity($NumOrder);
        $total = 0;
        foreach($quantity as $quantitys){
         $total += (int)$quantitys;
        }
        
        return ['total' =>$total, 'info' => $info];
    }
    public function searchInf(Request $request){
        $key = $request ->search;
        if($request -> ajax()){
            $products = personModel::where('fullName', 'LIKE', '%' . $key . '%')->get();
            return response($products);
        }
    }
    public function explodeQuantity($arr){
        $quantity = '';
        foreach( $arr as  $NumOrders){
             $quantity .= $NumOrders ->quantity.','; 
        }
        $quantity = substr($quantity, 0, -1);
        return explode(',',$quantity);
    }
    public function destroy(Request $request){
        $id = $request -> id;
        spinModel::where('id_user',$id) -> delete();
        blog_likeModel::where('id_cus',$id)->delete();
        OrderModel::where('id_user',$id)->delete();
        commentDPModel::where('id_cus',$id)->delete();
        CommentBlogModel::where('id_cus',$id)->delete();
        postModel::where('id_cus',$id)->delete();
        rateModel::where('id_use',$id)->delete();
        personModel::where('id_per',$id)->delete();  
        accountModel::where('id_ac',$id)->delete();
    }
    public function getOrder(){
        $order = OrderModel::where("id_user",session("id_cus")) -> get();
        return $order;
    }
    public function getProduct(){
        $product = [];
        $idProduct = [];
        $order = OrderModel::where("id_user",session("id_cus")) -> get();
        foreach($order as $orders){
           $arr = explode(",",$orders -> listId_pr);
           foreach($arr as $arrs){
                 array_push($idProduct,$arrs);
           }
        }
        for($i = 0 ; $i < count($idProduct) ; $i++){
            for($j = $i + 1 ; $j < count($idProduct) ; $j++){
                if($idProduct[$i] == $idProduct[$j]){
                  array_splice($idProduct, $j, 1);
                  $j--;
                }
            }
        }
        foreach($idProduct as $idProducts){
            array_push($product,productModel::find($idProducts));
        }
        return response() -> json($product);
    }
    public function changePassword(Request $request){
        $account = accountModel::find(session('id_cus'));
        $pass = md5($request -> confirm_password);
        $account -> password = $pass;
        $account -> save();
        return 'Thay đổi mật khẩu thành công';
    }
    public function upAdmin(Request $request){
        $account = accountModel::find($request -> id);
        if($account -> quyen == 0){
            $account -> quyen = 1;
            $account -> save();
        }else if($account -> quyen == 1){
            $account -> quyen = 0;
            $account -> save();
        }
        return $account -> quyen;
    }
}
