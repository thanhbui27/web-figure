@if($soluong !== '0')
<div class="attention-box-product">
  <div class="attention-img">
    <img src="{{asset('layout/Img')}}/{{ $img }}" alt="" />
  </div>
  <div class="attention-content">
    <div class="attention-content-name">
      <h4>{{ $name }}</h4>
      <div class="attention-content-price">
        <strong>{{ $price }} đ</strong>
      </div>
    </div>
    <div class="attention-button">
      <button class="cartCt" data-value="{{ $idDetails }}">
        <i class="fas fa-cart-plus"></i>Thêm vào giỏ
        hàng
      </button>
    </div>
  </div>
</div>
@endif

@if($soluong === '0')
<div class="attention-box-product">
  <div class="attention-img">
    <img src="{{asset('layout/Img')}}/{{ $img }}" alt="" />
  </div>
  <div class="attention-content">
    <div class="attention-content-name">
      <h4>{{ $name }}</h4>
      <div class="attention-content-price">
        <strong>{{ $price }} đ</strong>
      </div>
    </div>
    <div class="attention-button">
      <button >
        <i class="fas fa-cart-plus"></i>Hết hàng
      </button>
    </div>
  </div>
</div>
@endif