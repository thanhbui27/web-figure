<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks you</title>
    <link rel="stylesheet" href="{{asset('layout/Css/done/done.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <div class="iconPayDone">
            <img src="{{ asset('layout/Img/loli.png') }}" alt="">
        </div>
        <div class="payDone">
            <h1>Đặt hàng thành công</h1>
            @if(isset($data))
            <div class="info-order">
                <div class="container">
                    <div class="header clearfix">
                        <h3 class="text-muted">VNPAY </h3>
                    </div>
                        <div class="form-group">

                            <label>Số tiền:</label>
                            <label><?php echo $data['price']; ?></label>
                        </div>
                        <div class="form-group">
                            <label>Kết quả:</label>
                            <label>
                            @if(!isset($error))
                                 <span style='color:blue'>GD Thanh cong</span>
                            @endif
                            </label>
                        </div>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <footer class="footer">
                        <p>&copy; VNPAY <?php echo date('Y') ?></p>
                    </footer>
                </div>
            @endif
            @if(isset($resoponseData))
            <div class="info-order">
                <div class="container">
                    <div class="header clearfix">
                        <h3 class="text-muted">VNPAY </h3>
                    </div>
                    <div class="table-responsive">
                        <div class="form-group">
                            <label>Mã đơn hàng:</label>
                            <label><?php echo $resoponseData['vnp_TxnRef'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Số tiền:</label>
                            <label><?php echo number_format($resoponseData['vnp_Amount'] / 100, 0, '', ',') ?></label>
                        </div>
                        <div class="form-group">
                            <label><?php echo $resoponseData['vnp_OrderInfo'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Mã phản hồi (vnp_ResponseCode):</label>
                            <label><?php echo $resoponseData['vnp_ResponseCode'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Mã GD Tại VNPAY:</label>
                            <label><?php echo $resoponseData['vnp_TransactionNo'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Mã Ngân hàng:</label>
                            <label><?php echo $resoponseData['vnp_BankCode'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Thời gian thanh toán:</label>
                            <label><?php echo $resoponseData['vnp_PayDate'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Kết quả:</label>
                            <label>
                            @if(!isset($error))
                                 <span style='color:blue'>GD Thanh cong</span>
                            @endif
                            </label>
                        </div>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <footer class="footer">
                        <p>&copy; VNPAY <?php echo date('Y') ?></p>
                    </footer>
                </div>
            </div>
            
            @endif
 
            @if(isset($resoponseMomo))
            <div class="info-order">
                <div class="container">
                    <div class="header clearfix">
                        <h3 class="text-muted">Thanh toán MOMO </h3>
                    </div>
                    <div class="table-responsive">
                        <div class="form-group">
                            <label>Mã đơn hàng:</label>

                            <label><?php echo $resoponseMomo['orderId'] ?></label>
                        </div>
                        <div class="form-group">

                            <label>Số tiền:</label>
                            <label><?php echo number_format($resoponseMomo['amount'], 0, '', ',') ?></label>
                        </div>
                        <div class="form-group">
                            <label><?php echo $resoponseMomo['orderInfo'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Loại GD:</label>
                            <label><?php echo $resoponseMomo['orderType'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Mã GD Tại VNPAY:</label>
                            <label><?php echo $resoponseMomo['transId'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Thời gian thanh toán:</label>
                            <label><?php echo $resoponseMomo['responseTime'] ?></label>
                        </div>
                        <div class="form-group">
                            <label>Kết quả:</label>
                            <label>
                            @if(isset($result))
                                 <span style='color:blue'>{{$result}}</span>
                            @endif
                            </label>
                        </div>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <footer class="footer">
                        <p>&copy; MOMO <?php echo date('Y') ?></p>
                    </footer>
                </div>
            </div>
            
            @endif
            @if(isset($error))
                <span style='color:blue'>{{$error}}</span>
            @endif
            <div class="thanksPay">
                <p>Cảm ơn bạn đã tin tưởng và mua hàng tại <b>Figure</b> shop. Chúng tôi sẽ điện thoại hoặc nhắn tin cho bạn sớm nhất để xác nhận đơn hàng</p>
                <i>Chúc bạn một ngày vui vẻ</i>
            </div>
            <div class="button">
                <a href="{{route('home')}}"><button>Quay trở lại trang chủ</button></a>
            </div>
        </div>
    </div>
</body>

</html>