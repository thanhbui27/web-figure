@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
  <div class="title">
    <h2>List Order</h2>
  </div>
  <div class="searchOrder">
    <div class="search-date">
        <div class="input-search">
          <input type="date" name="search-product" id="dates">
        </div>
        <div class="button-search">
          <button class="searchDate"><i class="fas fa-search"></i></button>
        </div>
    </div>
    <div class="search-peoduct">
      <form action="#">
        <div class="input-search">
          <input type="text" name="magd" id="SearchmaGD" placeholder="Mã gd">
        </div>
        <div class="button-search">
          <button><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>

  <div class="table-product">
    <div class="list-product-all">
      <table class="tblone">
        <tr>
          <th width="5%">STT</th>
          <th width="10%">Mã giao dịch</th>
          <th width="20%">Ngày GD</th>
          <th width="15%">Tổng tiền</th>
          <th width="10%">Tình trạng</th>
          <th width="10%">Phương thức</th>
          <th width="15%">Action</th>
        </tr>
        <tbody class="listOrder">
          @php
          $i=1;
          @endphp
          @foreach($listOrder as $listOrders)
          <tr>
            <td>{{$i}}</td>
            <td>{{$listOrders['maGD']}}</td>
            <td>{{$listOrders['dates']}}</td>
            <td>{{ number_format($listOrders['tien'], 0, '', ',') }} VND</td>
            <td>
              <div class="status">
                 <p class="actionPay {{$listOrders['statuss'] === 1 ? 'paysuss' : 'paynot' }}">
                  {{$listOrders['statuss'] === 1 ? 'đã thanh toán' : 'Đang chờ xử lý' }}
                </p>
              </div>
             
            </td>
            <td>{{$listOrders['payBy']}}</td>
            <td>
              <div class='btn-action'>
                <div data-ids="{{$listOrders['id_ord']}}"  class="{{ $listOrders['statuss'] === 1 ? '' : 'update' }} delete"><a style="{{ $listOrders['statuss'] === 1 ? 'background-color:white; color:#333;' : '' }}" href="#">Xác nhận</a>
                </div>
                <div data-ido="{{$listOrders['id_ord']}}" class="edit order"><a href="#">Thông tin</a>
                </div>
              </div>
            </td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
        </tbody>

      </table>
    </div>

    <div class="page-divide">
      {!! $listOrder->appends(request() -> all()) -> render() !!}

    </div>
  </div>
</div>
<div id="model-order">
  <div class="addPRoduct add">
    <div class="title">
      <h2>Info Order</h2>
    </div>
    <div class="form-add-product" style="color: black;">
      <div class="list-product-all">
        <table class="tblone">
          <tr>
            <th width="5%">STT</th>
            <th width='10%'>Tên khách hàng</th>
            <th width="20%">Tên sản phẩm</th>
            <th width="10%">Số lượng</th>
          </tr>
          <tbody class="info_prs" style="background-color: aliceblue;">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/order.js')}}"></script>
@stop()
@stop()