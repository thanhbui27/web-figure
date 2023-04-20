@extends('layouts.adminLayout')
@section('style-slide')
<link rel="stylesheet" href="{{asset('layout/Css/admin/adminDashboard.css')}}" />
@endSection

@section('adminMain')
<div class="content">
    <div class="edit-content-homePage">
        <div class="title">
            <h5>Edit content slide home</h5>
        </div>
        <div class="contents">
            <p class="C">
                {!!$imgh[0] -> text !!}
            </p>
        </div>
        <div class="editors">
            <textarea id="editor" name="description" cols="50" rows="50" required> {!!$imgh[0] -> text!!}</textarea>
            <button class="saveC"> Lưu </button>
        </div>
    </div>
    <div class="edit-contact">
        <div class="title">
            <h5>
                Edit Contact
            </h5>
            <div class="edit-infor">
                <div class="contents">
                    
                    <div class="C1">                
                        {!! $contact -> lefts !!}
                    </div>
                </div>
                <div class="editors">
                    <textarea id="editor1" name="description" cols="50" rows="50" required>{!! $contact -> lefts !!}</textarea>
                    <button class="saveC1"> Lưu </button>
                </div>
            </div>
        </div>
    </div>
    <div class="edit-adress">
        <div class="title">
            <h5>Map</h5>
        </div>
        <div class="adress-now">
        {!! $contact -> rights !!}
        </div>
        <div class="edit-input">
            <textarea name="adress" id="adress" class="adress" rows="10">   {{ $contact -> rights }}</textarea>
            <button class="saveC2"> Lưu </button>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("editor", {
        filebrowserUploadUrl: "{{asset('layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
    CKEDITOR.replace("editor1", {
        filebrowserUploadUrl: "{{asset('layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
   
</script>
@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/adminContent.js')}}"></script>
@stop()
@stop()