<?php

namespace App\Http\Controllers;

use App\Mail\ThanksBuyProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\productModel;
use App\Models\voucherModel;
use App\Models\userVocher;
use Carbon\Carbon;


class PayProductController extends Controller
{
    public $data;
    public function setData($data)
    {
        $this -> data = $data;
        
    }
    public function actionPay(Request $request)
    {
        $action = $request->paypay; 
        switch ($action) {
            case 'giaohang';
            $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
            
            $voucher = $request -> voucher;
            if($voucher == null){
                $this->PayNormal($request);
                session()->forget('cart');
                return redirect('Paydone');
            }
            $getVoucher = voucherModel::where('codes',$voucher) -> first();         
            if($getVoucher == null){
                return back() ->with('error', 'Voucher này bạn đã sử dụng');
            }
            if($currentTime -> toDateTimeString()  >  $getVoucher -> timeEnd){
                return back() ->with('error', 'Voucher đã hết hạn sử dụng');
            }
            if($currentTime -> toDateTimeString()  <  $getVoucher -> timeStart){
                return back() ->with('error', 'Voucher voucher không tồn tại hoặc chưa được bắt đầu');
            }
            $issetVoucher = userVocher::where('id_voucher',$getVoucher -> id) -> where("id_use",session('id_cus')) -> first();
            if($issetVoucher != null){
                return back() ->with('error', 'Voucher này bạn đã sử dụng');
            }else{
                foreach (session('cart') as  $details) {
                    $product = productModel::where('id_pro',$details['id_pro'])->first();
                    if ((int)$details['quantity'] > $product['soluong']) {
                        return back() ->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
                    }
                }              
                $upDatePrice = $request -> TotalPrice - (int)$getVoucher->sale;              
                if($upDatePrice <= 0){
                    $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
                    $temp =  $request->id_pros;
                    $id_pro = '';
                    $quantity = '';
                    $namePr = '';
                    foreach (session('cart') as  $details) {
    
                        $id_pro .= $details['id_pro'] . ',';
                        $quantity .= $details['quantity'] . ',';
                        $namePr .= $details['name_pro'] . ',';
                    }
                    foreach (session('cart') as  $details) {
                        if ($details['id_pro']) {
                            $product = productModel::find($details['id_pro']);
                            $product->soluong = ($product->soluong - $details['quantity']);
                            $product->save();
                        }
                    }
                    $id_pro = substr($id_pro, 0, -1);
                    $namePr = substr($namePr, 0, -1);
                    $quantity = substr($quantity, 0, -1);
                    OrderModel::create([
                        'id_user' => session('id_cus'),
                        'listId_pr' => $id_pro,
                        'id_pro' =>   $temp,
                        'quantity' =>  $quantity,
                        'maGD' =>  date("YmdHis"),
                        'tien' => 0,
                        'statuss' => 0,
                        'payBy' => 'normal',
                        'dates' => $currentTime->toDateTimeString()
                    ]);
                 
                    userVocher::create([
                        "id_use" => session('id_cus'),
                        "id_voucher" => $getVoucher -> id,
                        "use" => 1,
                        "dates" =>  $currentTime -> toDateTimeString()
                    ]);
                    $this->PayNormal($request);
                    session()->forget('cart');
                    return redirect('Paydone');
                }
                $request->merge([
                    'TotalPrice' => $upDatePrice,
                ]);
                $this->PayNormal($request);
                session()->forget('cart');
                return redirect('Paydone');              
            }           
               
                break;
            case 'vnpay';
                $this -> setData($request -> id_pros);
                $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
            
                $voucher = $request -> voucher;
                if($voucher == null){
                    return $this->PayVnPay($request);
                }
            
                $getVoucher = voucherModel::where('codes',$voucher) -> first();
                
                if($getVoucher == null){
                    return back() ->with('error', 'Voucher này bạn đã sử dụng');
                }
                if($currentTime -> toDateTimeString()  >  $getVoucher -> timeEnd){
                    return back() ->with('error', 'Voucher đã hết hạn sử dụng');
                }
                if($currentTime -> toDateTimeString()  <  $getVoucher -> timeStart){
                    return back() ->with('error', 'Voucher voucher không tồn tại hoặc chưa được bắt đầu');
                }
                $issetVoucher = userVocher::where('id_voucher',$getVoucher -> id) -> where("id_use",session('id_cus')) -> first();
                if($issetVoucher != null){
                    return back() ->with('error', 'Voucher này bạn đã sử dụng');
                }else{
                    foreach (session('cart') as  $details) {
                        $product = productModel::where('id_pro',$details['id_pro'])->first();
                        if ((int)$details['quantity'] > $product['soluong']) {
                            return back() ->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
                        }
                    }              
                    $upDatePrice = $request -> TotalPrice - (int)$getVoucher->sale;              
                    if($upDatePrice <= 0){
                        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
                        $temp =  $request->id_pros;
                        $id_pro = '';
                        $quantity = '';
                        $namePr = '';
                        foreach (session('cart') as  $details) {
                            $id_pro .= $details['id_pro'] . ',';
                            $quantity .= $details['quantity'] . ',';
                            $namePr .= $details['name_pro'] . ',';
                        }
                        foreach (session('cart') as  $details) {
                            if ($details['id_pro']) {
                                $product = productModel::find($details['id_pro']);
                                $product->soluong = ($product->soluong - $details['quantity']);
                                $product->save();
                            }
                        }
                        $id_pro = substr($id_pro, 0, -1);
                        $namePr = substr($namePr, 0, -1);
                        $this->sendEmail($namePr);
                        $quantity = substr($quantity, 0, -1);
                        OrderModel::create([
                            'id_user' => session('id_cus'),
                            'listId_pr' => $id_pro,
                            'id_pro' =>   $temp,
                            'quantity' =>  $quantity,
                            'maGD' =>  date("YmdHis"),
                            'tien' => 0,
                            'statuss' => 1,
                            'payBy' => 'VNPAY',
                            'dates' => $currentTime->toDateTimeString()
                        ]);
                        userVocher::create([
                            "id_use" => session('id_cus'),
                            "id_voucher" => $getVoucher -> id,
                            "use" => 1,
                            "dates" =>  $currentTime -> toDateTimeString()
                        ]);
                        $value = ['pay' => 'vnPay','price' => 'free'];
                        session()->forget('cart');
                        return view('Paydone')->with(['data' =>  $value]);
                    }
                    userVocher::create([
                        "id_use" => session('id_cus'),
                        "id_voucher" => $getVoucher -> id,
                        "use" => 1,
                        "dates" =>  $currentTime -> toDateTimeString()
                    ]);
                    $request->merge([
                        'TotalPrice' => (int)$upDatePrice,
                    ]);
                    return $this->PayVnPay($request);                  
                }           
                break;
            case 'momo'; 
                $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
            
                $voucher = $request -> voucher;
                if($voucher == null){
                    $request->merge([
                        'TotalPrice' => (int) $request -> TotalPrice,
                    ]);
                    return $this->PayMomo($request);
                }
                $getVoucher = voucherModel::where('codes',$voucher) -> first();
                
                if($getVoucher == null){
                    return back() ->with('error', 'Voucher này bạn đã sử dụng');
                }
                if($currentTime -> toDateTimeString()  >  $getVoucher -> timeEnd){
                    return back() ->with('error', 'Voucher đã hết hạn sử dụng');
                }
                if($currentTime -> toDateTimeString()  <  $getVoucher -> timeStart){
                    return back() ->with('error', 'Voucher voucher không tồn tại hoặc chưa được bắt đầu');
                }
                $issetVoucher = userVocher::where('id_voucher',$getVoucher -> id) -> where("id_use",session('id_cus')) -> first();
               if($issetVoucher != null){
                    return back() ->with('error', 'Voucher này bạn đã sử dụng');
                }else{
                   
                    foreach (session('cart') as  $details) {
                        $product = productModel::where('id_pro',$details['id_pro'])->first();
                        if ((int)$details['quantity'] > $product['soluong']) {
                            return back() ->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
                        }
                    }              
                    $upDatePrice = $request -> TotalPrice - (int)$getVoucher->sale;              
                    if($upDatePrice <= 0){
                        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
                        $temp =  $request->id_pros;
                        $id_pro = '';
                        $quantity = '';
                        $namePr = '';
                        foreach (session('cart') as  $details) {
                            $id_pro .= $details['id_pro'] . ',';
                            $quantity .= $details['quantity'] . ',';
                            $namePr .= $details['name_pro'] . ',';
                        }
                        foreach (session('cart') as  $details) {
                            if ($details['id_pro']) {
                                $product = productModel::find($details['id_pro']);
                                $product->soluong = ($product->soluong - $details['quantity']);
                                $product->save();
                            }
                        }
                        $id_pro = substr($id_pro, 0, -1);
                        $namePr = substr($namePr, 0, -1);
                        $this->sendEmail($namePr);
                        $quantity = substr($quantity, 0, -1);
                        OrderModel::create([
                            'id_user' => session('id_cus'),
                            'listId_pr' => $id_pro,
                            'id_pro' =>   $temp,
                            'quantity' =>  $quantity,
                            'maGD' =>  date("YmdHis"),
                            'tien' => 0,
                            'statuss' => 1,
                            'payBy' => 'MOMO',
                            'dates' => $currentTime->toDateTimeString()
                        ]);
                     
                        userVocher::create([
                            "id_use" => session('id_cus'),
                            "id_voucher" => $getVoucher -> id,
                            "use" => 1,
                            "dates" =>  $currentTime -> toDateTimeString()
                        ]);
                        $value = ['pay' => 'vnPay','price' => 'free'];
                        session()->forget('cart');
                        return view('Paydone')->with(['data' =>  $value]);
                    }
                    $request->merge([
                        'TotalPrice' =>(int) $upDatePrice,
                    ]);
                 
                    return $this->PayMomo($request);                  
                }
                break;
        }
    }
    public function PayNormal(Request $request)
    {
        foreach (session('cart') as  $details) {
            $product = productModel::where('id_pro',$details['id_pro'])->first();
            if ((int)$details['quantity'] > $product['soluong']) {
                return back() ->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
            }
        }
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        $temp =  $request->id_pros;
        $id_pro = '';
        $quantity = '';
        foreach (session('cart') as  $details) {
            $id_pro .= $details['id_pro'] . ',';
            $quantity .= $details['quantity'] . ',';
        }
        foreach (session('cart') as  $details) {
            if ($details['id_pro']) {
                $product = productModel::find($details['id_pro']);
                if ($product->soluong < $details['id_pro']) {
                    return view('cart')->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
                }
            }
        }
        $id_pro = substr($id_pro, 0, -1);
        $quantity = substr($quantity, 0, -1);
        OrderModel::create([
            'id_user' => session('id_cus'),
            'listId_pr' => $id_pro,
            'id_pro' =>   $temp,
            'quantity' =>  $quantity,
            'maGD' => date("YmdHis"),
            'tien' => $request->TotalPrice,
            'payBy' => 'PayNormal',
            'dates' => $currentTime->toDateTimeString()
        ]);
    }
    public function ConfimPayNomal(Request $request){
        $id = $request-> id;
        $orderConfim = OrderModel::find($id);
        $product = explode(',', $orderConfim -> listId_pr);
        $quantity = explode(',',$orderConfim -> quantity);
        $i=0;
        foreach($product as $products){
            $PG = productModel::find($products);
            $PG -> soluong = (int)$PG -> soluong - (int)$quantity[$i];
            $PG -> save();
            $i++;
        }
        $orderConfim -> statuss = 1;
        $orderConfim -> save();
    }
   
    public function PayVnPay(Request $request)
    {   
        foreach (session('cart') as  $details) {
            $product = productModel::where('id_pro',$details['id_pro'])->first();
            if ((int)$details['quantity'] > $product['soluong']) {
                return back() ->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
            }
        }
        session(['price_pay' => $request->TotalPrice]);
        // $vnp_OrderInfo = 'Mua cac san pham : ';
        // foreach (session('cart') as  $details) {
        //     $vnp_OrderInfo .= $details['name_pro'] . ',';
        // }
        // $vnp_OrderInfo = substr($this -> vn_to_str($vnp_OrderInfo), 0,-1);
        $vnp_OrderInfo = 'Thanh toán mua các sản phẩm';
        session(['cost_id' => session('id_cus')]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "PCNFOF2M"; //Mã website tại VNPAY 
        $vnp_HashSecret = "WSXHNPHFCBGQCPBIANRAZHXVXMFWMUUW"; //Chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://192.168.1.4/vnPayReturn";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->TotalPrice * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();
        session(['vnp_TxnRef' => $vnp_TxnRef]);
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        } 

        return redirect($vnp_Url);       
    }
    public function vnPayReturn(Request $request)
    {
     
        $vnp_HashSecret = "WSXHNPHFCBGQCPBIANRAZHXVXMFWMUUW";
        $vnp_SecureHash = $request->vnp_SecureHash;
        $inputData = array();
        $data = request()->all();
        foreach ($data as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            if ($request->vnp_ResponseCode === '00') {
                $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
                $temp =  $request->id_pros;
                $id_pro = '';
                $quantity = '';
                $namePr = '';
                foreach (session('cart') as  $details) {
                    $id_pro .= $details['id_pro'] . ',';
                    $quantity .= $details['quantity'] . ',';
                    $namePr .= $details['name_pro'] . ',';
                }
                foreach (session('cart') as  $details) {
                    if ($details['id_pro']) {
                        $product = productModel::find($details['id_pro']);
                        $product->soluong = ($product->soluong - $details['quantity']);
                        $product->save();
                    }
                }
                $id_pro = substr($id_pro, 0, -1);
                $namePr = substr($namePr, 0, -1);
                $this->sendEmail($namePr);
                $quantity = substr($quantity, 0, -1);
                OrderModel::create([
                    'id_user' => session('id_cus'),
                    'listId_pr' => $id_pro,
                    'id_pro' =>   $temp,
                    'quantity' =>  $quantity,
                    'maGD' => $data['vnp_TxnRef'],
                    'tien' => $data['vnp_Amount'] / 100,
                    'statuss' => 1,
                    'payBy' => 'VNPAY',
                    'dates' => $currentTime->toDateTimeString()
                ]);

                session()->forget('cart');
                return view('Paydone')->with(['resoponseData' => request()->all()]);
            }
        }
        return view('Paydone')->with(['error' => 'có lỗi xảy ra vui lòng thử lại sau']);
    }
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $result = curl_exec($ch);

        curl_close($ch);
        return $result;
    }

    public function PayMomo(Request $request)
    {
        $orderInfo = '';
        foreach (session('cart') as  $details) {
            $product = productModel::where('id_pro',$details['id_pro'])->first();
            if ((int)$details['quantity'] > $product['soluong']) {
                return back() ->with('error', 'Sản phẩm chỉ còn lại ' . $product->soluong . ' sản phẩm, vui lòng giảm số sản phẩm cho phù hợp');
            }
        }
        foreach (session('cart') as  $details) {
            $orderInfo .= $details['name_pro'] . ',';
        }
        $orderInfo = substr($orderInfo, 0, -1);
        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        $partnerCode = 'MOMOZ0IY20210910';
        $accessKey = "ylUKFyvQrDDEbEZG";
        $secretKey = "6zoccZyiTC6Ik1Z4U2ubYnOO8wHqjSBO";
        $amount = (string) $request->TotalPrice;
        $orderId = time() . "";
        $returnUrl = "http://127.0.0.1:8000/MomoReturn";
        $notifyurl = "http://127.0.0.1:8000/ipn_momo.php";
        $extraData = "merchantName=MoMo Partner";
        $requestId = time() . "";
        $requestType = "captureMoMoWallet";
        $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'notifyUrl' => $notifyurl,
            'returnUrl' => $returnUrl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);
        if($jsonResult['errorCode'] === 42 ){
            return redirect('cart')->with('error', 'Hiện tại không thể sử dụng được voucher');
        }

        return redirect($jsonResult['payUrl']);
    }
    public function MomoReturn(Request $request)
    {
        $secretKey = '6zoccZyiTC6Ik1Z4U2ubYnOO8wHqjSBO';

        if (!empty($request)) {
            $partnerCode = $request->partnerCode;
            $accessKey = $request->accessKey;
            $orderId = $request->orderId;
            $localMessage = $request->localMessage;
            $message = $request->message;
            $transId = $request->transId;
            $orderInfo = $request->orderInfo;
            $amount = $request->amount;
            $errorCode = $request->errorCode;
            $responseTime = $request->responseTime;
            $requestId = $request->requestId;
            $extraData = $request->extraData;
            $payType = $request->payType;
            $orderType = $request->orderType;
            $extraData = $request->extraData;
            $m2signature = $request->signature;
            $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
                "&orderType=" . $orderType . "&transId=" . $transId . "&message=" . $message . "&localMessage=" . $localMessage . "&responseTime=" . $responseTime . "&errorCode=" . $errorCode .
                "&payType=" . $payType . "&extraData=" . $extraData;

            $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);
            if ($m2signature == $partnerSignature) {
                if ($errorCode == '0') {
                    $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
                    $temp =  $request->id_pros;
                    $id_pro = '';
                    $quantity = '';
                    foreach (session('cart') as  $details) {
                        $id_pro .= $details['id_pro'] . ',';
                        $quantity .= $details['quantity'] . ',';
                    }
                    foreach (session('cart') as  $details) {
                        if ($details['id_pro']) {
                            $product = productModel::find($details['id_pro']);
                            $product->soluong = ($product->soluong - $details['quantity']);
                            $product->save();
                        }
                    }
                    $id_pro = substr($id_pro, 0, -1);
                    $quantity = substr($quantity, 0, -1);
                    OrderModel::create([
                        'id_user' => session('id_cus'),
                        'listId_pr' => $id_pro,
                        'id_pro' =>   $temp,
                        'quantity' =>  $quantity,
                        'maGD' =>  $transId,
                        'tien' =>  $amount,
                        'statuss' => 1,
                        'payBy' => 'MoMo',
                        'dates' => $currentTime->toDateTimeString()
                    ]);
                    $this->sendEmail($id_pro);
                    session()->forget('cart');
                    $result = 'Giao dịch Thành công';
                    return view('Paydone')->with([
                        'resoponseMomo' => request()->all(),
                        'result' => $result
                    ]);
                } else {
                    $result = 'Lỗi giao dịch vui lòng thử lại sau';
                    return view('Paydone')->with(['result' => $result]);
                }
            } else {
                $result = 'This transaction could be hacked, please check your signature and returned signature';
                return view('Paydone')->with(['result' => $result]);
            }
        }
    }
    public function sendEmail($product)
    {
        $Thanks = [
            'name' => session('fullname'),
            'product' => $product
        ];
        Mail::to(session('email'))->send(new ThanksBuyProduct($Thanks));
    }
}