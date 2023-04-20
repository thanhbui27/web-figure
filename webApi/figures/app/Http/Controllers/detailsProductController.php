<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\commentDPModel;
use App\Models\imageProductModel;
use App\Models\rateModel;
use App\Models\OrderModel;
use Carbon\Carbon;

class detailsProductController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $detailProduct = productModel::where('id_pro', $id)->get();
        $detailImg = imageProductModel::where('id_img', $id)->get();
        $comment = commentDPModel::join('person', 'person.id_per', '=', 'comment_product.id_cus')->where('id_pro', $id)->orderBy('id_com', 'desc')->get();
        $CountRate = 0;
        $rates = rateModel::where('id_pro',$id)->whereNotNull('rate') -> get();
            foreach( $rates as $key => $value){
                $CountRate += $value->rate;
            }
            if(count($rates) > 0){
                $tb = $CountRate / count($rates);
            }else{
                $tb = 0;
            }
           
        if ($detailImg) {
            return view('detailProduct')->with([
                'detailProducts' => $detailProduct,
                'detailImg' => $detailImg,
                'productRecommender' => $this->productLimit($id),
                'comment' => $comment,
                'tb' => $tb,
                'count' => count($rates)
            ]);
        } else {
            return view('detailProduct')->with([
                'detailProducts' => $detailProduct,
                'productRecommender' => $this->productLimit($id),
                'comment' => $comment,
                'tb' => $tb,
                'count' => count($rates)
            ]);
        }
    }
    public function productLimit($id)
    {
        $product = productModel::find($id);
        $cate = productModel::where('id_Cate',$product -> id_Cate) -> orderBy('id_pro','desc') -> get();
        return $cate;
    }
    public function commentDetailProduct(Request $request)
    {
        $content = $request->content;
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        $id_user = $request->id_user;
        $id_pro = $request->id_pro;
        commentDPModel::create([
            'id_pro' => $id_pro,
            'id_cus' => $id_user,
            'date' => $currentTime->toDateTimeString(),
            'content' => $content
        ]);
        $comment = commentDPModel::join('person', 'person.id_per', '=', 'comment_product.id_cus')->where('id_pro', $id_pro)->orderBy('id_com', 'desc')->get();
        return view('response.responseComment')->with(['productList' =>  $comment]);
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
        return $product;
    }
    public function RateProduct(Request $request){
        $id_pro = $request -> id_pro;
        $index = $request -> index;
        $isRate = rateModel::where('id_use',session('id'))->where('id_pro',$id_pro)->whereNotNull('rate') -> first();
        $getPro = $this -> getProduct();
        $isCheck = false;
        foreach($getPro as $getPros){
            if($getPros -> id_pro == $id_pro){
                $isCheck = true;
            }
        }
        if($isCheck){
            if(!$isRate){
                rateModel::create([
                    'id_use' => session('id'),
                    'id_pro' => $id_pro,
                    'rate' => $index
                ]);
                $CountRate = 0;
                $rates = rateModel::where('id_pro',$id_pro)->whereNotNull('rate') -> get();
                foreach( $rates as $key => $value){
                    $CountRate += $value->rate;
                }
                $tb = $CountRate / count($rates);
                $product = productModel::find($id_pro);
                $product -> danhgia = $tb;
                $product -> save();
                return  [
                    'tb' => $tb,
                    'count' => count($rates)
                ];
            }else{
               $isRate -> rate = $index;
               $isRate -> save();
               $CountRate = 0;
               $rates = rateModel::where('id_pro',$id_pro)->whereNotNull('rate') -> get();
                
               foreach( $rates as $key => $value){
                    $CountRate += $value->rate;
                }
                $tb = $CountRate / count($rates);
                $product = productModel::find($id_pro);
                $product -> danhgia = $tb;
                $product -> save();
                return  [
                    'tb' => $tb,
                    'count' => count($rates)
                ];
            }
        }else{
            $mess = ['error' => 'hay mua sản phẩm để được đánh giá'];
            return $mess;
        }
    }
}
