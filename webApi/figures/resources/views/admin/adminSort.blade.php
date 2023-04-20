@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
  <div class="list_category">
    <div class="title">
      <h2>List category</h2>
    </div>
    <div class="table-product">
      <div class="list-product-all">
        <table class="tblone">
          <tr>
            <th>Num</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
          @php
          $i = 1;
          @endphp
          @foreach($cate as $cates)
          <tr>
            <td>{{$i}}</td>
            <td>{{$cates -> name_cate}}</td>
            <td>
              <div class='btn-action'>
                <div class="delete btn-delet-cate" data-id="{{$cates -> id_cate}}"><a href="#">Delete</a></div>
                <div class="edit edit-cate" data-id="{{$cates -> id_cate}}"><a href="#">Edit</a></div>
              </div>
            </td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach

        </table>
      </div>

      <div class="page-divide">
        {!! $cate->appends(request() -> all()) -> render() !!}
      </div>
    </div>
  </div>

  <div class="ListHeight">
    <div class="title">
      <h2>List Sort Height</h2>
    </div>
    <div class="table-product">
      <div class="list-product-all">
        <table class="tblone">
          <tr>
            <th>Num</th>
            <th>Height</th>
            <th>Action</th>
          </tr>
          @php
          $i = 1;
          @endphp
          @foreach($height as $heights)
          <tr>
            <td>{{$i}}</td>
            <td>{{$heights -> name}}</td>
            <td>
              <div class='btn-action'>
                <div class="delete btn-delet-height" data-id="{{$heights -> id}}"><a href="#">Delete</a></div>
                <div class="edit edit-height" data-id="{{$heights -> id}}"><a href="#">Edit</a></div>
              </div>
            </td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
        </table>
      </div>

    </div>

  </div>

  <div class="ListPrice">
    <div class="title">
      <h2>List sort Price</h2>
    </div>
    <div class="table-product">
      <div class="list-product-all">
        <table class="tblone">
          <tr>
            <th>Num</th>
            <th>Price</th>
            <th>Action</th>
          </tr>

          @php
          $i = 1;
          @endphp
          @foreach($price as $prices)
          <tr>
            <td>{{$i}}</td>
            <td>{{$prices -> name}}</td>
            <td>
              <div class='btn-action'>
                <div class="delete btn-delet-price" data-id="{{$prices -> id}}"><a href="#">Delete</a></div>
                <div class="edit edit-price" data-id="{{$prices -> id}}"><a href="#">Edit</a></div>
              </div>
            </td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach

        </table>
      </div>
    </div>
  </div>

  <div id="model-cate">
    <div class="title">
      <h2>Edit category</h2>
    </div>

    <div class="box-add-category">
      <div class="form-category">
        <form action="">
          <input type="hidden" name="hidden" id="hidden_cate">
          <div class="input-block name">
            <label for="NameCateEdit">Name Category</label>
            <input type="text" name="namecateedit" id="NameCateEdit">
          </div>
          <div class="button-cate">
            <button id="save_cate">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="model-height">
    <div class="title">
      <h2>Edit Height</h2>
    </div>

    <div class="box-add-category">
      <div class="form-category">
        <form action="">
          <input type="hidden" name="hidden" id="hidden_height">
          <div class="input-block name">
            <label for="NameCate">Giá bắt đầu</label>
            <input type="text" name="heightStart" id="heightStart">
          </div>
          <div class="input-block name">
            <label for="NameCate">Giá kết thúc</label>
            <input type="text" name="heightEnd" id="heightEnd">
          </div>
          <div class="button-cate">
            <button id="save_height">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="model-price">
    <div class="title">
      <h2>Edit Price</h2>
    </div>

    <div class="box-add-category">
      <div class="form-category">
        <form action="">
          <input type="hidden" name="hidden" id="hidden_price">

          <div class="input-block name">
            <label for="NameCate">Height bắt đầu</label>
            <input type="text" name="priceStart" id="priceStart">
          </div>
          <div class="input-block name">
            <label for="NameCate">Height kết thúc</label>
            <input type="text" name="PriceEnd" id="PriceEnds">
          </div>
          <div class="button-cate">
            <button id="save_price">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/adminCSort.js')}}"></script>
@stop()
@stop()