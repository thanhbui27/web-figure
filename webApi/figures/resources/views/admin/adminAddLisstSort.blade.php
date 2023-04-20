@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
<div class="addCategory">
        <div class="title">
          <h2>Add category</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
            <form action="{{route('adminAddListSort')}}" method="get">
              @csrf
              <input type="hidden" name="action" value="cate">
              <div class="input-block name">
                <label for="NameCate">Name Category</label>
                <input type="text" name="namecate" id="NameCate">
              </div>
              <div class="button-cate">
                <button>Add category</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="addCategory">
        <div class="title">
          <h2>Add Price</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
            <form action="{{route('adminAddListSort')}}" method="get">
              @csrf
              <input type="hidden" name="action" value="price">
            <div class="input-block name">
                <label for="NameCate">Name</label>
                <input type="text" name="name" id="NameCate">
              </div>
              <div class="input-block name">
                <label for="NameCate">Giá bắt đầu</label>
                <input type="text" name="priceStart" id="NameCate">
              </div>
              
              <div class="input-block name">
                <label for="NameCate">Giá kết thúc</label>
                <input type="text" name="PriceEnd" id="NameCate">
              </div>
              <div class="button-cate">
                <button>Add Price</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="addCategory">
        <div class="title">
          <h2>Add Height</h2>
        </div>
  
        <div class="box-add-category">
          <div class="form-category">
          <form action="{{route('adminAddListSort')}}" method="get">
              @csrf
              <input type="hidden" name="action" value="height">
            <div class="input-block name">
                <label for="NameCate">Name</label>
                <input type="text" name="name" id="NameCate">
              </div>
              <div class="input-block name">
                <label for="NameCate">Height bắt đầu</label>
                <input type="text" name="heightStart" id="NameCate">
              </div>
              <div class="input-block name">
                <label for="NameCate">Height kết thúc</label>
                <input type="text" name="heightEnd" id="NameCate">
              </div>
              <div class="button-cate">
                <button>Add Height</button>
              </div>
            </form>
          </div>
        </div>
      </div>

</div>
@stop()