<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\categoryModel;
use App\Models\commentDPModel;
use App\Models\favProductModel;
use App\Models\imageProductModel;
use App\Models\OrderModel;
use App\Models\productModel;
use App\Models\rateModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiProduct extends Controller
{
  public function getProductByCate(Request $request)
  {
    $id = $request->id;
    $product =  productModel::where("id_Cate", "=", $id)->get();
    return response($product);
  }

  public function getProduct()
  {
    $product = productModel::orderBy('id_pro', 'desc')->get();
    return response($product);
  }

  public function getProductCate()
  {
    $arr = [];
    $cate = categoryModel::get();

    foreach ($cate as $cates) {
      $val =  productModel::where("id_Cate", "=", $cates->id_cate)->limit(2)->get();
      if (count($val) > 0) {
        array_push($arr, ...$val);
      }
    }
    if (count($arr) > 0) {
      return response($arr);
    }
  }


  public function getTopProduct()
  {

    $productOder = OrderModel::get();
    $arr = [];
    foreach ($productOder as $productOders) {
      $product = explode(',', $productOders->listId_pr);
      $productQuantity = explode(',', $productOders->quantity);
      for ($i = 0; $i < count($product); $i++) {
        array_push($arr, ['product' => $product[$i], 'value' => $productQuantity[$i]]);
      }
    }

    for ($i = 0; $i < count($arr); $i++) {
      for ($j = $i + 1; $j <  count($arr); $j++) {
        if ($arr[$i]['product'] === $arr[$j]['product']) {
          $arr[$i]['value'] += $arr[$j]['value'];
          array_splice($arr, $j, 1);
          $j--;
        }
      }
    }
    $arrPr = [];
    foreach ($arr as $arrs) {
      $pr = productModel::find($arrs['product']);
      $pr['quantity'] = $arrs['value'];
      array_push($arrPr, $pr);
    }

    $array = collect($arrPr)->sortBy('quantity')->reverse()->toArray(6);
    $array = array_splice($array, 0, 6, true);
    return  response()->json($array);
  }

  public function getTopFigureAttention()
  {
    $product = productModel::where('noibat', '1')->orderBy('id_pro', 'desc')->limit(8)->get();

    return response()->json($product);
  }

  public function getComment(Request $request)
  {
    $id = $request->id;
    $comment = commentDPModel::join('person', 'person.id_per', '=', 'comment_product.id_cus')->where('id_pro', $id)->orderBy('id_com', 'desc')->get();
    return response($comment);
  }
  public function getImg(Request $request)
  {
    $id = $request->id;
    $detailImg = imageProductModel::where('id_img', $id)->get();
    return response($detailImg);
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
    return response(201);
  }

  public function searchProduct(Request $request)
  {
    $result = productModel::where("name_pro", "LIKE", "%" . $request->name . "%")->orderBy("id_pro", "desc")->get();
    return response()->json($result);
  }

  public function addFavProduct(Request $request)
  {
    $id_pro = $request->id_pro;
    $id_user = $request->id_user;

    $dataFavProduct = favProductModel::where('id_user', $id_user)->where('id_pro', $id_pro)->get();
    if ($dataFavProduct->isEmpty()) {
      favProductModel::create(
        [
          'id_user' => $id_user,
          'id_pro' => $id_pro
        ]
      );
      return response(201);
    } else {
      return response(401);
    }
  }
  public function getFavProduct(Request $request)
  {
    $id_user = $request->id_user;
    $dataFavProduct = favProductModel::where('id_user', $id_user)->get();
    $arr  = [];
    foreach($dataFavProduct as $dataFavProducts){
        $product = productModel::find($dataFavProducts -> id_pro);
        array_push($arr,$product);
    }
    return response($arr);
  }

  public function CheckBuyProduct($id){
    $product = [];
    $idProduct = [];
    $order = OrderModel::where("id_user",$id) -> get();
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
    $id_user = $request -> id_user;
    $isRate = rateModel::where('id_use',$id_user)->where('id_pro',$id_pro)->whereNotNull('rate') -> first();
    $getPro = $this -> CheckBuyProduct($id_user);
    $isCheck = false;
    foreach($getPro as $getPros){
        if($getPros -> id_pro == $id_pro){
            $isCheck = true;
        }
    } 
    if($isCheck){
        if(!$isRate){
            rateModel::create([
                'id_use' => $id_user,
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
            return  response($tb);
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
            return  response($tb);
        }
    }else{
        return response(40.1);
    }
}

}
