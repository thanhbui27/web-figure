@extends('layouts.layout')
@section('title','cart')
@section('mains')
<div class="content">
  <div class="cartoption">
    <div class="cartpage">
      <h2>Your Cart</h2>
      <table class="tblone" id="cardTable">
        <tr>
          <th width="20%">Product Name</th>
          <th width="10%">Image</th>
          <th width="15%">Price</th>
          <th width="25%">Quantity</th>
          <th width="20%">Total Price</th>
          <th width="10%">Action</th>
        </tr>
        @php
        $total = 0 ;
        @endphp
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        @php
        $total += (int)$details['quantity'] * (int)$details['price'];
        @endphp
        <div class="cartHH">
          <tr>
            <td>{{ $details['name_pro'] }}</td>
            <td><img src="{{asset('layout/Img')}}/{{  $details['img']  }}" alt="" /></td>
            <td>{{ number_format((int) $details['price'], 0, '', ',') }} VND</td>
            <td>
              <input type="number" class="quantity" min="0" value="{{  $details['quantity'] }}" />
              <button class="update" data-value="{{  $details['id_pro'] }}"><a href="#" style="font-size: 13px;font-weight: 800;">update</a></button>
            </td>
            <td>{{ number_format( ( (int) $details['quantity'] * (int) $details['price'])  , 0, '', ',') }} VND</td>
           
            <td><a class="RemoveProduct" style="cursor: pointer;" data-value="{{  $details['id_pro'] }}" href="#">X</a></td>
          </tr>
        </div>

        @endforeach
        @endif
      </table>
      @if(session('error'))
      <p style="color: red;"><b>{{session('error')}}</b></p>
      @endif()
      @if(session() -> has('id'))
      @if(session('id_cus')&&session('fullname')&&session('email')&&session('dates')&&session('cmnd')&&session('adress')&&session('sdt'))
      <table class="totalMoney" style="float:right;text-align:left;" width="40%">
        <tr>
          <th>Tổng phụ : </th>
          <td>@php
            echo number_format($total, 0, '', ',');
            @endphp

            VND</td>
        </tr>
        <tr>
          <th>VAT : </th>
          <td> 10% </td>
        </tr>
        <tr>
          <th>Tổng tiền:</th>
          <td> @php
            echo number_format( $total += $total * 0.1 , 0, '', ',');
            @endphp VND </td>
        </tr>
        <tr>
          <td>
          </td>
          <td id="isCartNull">
            @if(session('cart'))
            <button id="payModel" onclick="clickShowModel()">Thanh toán</button>
            @endif
            @if(session('cart') == null)
            <p style="color: red;"><b>Giỏ hàng trống</b></p>
            @endif
          </td>

        </tr>
      </table>
      @endif
      @endif
      @if(session()->has('id'))
      @if( !session()-> has('sdt') && !session()-> has('email')&& !session()-> has('dates') && !session()-> has('cmnd') )
      <p style="color: red;"><b>Vui lòng nhập đầy đủ thông tin => bấm vào <a href=" {{ route('user') }}">đây</a> </b></p>
      @endif
      @endif
      <p>9704198526191432198  -> Thanh toán vnpay</p>
      @if(!session() -> has('id'))
      <div class="shopping">
        <div class="shopleft">
          <a href="{{route('home')}}">
            <button>Quay lại trang chủ</button>
          </a>
        </div>
        <div class="shopright">
          <a href="{{ route('login.index') }}"> <button>Đăng nhập để tiếp tục</button></a>
        </div>
      </div>
      @endif
    </div>
  </div>
  <div class="clear"></div>
</div>

<div id="model">
  <div class="info-cus">
    <div class="title">
      <h4>Xác nhận thông tin</h4>
    </div>
    <form action="{{route('payProduct')}}" method="post">
      @CSRF
      <div class="row-form">
        <input type="hidden" name="id_pros" id="id_pros" value="">
        <div class="pay-cart-info">
          <div class="input-info">
            <label for="Name">Tên người nhân :</label>
            <input type="text" id="Name" name="name" value="{{session('fullname')}}">
          </div>
          <div class="input-info">
            <label for="sdt">SDT người nhân :</label>
            <input type="text" id="sdt" name="sdt" value="{{session('sdt')}}">
          </div>
          <div class="input-info">
            <label for="email">Email người nhân :</label>
            <input type="email" id="email" name="email" value="{{session('email')}}">
          </div>
          <div class="input-info">
            <label for="cmnd">CMND người nhân :</label>
            <input type="text" id="cmnd" name="cmnd" value="{{session('cmnd')}}">
          </div>
          <div class="input-info">
            <label for="adress">Địa chỉ người nhân :</label>
            <input type="text" id="adress" name="adress" value="{{session('adress')}}">
          </div>
        </div>
        <div class="pay-cart-money">
          <div class="totle-pay">
            <div class="thanhtoan">
              <strong>Tổng phụ : </strong> <span>@php
                echo number_format($total, 0, '', ',');
                @endphp VND</span>
            </div>
            <div class="thanhtoan">
              <strong>VAT : </strong> <span>10%</span>
            </div>
            <div class="thanhtoan">
              <strong>Tổng tiền : </strong> <span>@php
                echo number_format( $total , 0, '', ',');
                @endphp VND</span>
              <input type="hidden" name="TotalPrice" value="{{ $total }}">
            </div>
          </div>
          <div class="thanhtoanpay">
            <input type="radio" id="giaohang" name="paypay" value="giaohang" required>
            <label for="giaohang">Thanh toán khi nhận hàng</label>
          </div>
          <div class="thanhtoanpay">
            <input type="radio" name="paypay" value="vnpay" required>
            <div class="pay-img">
              <img src="{{asset('layout/Img/walletVNPayVidientu.png')}}" alt="">
            </div>
          </div>
          <div class="thanhtoanpay">
            <input type="radio" name="paypay" value="momo" required>
            <div class="pay-img">
              <img src="{{asset('layout/Img/momo.jfif')}}" alt="">
            </div>
          </div>
          <div class="voucher input-info">
            <label for="voucher">Nhập voucher</label>
            <input type="text" id="voucher" name="voucher">
          </div>
          <div class="confim">
            <button>Xác nhận</button>
          </div>
        </div>
    </form>
  </div>
</div>
</div>
</div>
@section('ajax')
<script src="{{asset('layout/Ajax/cart.js')}}"></script>
@stop()
@stop()