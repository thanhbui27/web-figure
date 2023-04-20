@extends('layouts.layout')
@section('title','detail Product')

@section('detailProduct')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor', {
    filebrowserUploadUrl: '{{asset("detailProduct/layout/ckeditor/ck_upload.php")}}',
    filebrowserUploadMethod: 'form'
  });
</script>
@endsection

@section('mains')

<main style="max-width: 1300px;
    width: 100%;
    margin: auto;">
  <div class="card-wrapper">
    <div class="card">
      <div class="product-imgs">
        <div class="img-display">
          <div class="img-showcase">
            <img src="{{asset('layout/Img/')}}/{{ $detailProducts[0]['image'] }} " alt="" />
            @isset($detailImg[0]['img1'])
            <img src="{{asset('layout/Img/')}}/{{ $detailImg[0]['img1']  }} " alt="" />
            <img src="{{asset('layout/Img/')}}/{{ $detailImg[0]['img2'] }} " alt="" />
            <img src="{{asset('layout/Img/')}}/{{ $detailImg[0]['img3'] }} " alt="" />
            @endisset
          </div>
        </div>
        <div class="img-select">
          <div class="img-item">
            <a href="#" data-id="1">
              <img src="{{asset('layout/Img/')}}/{{ $detailProducts[0]['image'] }}" alt="" />
            </a>
          </div>
          @isset($detailImg[0]['img1'])
          <div class="img-item">
            <a href="#" data-id="2">
              <img src="{{asset('layout/Img/')}}/{{ $detailImg[0]['img1'] }}" alt="" />
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="3">
              <img src="{{asset('layout/Img/')}}/{{ $detailImg[0]['img2'] }}" alt="" />
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="4">
              <img src="{{asset('layout/Img/')}}/{{ $detailImg[0]['img3']}}" alt="" />
            </a>
          </div>
          @endisset
        </div>
      </div>
      <div class="product-content">
        <h4 class="product-title">{{$detailProducts[0]['name_pro'] }}</h4>
        <a href="{{route('product')}}" class="product-link">Quay trở lại trang sản phẩm</a>
        <div class="product-raiting">
          @if(!session('id'))
          <p style="color: brown;">Đăng nhập để được đánh giá sản phẩm</p>
          @for($i = 1 ; $i<= 5 ; $i++) @if(FLOOR($tb)>= $i)
            <i class="fas fa-star  vang"></i>
            @endif
            @if(FLOOR($tb) < $i) <i class="fas fa-star "></i>
              @endif
              @endfor

              @endif
              @if(session('id'))
              @for($i = 1 ; $i<= 5 ; $i++) @if(FLOOR($tb)>= $i)
                <i class="fas fa-star fa-stars  vang"></i>
                @endif
                @if(FLOOR($tb) < $i) <i class="fas fa-star fa-stars "></i>
                  @endif
                  @endfor
                  @endif
                  <span class="tbRate">{{round($tb,2)}}<b class="countRate">({{$count}})</b></span>
        </div>
        <div class="product-price">
          @if($detailProducts[0]['price_new'] !== '')
          <p class="last-price">Giá cũ <span>{{$detailProducts[0]['price_old']}} VND</span></p>
          <p class="new-price">giá mới <span>{{$detailProducts[0]['price_new']}} VND</span></p>
          @endif
          @if($detailProducts[0]['price_new'] === '')
          <p class="new-price">giá: <span>{{$detailProducts[0]['price_old']}} VND</span></p>
          @endif
        </div>
        <div class="product-detail">
          <h2>Giới thiệu về sản phẩm</h2>
          <div class="content-deltails">
            {!! html_entity_decode($detailProducts[0]['mieuta']) !!}
          </div>
          <ul>
            <li>Chiều cao : <span> {{$detailProducts[0]['chieucao']}} cm</span></li>
            @if( $detailProducts[0]['id_Cate'] === 1)
            <li>Category : <span>Action figure</span> </li>
            @endif
            @if($detailProducts[0]['id_Cate'] === 2)
            <li>Category :<span>Chibi figure</span> </li>
            @endif
            @if($detailProducts[0]['id_Cate'] === 3)
            <li>Category :<span>Scale figure</span> </li>
            @endif
            @if($detailProducts[0]['id_Cate'] === 4)
            <li>Category : <span>BB figure</span> </li>
            @endif
            <li>Sản xuất tại : <span>{{ $detailProducts[0]['xuatsu'] }}</span></li>
            <li>Giao hàng : <span>Toàn quốc</span></li>
          </ul>
        </div>
        @if($detailProducts[0]['soluong'] !== 0)
        <div class="purchase-info">     
          <input type="number" id="quantity" name="quantity" min="0" value="1">
          <button type="submit" class="btn addToCart"><a id="superman" href="">Add to cart</a> <i class="fas fa-shopping-cart"></i></button>
        </div>
        @endif
        <input type="hidden" class="id_pros" name="id" value="{{ $detailProducts[0]['id_pro'] }}">
        @if($detailProducts[0]['soluong'] === 0)
        <div class="purchase-info">
          <p style="color: red;"><b>Sản phẩm hết hàng</b></p>
        </div>
        @endif
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="title">
      <h3>Có thể bạn muốn xem thêm</h3>
    </div>
    <section class="slide-show-product">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach( $productRecommender as $productRecommenders )
          <div class="swiper-slide">
            <div class="slide-show">
              <div class="slide-show-img">
                <img src="{{asset('layout/Img')}}/{{ $productRecommenders['image'] }}" alt="gaixinh">
                <div class="bg"></div>
                <div class="line">
                  <h4>{{ $productRecommenders['name_pro'] }}</h4>
                </div>
              </div>
              <div class="slide-show-container">
                <div class="slide-show-title">
                  <h3>{{ $productRecommenders['name_pro'] }}</h3>
                </div>
                <div class="slide-show-price">
                  <strong>{{ $productRecommenders['price_new'] }} VND</strong>
                </div>
                @if($productRecommenders['soluong'] !== 0)
                <a href="../detailProduct/{{$productRecommenders['id_pro']}}">
                  <div class="slide-show-btn">
                    <button> Xem SP </button>
                  </div>
                </a>
                @endif
                @if($productRecommenders['soluong'] === 0)
                <div class="slide-show-btn">
                  <button type="button">Hết hàng </button>
                </div>
                @endif
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>

    </section>
  </div>
  <div class="comment">
    <div class="title-comment">
      <h3>Bình luận</h3>
    </div>
    <div class="cdk-comment">
      @if(session() -> has('id'))
      <div class="input-comment">
        <form action="/commentDetailProduct" method="GET" class="form-comment">
          @CSRF
          <input type="hidden" id="id_user" value="{{ session('id') }}">
          <textarea name="content" id="editor"></textarea>
          <button>Bình luận</button>
        </form>
      </div>
      @endif
      @if(!session() -> has('id'))
      <h3 style="color: aqua; width:100%">Vui lòng đăng nhập để bình luận</h3>
      @endif
      <div class="show-comment">
        @foreach( $comment as $productLists)
        <input type="hidden" id="id_com" value="{{ $productLists['id_com'] }}">
        <div class="div-comment">
          <div class="div-comment-img">
            <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="">
          </div>
          <div class="commentContent">
            <div class="title-comment">
              <h4>{{$productLists['fullname']}}</h4>
              <span>{{$productLists['date']}}</span>
            </div>
            <div class="content">
              {!! html_entity_decode($productLists['content']) !!}
            </div>
            <div class="adv-comment feel-comment">
              <div class="like">
                <span class="countLike  ">{{ $productLists['like'] }}</span> <i class="far fa-thumbs-up likenek"></i>
              </div>
              <div class="dislike">
                <span class="countdisLike">{{ $productLists['dislike'] }}</span> <i class="far fa-thumbs-down dislienek"></i>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</main>
<div class="show-motife"></div>
@section('ajax')
<script src="{{asset('layout/Ajax/detailsProduct.js')}}"></script>
@stop()
@stop()