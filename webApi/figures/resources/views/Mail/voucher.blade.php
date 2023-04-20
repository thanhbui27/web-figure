<!DOCTYPE html>
<html>
<head>
    <title>Cảm ơn bạn đã đồng hành</title>
</head>
<body>
        <p>Xin chào {{$Thanks['name']}}</p>
        <p>Cảm ơn bạn đã đồng hành cùng shop chúng tôi, chúng tôi có 1 món quá gửi tới bạn đó là 1 voucher</p>
        <p> {{$Thanks['namecode']}} có mã là:  {{$Thanks['code']}}  </p>
        <p> ngày hiệu lực :{{$Thanks['timeStart']}}  </p>
        <p> ngày kết thúc :{{$Thanks['timeEnd']}}  </p>
        <i>Chúc bạn có một ngày vui vẻ</i>
</body>
</html>