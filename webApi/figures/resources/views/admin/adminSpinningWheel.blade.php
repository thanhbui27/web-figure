@extends('layouts.adminLayout')
@section('adSpin')
<link rel="stylesheet" href="{{asset('layout/Css/spinning.css')}}">
<link rel="stylesheet" href="{{asset('layout/Css/admin/adminDashboard.css')}}" />
@endSection
@section('adminMain')
<div class="content">
  <div class="flex-box">
    <div class="container none">
      <canvas id="canvas" width=900 height=600></canvas>
      <button type="button" onclick="check();"><span>Quay</span> </button>
    </div>
    <div class="list-gift">
      <div class="container none limit-height">
        <h4>Danh sách quà</h4>
        <ul class="responsive-table">
          <li class="table-header">
            <div class="col col-1">STT</div>
            <div class="col col-2">Tên phần thưởng</div>
            <div class="col col-2">Hình ảnh</div>
            <div class="col col-3">Chi tiết</div>
            <div class="col col-1">Code</div>
          </li>
          <div class="showw"></div>
        </ul>
      </div>
    </div>
  </div>
  <div class="tabbar">
    <div class="title">
      <h4>Thêm phần thưởng</h4>
    </div>
    <div class="box-gift">
      <form action="{{route('addSpinningGift')}}"  method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="nonGift" name="add" id="checkaction" />
        <div class="inline-block">
          <div class="price block-input">
            <label for="nameGift">Tên quà</label>
            <input type="text" name="nameGift" id="nameGift" required />
          </div>
          <div class="image block-input">
            <div class="cimg block-input">
              <label for="ImageFile" class="custom-file-upload">
                <i class="fas fa-upload"></i> Chọn ảnh bìa
              </label>
              <input name="image" id="ImageFile" type="file" />
             <div class="setImg"></div>
            </div>
          </div>
        </div>
        <div class="inline-block">
          <div class="block-input">
            <label for="getGifr">Loại quà</label>
            <div class="select">
              <select name="getGifr" id="getGifr" onchange="select('getGifr')">
                <option value="getGifr">Loại quà</option>
                <option value="voucher">voucher</option>
                <option value="lucky">Chúc may mắn lần sau</option>
              </select>
            </div>
          </div>

        </div>
        <div class="create-voucher"></div>
        <div class="details">
          <textarea name="details" id="editor" cols="30" rows="10"></textarea>
        </div>
        <div class="button">
          <button>Tạo</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor", {
    filebrowserUploadUrl: "{{asset('adminI/layout/ckeditor/ck_upload.php')}}",
    filebrowserUploadMethod: "form",
  });
</script>
<script src="{{asset('layout/Ajax/adminSpinningWheel.js')}}"></script>
@stop()