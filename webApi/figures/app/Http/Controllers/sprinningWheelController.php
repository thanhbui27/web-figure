<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\personModel;
use App\Models\spinModel;
use App\Models\giftModel;
use App\Models\dataSpin;
use App\Models\voucherModel;
use Carbon\Carbon;

class sprinningWheelController extends Controller
{
    public function index(){
        $spin = spinModel::where("id_user",session('id_cus')) -> first();
        if($spin){
        $sum = 0;
        $price = 0;
        $temp = 0;
        $get =  OrderModel::where("id_user",session('id_cus')) -> get();
          foreach($get as $gets){
               $sum += $gets -> tien;          
           }
           $price = round($sum / 500000);
           $temp  = $price - $spin -> total;
           $spin -> money = $sum;
           $spin -> total =  $spin -> total + $temp;
           $spin -> remaining = $spin -> remaining + $temp;
           $spin -> save();  
        }else {
           $per = personModel::find(session('id_cus'));
           if($per){
                spinModel::create([
                    'id_user' => session('id_cus')
                 ]); 
           }
           
        }
        return view('spinningWheel');
    }
    public function luckySpin(){
        $spin = spinModel::where("id_user",session('id_cus')) -> first();
        return $spin;
    }
    public function subSpin(Request $request){
        $spin = spinModel::where("id_user",session('id_cus')) -> first();
        if($spin -> remaining > 0 ){
            $spin -> remaining = $request -> n;
            $spin -> save();
        }
        
    }
    public function gift(Request $request){
        $name = $request -> name;
        $detail = $request -> details;
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        giftModel::create([
            'id_user' => session('id_cus'),
            'nameGift' => $name,
            'details' => $detail,
            'dateGet' => $currentTime->toDateTimeString()
        ]);
        return $currentTime->toDateTimeString();
    }
    public function showGift(){
        $gift = giftModel::join('person','person.id_per','=','id_user') -> where('id_user',session('id_cus')) -> get();
        return $gift;
    }
    public function showAllGift(){
        $gift = giftModel::join('person','person.id_per','=','id_user') ->  limit(10) -> get();
        return $gift;
    }
    public function dataSpin(){
        $data = dataSpin::get();
        return $data;
    }
    public function indexAdmin(){
        return view('admin.adminSpinningWheel');
    }
    
    public function addGift(Request $request){
        $action = $request -> add ;
    
        switch($action){
            case "nonGift":
                $name = $request -> nameGift;
                    $request->validate([
                      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ]);
                    $img = time() + 1 . '.' . $request->file('image')->extension();
                    $request->file('image')->move(public_path('layout/Img'), $img);
                $details = $request -> details;
                dataSpin::create([
                    'nameGift' => $name,
                    'img' => $img,
                    'details' => $details,
                    'codes ' => ''
                ]);
                return redirect() -> back();
            break;

            case "gift":
                $name = $request -> nameGift;
                $code = $request -> voucher;
                $name = $request -> name;
                $dateStart = $request -> dateStart;
                $dateEnd = $request -> dateEnd;
                $action = $request -> action;
                $sale = $request -> sale;
                $limit = $request -> limit;
                $request->validate([
                  'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                $img = time() + 1 . '.' . $request->file('image')->extension();
                $request->file('image')->move(public_path('layout/Img'), $img);
                $details = $request -> details;
                dataSpin::create([
                    'nameGift' => $name,
                    'img' => $img,
                    'details' => $details,
                    'codes ' => $code
                ]);
               
                voucherModel::create([
                    'codes' => $code,
                    'names' => $name,
                    'timeStart' => $dateStart,
                    'timeEnd' => $dateEnd,
                    'kindVoucher' => $action,
                    'limits' => $limit,
                    'detail' => $details,
                    'sale' => $sale
                ]);
                return redirect() -> back();
            break;
        }
    }
    
}
