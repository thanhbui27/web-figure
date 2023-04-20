@extends('layouts.adminLayout')
@section('style-slide')
<link rel="stylesheet" href="{{asset('layout/Css/admin/adminDashboard.css')}}" />
@endSection
@section('adminMain')
<div class="content">
    <div class="edit-header">
        <div class="title">
            <h5>Edit Header</h5>
        </div>
        <div class="table-product">
            <div class="list-product-all">
                <div class="addItemHeader">
                    <div class="button">
                        <button class="action add-b">Thêm</button>
                    </div>
                </div>
                <table class="tblone">
                    <thead>
                        <tr>
                            <th width='5%'>STT</th>
                            <th width="15%">name</th>
                            <th width="10%">Link</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="banner">
                        @php
                        {{$i = 1;}}
                        @endphp
                        @foreach($banner as $banners)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$banners -> name}}</td>
                            <td>{{$banners -> link}}</td>
                            <td><button data-id="{{$banners -> id}}" class="action edit-b">Sửa</button> <button data-id="{{$banners -> id}}" class="action remove-b">Xóa</button></td>
                        </tr>
                        @php
                        {{$i++;}}
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="edit-Fotter">
        <div class="box-f">
            <div class="title">
                <h5>Edit Footer</h5>
            </div>
            <div class="showFooter">
                <footer>
                    <div class="footer-container">
                        <div class="row">
                            <div class="about-us C-1">
                            {!!$footer -> lefts!!}
                            </div>
                            <div class="contact C-2">
                            {!!$footer -> betweens!!}
                            </div>
                            <div class="Fanpage C-3">
                            {!!$footer -> rights!!}
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <div class="row">
                <div class="left">
                    <div class="container">
                        <div class="title" style="margin-left: 20px;">
                            <h5>Left</h5>
                        </div>
                       
                        <div class="ckeditor">
                            <textarea name="" id="editor1" cols="30" rows="10">  {!!$footer -> lefts!!}</textarea>
                            <div class="button-upload">
                                <button class="save-1">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="container">
                        <div class="title" style="margin-left: 20px;">
                            <h5>Right </h5>
                        </div>
                        <div class="ckeditor">
                            <textarea name="" id="editor2" cols="30" rows="10">  {!!$footer -> betweens!!}</textarea>
                            <div class="button-upload">
                                <button class="save-2">Lưu</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="between">
                <div class="title" style="margin-left: 20px;">
                    <h5>Between </h5>
                </div>
                <div class="ckeditor">
                    <textarea name="" id="editor3" cols="30" rows="10"> {!!$footer -> rights!!}</textarea>
                    <div class="button-upload">
                        <button class="save-3">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modelBanner">
        <div class="box-model-add">
            <div class="close">
                <span>X</span>
            </div>
            <div class="title">
                <h5 class="nameM"></h5>
            </div>
            <div class="form">
                <input type="hidden" name="id" id="id">
                <div class="input align">
                    <input type="text" name="name" id="name" placeholder="Nhập tên ....">
                </div>
                <div class="input align">
                    <input type="text" name="link" id="link" placeholder="Nhập link">
                </div>
                <div class="button">
                    <button class="button-add-b"></button>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("editor1", {
        filebrowserUploadUrl: "{{asset('adminI/layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
    CKEDITOR.replace("editor2", {
        filebrowserUploadUrl: "{{asset('adminI/layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
    CKEDITOR.replace("editor3", {
        filebrowserUploadUrl: "{{asset('adminI/layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
</script>
@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/adminBanner.js')}}"></script>
@stop()
@stop()