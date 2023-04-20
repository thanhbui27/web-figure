@extends('layouts.layout')
@section('title','product')
@section('productJs')
<script type="text/javascript" src="{{asset('layout/Js/product.js')}}"></script>
@endSection
@section('mains')
<div class="body-product">
  <section class="product-slide">
    <div class="slide-box">
      <div class="slide-container">
        <div class="slide-image">
          <img src="{{asset('layout/Img')}}/{{$img[0] -> imgSlideP}}" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="product-box">
    <div class="title-sort">
      <div class="title-product">
        <h2>Tất cả sản phẩm</h2>
      </div>
      <div class="sort">
        <div class="sort-product">
          <p>
            <i class="fas fa-sort-alpha-down"></i>
            <span class="sortPr">Sắp xếp</span>
          </p>
        </div>
        <div class="list-sort">
          <ul>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='tang'>Giá : tăng dần </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='giam'>Giá : giản dần</span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='az'>Tên : A - Z </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='za'>Tên : Z - A</span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='moi'>Mới nhất </span>
            </li>
            <li>
              <span class="check-sort check"></span>
              <span class="sortPr" data-sort='cu'>Cũ nhất</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="prouduct-filter">
      <div class="filter-adv">
        <div class="name-filter">
        <a href="{{route('product')}}"> <i class="fas fa-filter"></i> <span>bộ lọc</span></a> 
        </div>
        <div class="sort-price">
          <div class="sort-product">
            <p><i class="fas fa-sort-alpha-down"></i> <span>Giá</span></p>
          </div>
          <div class="list-sort-price">
            <ul>
              @foreach($sortPrice as $sortPrices)
              <li>
                <span class="check-price check"></span>
                <span class="checkPrice" data-price="{{$sortPrices['pricetStart']}};{{$sortPrices['pricetEnd']}}">{{$sortPrices['name']}} đ</span>
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="sort-kind">
          <div class="sort-product">
            <p>
              <i class="fas fa-sort-alpha-down"></i> <span>Thể loại</span>
            </p>
          </div>
          <div class="list-sort-kind">
            <ul>
            @foreach($cates as $catess)
              <li>
                <span class="check-kind check "></span>
                <span class="sortKinds" data-kinds="{{$catess['name_cate']}}">{{$catess['name_cate']}}</span>
              </li>
             @endforeach
            </ul>
          </div>
        </div>

        <div class="sort-size">
          <div class="sort-product">
            <p>
              <i class="fas fa-sort-alpha-down"></i>
              <span>Kích thước</span>
            </p>
          </div>
          <div class="list-sort-size">
            <ul>
              @foreach($sortHeight as $sortHeights)
              <li>
                <span class="check-size check"></span>
                <span class="sortSizes" data-size="{{$sortHeights['heightStart']}};{{$sortHeights['heightEnd']}}">{{$sortHeights['name']}} </span>
              </li>
             @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-box-container">
    <div class="box-prominent">
        <div class="box-container product-attention">
          @foreach ($productList as $product)
          <x-product idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" img="{{ $product['image'] }}" price="{{ $product['price_new'] === ''  ? $product['price_old'] : $product['price_new'] }}" raiting="{{ $product['danhgia'] === null ? 5 :$product['danhgia'] }}"  soluong="{{ $product['soluong'] }}" />
          @endforeach
        
        </div>
      </div>
      <div class="page-divide">
        {!! $productList->appends(request() -> all()) -> render() !!}
      </div>
  </section>

  <section class="prodcut-customer">
    <div class="title">
      <h2>Chắc bạn sẽ chú ý</h2>
    </div>
    <div class="customer-attention">
      <div class="swiper mySwiper-product">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="attention-row">
              <div class="attention-left">
                <div class="attention-box">
                  @foreach ($productCate['action'] as $product)
                  <x-categoryProductComponent idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" price="{{ $product['price_new'] }}" img="{{ $product['image'] }}" soluong="{{ $product['soluong'] }}"/>
                  @endforeach

                </div>
              </div>
              <div class="attention-right">
                <div class="attention-box-big">
                  <div class="attention-box-img">
                    <img src="{{asset('layout/Img/Fate.jpg')}} " alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="attention-row">
              <div class="attention-left">
                <div class="attention-box">

                  @foreach ($productCate['scale'] as $product)
                  <x-categoryProductComponent idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" price="{{ $product['price_new'] }}" img="{{ $product['image'] }}" soluong="{{ $product['soluong'] }}" />
                  @endforeach

                </div>
              </div>
              <div class="attention-right">
                <div class="attention-box-big">
                  <div class="attention-box-img">
                    <img src="{{asset('layout/Img/Fate.jpg')}} " alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="attention-row">
              <div class="attention-left">
                <div class="attention-box">
                  @foreach ($productCate['chibi'] as $product)
                  <x-categoryProductComponent idDetails="{{ $product['id_pro'] }}" name="{{ $product['name_pro'] }}" price="{{ $product['price_new'] }}" img="{{ $product['image'] }}" soluong="{{ $product['soluong'] }}" />
                  @endforeach
                </div>
              </div>
              <div class="attention-right">
                <div class="attention-box-big">
                  <div class="attention-box-img">
                    <img src="{{asset('layout/Img/Fate.jpg')}} " alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next dechodep"></div>
        <div class="swiper-button-prev dechodep"></div>
      </div>
    </div>
  </section>
</div>
@section('ajax')
<script src="{{asset('layout/Ajax/product.js')}}"></script>
@stop()
@stop()
