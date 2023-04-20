@extends('layouts.adminLayout')
@section('style-slide')
<link rel="stylesheet" href="{{asset('layout/Css/admin/adminDashboard.css')}}" />
@endSection
@section('adminMain')

<div class="content">
    <div class="editslide">
        <div class="slide-home">
            <div class="title">
                <h4>Edit slide page home</h4>
            </div>
            <div class="box-slide">
                @php
                $i=1;
                @endphp
                @foreach($imgh as $imghs)
                <form id="upload-image{{$i}}" method="POST" class="uploadImg" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="action" value="img{{$i}}">
                    <input type="hidden" name="id" value="{{ $imghs-> id}}">
                    <div class="card-img">
                        <div class="cimg">
                            <label for="file-upload{{$i}}" class="custom-file-upload">
                                <i class="fas fa-upload"></i> Custom Upload Img 1
                            </label>

                            <input id="file-upload{{$i}}" name="img{{$i}}" type="file" />
                        </div>
                        <div class="img-now">
                            <img id="img{{$i}}" src="{{asset('layout/Img')}}/{{$imghs -> imgSlideH}}" alt="">
                        </div>
                        <div class="button-upload">
                            <button class="button-up{{$i}}">Up</button>
                        </div>
                    </div>
                    <p class="nameImg{{$i}} nameImg"></p>
                </form>
                @php
                $i++;
                @endphp
                @endforeach

            </div>
        </div>
    </div>
    <div class="edit">
        <div class="title">
            <h4>Edit slide page</h4>
        </div>
        <div class="editslideanother">
            <div class="slide-product">
                <div class="slide-img">
                    <div class="card">
                        <form id="productImg" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="action" value="uploadIP">
                            <input type="hidden" name="id" value="{{$imgp[0] -> id}}">
                            <div class="cimg">
                                <label for="productpage" class="custom-file-upload">
                                    <i class="fas fa-upload"></i> Custom Upload page product
                                </label>
                                <input id="productpage" name="imgP" type="file" />
                            </div>
                            <div class="img-now">
                                <img id="imgP" src="{{asset('layout/Img')}}/{{$imgp[0] -> imgSlideP}}" alt="">
                            </div>
                            <div class="button-upload">
                                <button class="button">Up</button>
                            </div>
                            <p class="nameP nameImg"></p>
                        </form>

                    </div>
                </div>
            </div>
            <div class="slide-blog">
                <div class="slide-img">
                    <div class="card">
                    <form id="blogImg" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="action" value="uploadIB">
                            <input type="hidden" name="id" value="{{$imgb[0] -> id}}">
                            <div class="cimg">
                                <label for="blogPage" class="custom-file-upload">
                                    <i class="fas fa-upload"></i> Custom Upload page blog
                                </label>
                                <input id="blogPage"  name="imgblog" type="file" />
                            </div>
                            <div class="img-now">
                                <img id="imgB" src="{{asset('layout/Img')}}/{{$imgb[0] -> imgSlideB}}" alt="">
                            </div>
                            <div class="button-upload">
                                <button class="button">Up</button>
                            </div>
                            <p class="nameB nameImg"></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/adminSlider.js')}}"></script>
@stop()
@stop()