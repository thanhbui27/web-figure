@extends('layouts.layout')
@section('title','home')
@section('mains')
<div class="body">
  <div class="none"></div>
  <section class="slide">
    <div class="box-container-slide">
      <div class="container-slides">
        <div class="slide-circle">
          <div class="invite">
            <div class="box-invite">
              <div class="invite-content">
                <h2>Website Figure</h2>
                <div class="text">
                  <p>
                   {!!$img[0] -> text!!}
                  </p>
                </div>
              </div>
              <div class="invite-button">
                <button><span><a href="{{route('product')}}">Xem Ngay</a></span></button>
              </div>
            </div>
          </div>
        </div>

        <div class="container-slide-image">
          <div class="invite-image">
            @php 
              $i=0;
            @endphp
            @foreach($img as $imgs )
            <img src="{{asset('layout/Img')}}/{{$imgs -> imgSlideH}}" style="--i: {{$i}}" alt="" />
            @php 
              $i++;
            @endphp
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="prominent">
    <div class="title">
      <h3>Sản phẩm nổi bật</h3>
    </div>
    <div class="box-prominent">
      <div class="box-container">
        @foreach ($productList as $product)
        <x-product idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" img="{{ $product['image'] }}" price="{{ ($product['price_new'] === '' ) ? $product['price_old'] : $product['price_new'] }}" raiting="{{ $product['danhgia'] }}" soluong="{{ $product['soluong'] }}" />
        @endforeach
      </div>
    </div>
  </section>

  <section class="introduce">
    <div class="title">
      <h3>Giới Thiệu</h3>
    </div>
    <div class="box-introduce">
      <div class="introduce-center">
        <div class="introduce-container">
          <div class="introduct-flex">
            <div class="introduce-image">
              <img src="{{asset('layout/Img/introduct-figure.jpg')}}" alt="" />
            </div>
          </div>
          <div class="introduct-flex">
            <div class="introduce-image">
              <img src="{{asset('layout/Img/introduct-figure-2.jpg')}}" alt="" />
            </div>
          </div>

          <div class="introduct-flex">
            <div class="introduce-image">
              <img src="{{asset('layout/Img/introduct-figure-3.jpg')}}" alt="" />
            </div>
          </div>

          <div class="introduct-flex">
            <div class="introduce-image">
              <img src="{{asset('layout/Img/introduct-figure-4.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <div class="introduct-content">
          <div class="content-image">
            <div class="content-i-image">
              <img src="{{asset('layout/Img/tanjiro 600x300.png')}}" alt="" />
            </div>
          </div>

          <div class="introduct-about">
            <div class="about-title">
              <h2>Website bán Figure uy tín</h2>
            </div>
            <div class="about-text">
            {!!$img[0] -> text!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="rate no-4">
    <div class="title">
      <h4>Blog Nổi Bật</h4>
    </div>

    <div class="blogNB">
      @if(isset($newBlog))
      @foreach($newBlog as $newBlogs)
      <x-blog-new id="{{ $newBlogs['id_blog']}}" title="{{$newBlogs['title']}}" name="{{ $newBlogs['fullname']}}" date="{{ $newBlogs['dates']}}" img="{{ $newBlogs['img_bg']}}" />
      @endforeach
      @endif
    </div>
  </section>

  <section class="support">
    <div class="title">
      <h3>Hỗ Trợ</h3>
    </div>

    <div class="box-support">
      <div class="support-container">
        <div class="support-form">
          <form action="{{route('sendEmail')}}" method="POST">
            @CSRF
            <div class="line-1">
              <div class="Name box-input">
                <label for="name">Họ Và Tên</label>
                <input type="text" id="name" name="name" placeholder="Họ và tên" />
              </div>
              <div class="Email box-input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" />
              </div>
            </div>

            <div class="title-sp box-after">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" placeholder="Title" />
            </div>

            <div class="sp-contents box-after">
              <label for="content">Contents</label>
              <textarea name="content" id="content" cols="50" rows="5"></textarea>
            </div>

            <div class="sp-button">
              <button class="send">Gửi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

@stop()