@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
  <div class="messger" style="width: 100%;text-align:center">
      @if(session('messeger'))
        <p style="color: brown;">{{session('messeger')}}</p>
      @endif
  </div>
<div class="title">
        <h2>Thêm sản phẩm</h2>
      </div>
      <div class="addPRoduct">
        <div class="form-add-product">
          <form action="{{route('createProduct')}}" method="POST" enctype="multipart/form-data">
            @CSRF 
          <div class="inline-block">
              <div class="Name block-input">
                <label for="Name">Name</label>
                <input type="text" name="Name" id="Name" required/>
              </div>
              <div class="price block-input">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" required/>
              </div>
            </div>
            <div class="inline-block">
              <div class="image block-input">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" required/>
              </div>
              <div class="category block-input">
                <label for="category">Category</label>
                <select name="category" id="category" required>
                  @foreach($category as $categorys)
                  <option value="{{$categorys['id_cate']}}">{{$categorys['name_cate']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="inline-block">
              <div class="block-input">
                <label for="noibat">Sản phẩm nổi bật</label>
                <select name="noibat" id="noibat" required>          
                  <option value="0">Không</option>
                  <option value="1">Có</option>
                </select>
              </div>
            </div>
            <div class="inline-block">
              <div class="size block-input">
                <label for="size">Size</label>
                <input type="text" name="size" id="size" required/>
              </div>
              <div class="madein block-input">
                <label for="madein">Số lượng</label>
                <input type="text" name="Soluong" id="soluong" required/>
              </div>
              <div class="madein block-input">
                <label for="madein">Made in</label>
                <input type="text" name="madein" id="madein" required/>
              </div>
            </div>
            <div class="description">
              <label for="editor">description</label>
              <textarea id="editor" name="description" cols="50" rows="50" required></textarea>
            </div>
            <div class="submit-product">
              <button class="add-product">Thêm</button>
            </div>
          </form>
        </div>
      </div>
</div>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("editor", {
        filebrowserUploadUrl: "{{asset('layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
      });
    </script>
@stop()