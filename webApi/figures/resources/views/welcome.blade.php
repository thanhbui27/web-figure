@extends('layouts.layout')
 @section('title','detail Product')

 @section('detailProduct')
 <script type="text/javascript" src="{{asset('layout/Js/detailProduct.js')}}"></script>
 @endsection

 @section('mains')
 @foreach ($detailProduct as $detailProducts)
    <main style="max-width: 1300px;
    width: 100%;
    margin: auto;">
        <div class="card-wrapper">
          <div class="card">
            <div class="product-imgs">
              <div class="img-display">
                <div class="img-showcase">
                  <img src="{{asset('layout/Img/')}}/{{ $detailProducts['image'] }} "  alt="" />
                  <img src="{{asset('layout/Img/')}}/{{ $detailProducts['img1'] }} "  alt="" />
                  <img src="{{asset('layout/Img/')}}/{{ $detailProducts['img2'] }} "  alt="" />
                  <img src="{{asset('layout/Img/')}}/{{ $detailProducts['img3'] }} "  alt="" />
                </div>
              </div>
              <div class="img-select">
                <div class="img-item">
                  <a href="#" data-id="1">
                    <img src="{{asset('layout/Img/')}}/{{ $detailProducts['image'] }}"  alt="" />
                  </a>
                </div>
                <div class="img-item">
                  <a href="#" data-id="2">
                    <img src="{{asset('layout/Img/')}}/{{ $detailProducts['img1'] }}"  alt="" />
                  </a>
                </div>
                <div class="img-item">
                  <a href="#" data-id="3">
                    <img src="{{asset('layout/Img/')}}/{{ $detailProducts['img2'] }}"  alt="" />
                  </a>
                </div>
                <div class="img-item">
                  <a href="#" data-id="4">
                    <img src="{{asset('layout/Img/')}}/{{ $detailProducts['img3'] }}"  alt="" />
                  </a>
                </div>
              </div>
            </div>
            <div class="product-content">
              <h4 class="product-title">{{ $detailProducts['name_pro'] }}</h4>
              <a href="/product" class="product-link">Quay trở lại trang sản phẩm</a>
              <div class="product-raiting">
                    @if($detailProducts['danhgia'] === 1)
                      <i class="fas fa-star"></i>
                    @endif
                    @if( $detailProducts['danhgia'] === 2 )
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    @endif
                    @if($detailProducts['danhgia'] === 3)
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                   @endif
                    @if($detailProducts['danhgia'] === 4)
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                   @endif
                    @if($detailProducts['danhgia'] === 5)
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                   @endif 
                <span>4.7(21)</span>
              </div>
              <div class="product-price">
                <p class="last-price">Giá cũ <span>{{$detailProducts['price_old']}} VND</span></p>
                <p class="new-price">giá mới <span>{{$detailProducts['price_new']}} VND</span></p>
              </div>
              <div class="product-detail">
                <h2>Giới thiệu về sản phẩm</h2>
                <div class="content-deltails">
                  {{$detailProducts['mieuta']}}
                </div>
                <ul>
                     <li>Chiều cao : <span> {{$detailProducts['chieucao']}} cm</span></li>
                      @if( $detailProducts['id_Cate'] === 1)
                      <li>Category : <span>Action figure</span> </li>
                      @endif
                      @if($detailProducts['id_Cate'] === 2)
                      <li>Category :<span>Chibi figure</span> </li>
                      @endif
                      @if($detailProducts['id_Cate'] === 3)
                      <li>Category :<span>Scale figure</span> </li>
                      @endif
                      @if($detailProducts['id_Cate'] === 4)
                      <li>Category : <span>BB figure</span> </li>
                      @endif
                      <li>Sản xuất tại : <span>{{ $detailProducts['xuatsu'] }}</span></li>
                      <li>Giao hàng : <span>Toàn quốc</span></li>
                </ul>
               
              </div>
              <div class="purchase-info">
                <form action="" method="GET">
                  <input type="hidden" value="">
                   <input type="number" min="0" value="1">
                  <button type="button" class="btn">Add to cart <i class="fas fa-shopping-cart"></i></button>
                </form>
              </div>
  
            </div>
          </div>
        </div>
      @endforeach
        <div class="slide">
          <div class="title">
            <h2>Có thể bạn muốn xem thêm</h2>
          </div>
          <section class="slide-show-product">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-show">
                    <div class="slide-show-img">
                      <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="gaixinh">
                      <div class="bg"></div>
                      <div class="line"><strong>Violet evergardent</strong></div>
                    </div>
                    <div class="slide-show-container">
                      <div class="slide-show-title">
                        <h3>Violet evergardent</h3>
                      </div>
                      <div class="slide-show-price">
                        <strong>300.000 VND</strong>
                      </div>
                      <div class="slide-show-btn">
                          <button type="button"> add to cart </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
          </section>
        </div>
      <div class="comment">
        <div class="title-comment">
          <h3>Bình luận</h3>
        </div>
        <div class="cdk-comment">
          <div class="input-comment">
            <form action="" method="POST">
              <textarea name="content" id="editor">
              </textarea>
                <button>Bình luận</button>
            </form>
           
          </div>
          <div class="show-comment"></div>
        </div>
      </div>
    
      </main>
    
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    CKEDITOR.replace( 'editor',{
      filebrowserUploadUrl: '{{asset("layout/ckeditor/ck_upload.php")}}',
      filebrowserUploadMethod: 'form'
    });
    </script>

@stop()