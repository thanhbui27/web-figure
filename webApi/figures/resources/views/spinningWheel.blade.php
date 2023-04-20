@extends('layouts.layout')
@section('title','Vòng quay may mắn')
@section('spin')
<link rel="stylesheet" href="{{asset('layout/Css/spinning.css')}}">
@endSection
@section('mains')
<div class="padding-header"></div>
<div class="container">
  <button type="button" onclick="check();"><span>Quay</span> </button>
  <canvas id="canvas" width=900 height=600></canvas>
</div>
<div class="spin">
  <p class="spinNum"></p>
</div>
<div class="gift-table">
  <div class="left">
    <div class="container">
      <h2>Phần thưởng của bạn</h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">STT</div>
          <div class="col col-2">Tên phần thưởng</div>
          <div class="col col-3">Ngày Nhận</div>
          <div class="col col-4">Chi tiết</div>
        </li>
        <div class="showw"></div>
      </ul>
    </div>
  </div>
  <div class="right">
    <div class="containers">
      <h2>Danh sách các người trúng thưởng</h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">STT</div>
          <div class="col col-2">Tên Khách hàng</div>
          <div class="col col-3">Phần thưởng</div>
          <div class="col col-4">Ngày nhận</div>
        </li>
        <div class="shows"></div>
      </ul>
    </div>
  </div>
</div>
<script src="{{asset('layout/Js/spinning.js')}}"></script>
@endSection