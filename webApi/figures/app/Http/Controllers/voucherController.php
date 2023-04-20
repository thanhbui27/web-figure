<?php

namespace App\Http\Controllers;

use App\Models\voucherModel;
use App\Models\personModel;
use Illuminate\Http\Request;
use App\Mail\voucherMail;
use Illuminate\Support\Facades\Mail;

class voucherController extends Controller
{
   
    public function index()
    {
        $voucher = voucherModel::get();
        return view('admin.adminListVoucher') -> with(['voucher' => $voucher]);
    }  
    public function create()
    {
        return view('admin.voucherPage');
    }
    public function store(Request $request)
    {
        $getMail = $request -> getMail;
        switch($getMail){
            case "nosend" :
                $code = $request -> voucher;
                $name = $request -> name;
                $dateStart = $request -> dateStart;
                $dateEnd = $request -> dateEnd;
                $action = $request -> action;
                $sale = $request -> sale;
                $limit = $request -> limit;
                $detail = $request -> detail;
                voucherModel::create([
                    'codes' => $code,
                    'names' => $name,
                    'timeStart' => $dateStart,
                    'timeEnd' => $dateEnd,
                    'kindVoucher' => $action,
                    'limits' => $limit,
                    'detail' => $detail,
                    'sale' => $sale
                ]);
                return redirect() -> back();
            case "sendAllMail":
                $code = $request -> voucher;
                $name = $request -> name;
                $dateStart = $request -> dateStart;
                $dateEnd = $request -> dateEnd;
                $action = $request -> action;
                $sale = $request -> sale;
                $limit = $request -> limit;
                $detail = $request -> detail;
                voucherModel::create([
                    'codes' => $code,
                    'names' => $name,
                    'timeStart' => $dateStart,
                    'timeEnd' => $dateEnd,
                    'kindVoucher' => $action,
                    'limits' => $limit,
                    'detail' => $detail,
                    'sale' => $sale
                ]);
                $email = personModel::get();             
                foreach($email as $emails){
                    $Thanks = [
                        'name' => $emails -> fullname,
                        'namecode' => $name,
                        'code' => $code,
                        'timeStart' => $dateStart,
                        'timeEnd' => $dateEnd,
                    ];
                    Mail::to($emails -> email)->send(new voucherMail($Thanks));
                }
                return redirect() -> back();
                default :
                return redirect() -> back();
        }  
    }
    public function update(Request $request)
    {
        $action = $request -> actions;
        switch($action){
            case 'getData':
            $voucher = voucherModel::find($request -> id);
            return $voucher;
            case 'update':
            $data = $request -> data;
            $voucher = voucherModel::find($data[1]['value']);
            $code = $data[3]['value'];
            $name = $data[4]['value'];
            $dateStart = $data[5]['value'];
            $dateEnd = $data[6]['value'];
            $action = $data[7]['value'];
            $sale = $data[8]['value'];
            $limit = $data[9]['value'];
            $getMail =$data[10]['value'];
            $detail = $request -> details;

            $voucher -> codes = $code;
            $voucher -> names = $name;
            $voucher -> timeStart = $dateStart;
            $voucher -> timeEnd = $dateEnd;
            $voucher -> kindVoucher = $action;
            $voucher -> limits = $limit;
            $voucher -> detail = $detail;
            $voucher -> sale = $sale;
            $voucher -> save();

            return $request;
        }
      
    }


}
