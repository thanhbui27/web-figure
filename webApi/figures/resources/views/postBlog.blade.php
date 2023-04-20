@extends('layouts.layout')
@section('title','post Blog')
@section('mains')
<div class="body-blog">
        <div class="card-wrappers">
          <div class="none"></div>
          <div class="blog-container">
            <div class="row-container">
              <div class="show-preview">
                <div class="title">
                  <h2>Xem trước</h2>
                </div>
                <div class="blog-preview">
                  <div class="title-blog-preview">
                    <h1 id="title-preview"></h1>
                  </div>
                  <div class="container-preview"></div>
                </div>
              </div>
              <div class="post-blog-content">
                <div class="title">
                  <h2>Blog mới</h2>
                </div>
                <div class="blog">
                  <form action="{{route('addBlog')}}"  method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="blog-input">
                      <label for="title">Tiêu đề</label>
                      <input
                        type="text"
                        id="title"
                        placeholder="Tiêu để"
                        name="blogTitle"
                        style="height: 45px;"
                      />
                    </div>
                    <div class="blog-input">
                      <label for="blog-bg">Ảnh bìa</label>
                      <input type="file" id="blog-bg" name="image" style="height: 45px;" />
                    </div>
                    <div class="input-comment">
                      <label for="log-content">Nội dung</label>
                      <textarea name="postContent" id="editor"> </textarea>
                    </div>
                    <dov class="button-blog">
                      <!-- <button id="preview" value="preview" >Xem trước</button>
                      <button id='post' value="post">Đăng bài</button> -->
                      <input type="submit" id="preview" value="preview" onclick='return btnClick();' >
                      <input type="submit" id="post" value="post" onclick="return submit()" >
                    </dov>
                  </form>
                </div>
              </div>
            </div>
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