@extends('layouts.adminLayout')
@section('adSpin')
<link rel="stylesheet" href="{{asset('layout/Css/spinning.css')}}">
<link rel="stylesheet" href="{{asset('layout/Css/admin/adminDashboard.css')}}" />
@endSection

@section('adminMain')
<div class="content">
  <div class="container">
    <h2>danh sách voucher</h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">STT</div>
        <div class="col col-1">Tên </div>
        <div class="col col-1">Mã code</div>
        <div class="col col-1">Ngày hiệu lực</div>
        <div class="col col-1">Ngày kết thúc</div>
        <div class="col col-1">Action</div>
      </li>
      @php
      $i = 1 ;
      @endphp
      @foreach($voucher as $vouchers)
      <li class="table-body">
        <div class="col col-1" data-label="STT">{{$i++;}}</div>
        <div class="col col-1" data-label="Tên">{{$vouchers -> names}}</div>
        <div class="col col-1" data-label="Mã">{{$vouchers -> codes}}</div>
        <div class="col col-1" data-label="Ngày hiệu lực">{{$vouchers -> timeStart}}</div>
        <div class="col col-1" data-label="Ngày kết thúc">{{$vouchers -> timeEnd}}</div>
        <div class="col col-1" data-label="Action">
          <div class="button-edit"><input type="button" value="Edit" data-id="{{$vouchers -> id}}" class="Edit-voucher"></div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>

  <div id="model">
    <div class="addPRoduct add">
      <div class="title">
        <h2>Edit product</h2>
      </div>
      <div class="voucher">
        <div class="createVoucher">
          <form method="GET" action="{{asset('updateVoucher')}}" id="update-voucher">
            @CSRF
            <input type="hidden" name="id" id="getId">
            <input type="hidden" name="actions" value="update">
            <div class="createVoucher_c">
              <div class="createVoucher_button">
                <input type="button" value="Tạo mới voicher" id="newVoucher">
              </div>
              <div class="createVouter_screen">
                <input type="text" id="voucher" name="voucher" style="color: aliceblue;">
              </div>
            </div>
            <div class="actionVoucher">
              <div class="title">
                <h5>Cài đặt</h5>
              </div>
              <div class="setup">
                <div class="setupDetail">
                  <div class="voucherInput">
                    <label for="name"> <i class="fas fa-file-signature"></i> <b>Tên voucher </b></label>
                    <input type="text" name="name" id="name" required>
                  </div>
                </div>
                <div class="setupDate">
                  <div class="voucherInput">
                    <label for="dateStart"> <i class="fas fa-table"></i> <b> Thời gian bắt đầu </b></label>
                    <input type="date" name="dateStart" id="dateStart" required pattern="\d{4}-\d{2}-\d{2}">
                  </div>
                  <div class="voucherInput">
                    <label for="dateEnd"> <i class="fas fa-table"></i> <b> Thời gian kết thúc </b></label>
                    <input type="date" name="dateEnd" id="dateEnd" required pattern="\d{4}-\d{2}-\d{2}">
                  </div>
                </div>
                <div class="voucherInput">
                  <div class="discount">
                    <label for="discount"><i class="fas fa-tag"></i> <b>Voucher Giảm giá</b></label>
                    <input type="radio" id="discount" name="action" value="discount" required>
                  </div>
                  <div class="freeship">
                    <label for="freeShip"><i class="fas fa-tag"></i> <b>Voucher miễn phí vận chuyển</b></label>
                    <input type="radio" id="freeShip" name="action" value="freeShip" required>
                  </div>
                </div>
                <div class="setupDate">
                  <div class="voucherInput">
                    <label for="sale"><i class="fas fa-money-check-alt"></i> <b>Giảm giá</b></label>
                    <input type="text" name="sale" id="sale" required disabled>
                  </div>
                  <div class="voucherInput">
                    <label for="limit"><i class="fas fa-link"></i></i> <b>Giới hạn</b></label>
                    <input type="text" name="limit" id="limit">
                  </div>
                </div>
                <div class="voucherInput">
                  <label for="getMail"><i class="fas fa-envelope-open-text"></i> <b>Gửi voucher</b> </label>
                  <div class="custom-select">
                    <select name="getMail" id="getMail">
                      <option value="default">Gửi email</option>
                      <option value="nosend">Không gửi</option>
                      <option value="sendAllMail">Gửi đến tất cả email</option>
                    </select>
                  </div>
                </div>
                <div class="voucherInput">
                  <label for="editor"> <i class="fas fa-info-circle"></i> <b>Chi tiết voucher</b></label>
                  <textarea name="detail" id="editor" cols="30" rows="10"></textarea>
                </div>
                <div class="button-submit">
                <input type="submit" value="Lưu" >
                </div>
              </div>
            </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/voucher.js')}}"></script>
@stop()
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("editor", {
        filebrowserUploadUrl: "{{asset('adminI/layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
</script>
@endSection