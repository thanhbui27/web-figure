@extends('layouts.layout')
@section('title','Kết quả tìm kiếm')
@section('mains')
<div class="padding-header"></div>
<div class="container">
  <div class="title">
    <h4>Tìm kiếm với từ khóa "{{$key}}"</h4>
  </div>
  <div class="header-action ">
    <div class="tab">
      <div class="r-1">
        <button>Lọc sản phẩm theo loại</button>
      </div>
      <div class="r-2">
        <button>Sản phẩm được mua nhiều nhất</button>
      </div>
    </div>
    <div class="list-action tab">

    </div>

    <div class="box-prominent">
      <div class="box-container">
        @foreach ($product as $products)
        <x-product idDetails="{{ $products['id_pro'] }}" name="{{ $products['name_pro'] }}" img="{{ $products['image'] }}" price="{{ ($products['price_new'] === null ) ? $products['price_old'] : $products['price_new'] }}" raiting="{{ $products['danhgia'] }}" soluong="{{ $products['soluong'] }}" />
        @endforeach
      </div>
    </div>
  </div>

</div>
<script>
  $(document).ready(function() {
    $('.r-1').on('click', function() {
      $.ajax({
        url: 'getListCate',
        type: 'get'
      }).done(function(data) {
        html = '';
        html = data.map((datas, index) => {
          var htmls = ` <div data-value=${datas.id_cate} class="t-${index + 1} ac">
              <button>${datas.name_cate}</button>
            </div>`
          return htmls;
        })
        $('.list-action').html(html);
      })

    })

    for (let i = 0; i < 100; i++) {
      $('body').on('click', `.t-${i+1}`, function() {
        var data = $(this).data('value');
        var key = $(location).attr('href');
        $.ajax({
          url: 'searchBy',
          type: 'get',
          data: {
            action: 'getByCate',
            value: data,
            key: key.split("=")[1]
          }
        }).done(function(data) {
          var html = "";
          html = data.map((datas, index) => {
            var htmls = "";
            var danhgia = datas.danhgia === 0 ? 5 : datas.danhgia;
            var htmlStart = "";
            for (let i = 1; i <= 5; i++) {
              if (Math.floor(danhgia) >= i) {
                htmlStart += '<i class="fas fa-star vang"></i>';
              }
              if (Math.floor(danhgia) < i) {
                htmlStart += '<i class="fas fa-star"></i>';
              }
            }
            htmls += `
                <div class="box">
                <div class="imageBox">
                    <img src="/layout/Img/${datas.image}" alt="" />
                    <ul class="action">
                    <a href="">
                        <li>
                        <i class="fas fa-heart"></i>
                        <span>Thêm danh sách </span>
                        </li>
                    </a>
                    <div class="cartCt" data-value="${datas.id_pro}">
                        <li>
                        <i class="fas fa-cart-plus"></i>
                        <span class="idPcart">Thêm cào giỏ hàng</span>
                        </li>
                    </div>
                    <a href="detailProduct/${datas.id_pro}">
                        <li>
                        <i class="fas fa-eye"></i>
                        <span>xem sản phẩm</span>
                        </li>
                    </a>
                    </ul>
                </div>

                <div class="contents">
                    <div class="productName">
                    <h3>${datas.name_pro}</h3>
                    </div>
                    <div class="price_raiting">
                    <div class="price">
                        <h5>${
                            datas.price_new ? datas.price_old : datas.price_new
                        } VND</h5>
                    </div>
                    <div class="raiting">
                     ${htmlStart}
                    </div>
                    </div>
                </div>
                </div>
                `;
            return htmls;
          });

          $(".box-container").html(html);
        })
      })
    }
    $('.r-2').on('click', function() {
      var key = $(location).attr('href');
      $.ajax({
        url: 'searchBy',
        type: 'get',
        data: {
          action: 'getByBuy',
          key: key.split("=")[1]
        }
      }).done(function(data) {
        var html = "";
        html = data.map((datas, index) => {
          var htmls = "";
          var danhgia = datas.danhgia === 0 ? 5 : datas.danhgia;
          var htmlStart = "";
          for (let i = 1; i <= 5; i++) {
            if (Math.floor(danhgia) >= i) {
              htmlStart += '<i class="fas fa-star vang"></i>';
            }
            if (Math.floor(danhgia) < i) {
              htmlStart += '<i class="fas fa-star"></i>';
            }
          }
          htmls += `
                <div class="box">
                <div class="imageBox">
                    <img src="/layout/Img/${datas.image}" alt="" />
                    <ul class="action">
                    <a href="">
                        <li>
                        <i class="fas fa-heart"></i>
                        <span>Thêm danh sách </span>
                        </li>
                    </a>
                    <div class="cartCt" data-value="${datas.id_pro}">
                        <li>
                        <i class="fas fa-cart-plus"></i>
                        <span class="idPcart">Thêm cào giỏ hàng</span>
                        </li>
                    </div>
                    <a href="detailProduct/${datas.id_pro}">
                        <li>
                        <i class="fas fa-eye"></i>
                        <span>xem sản phẩm</span>
                        </li>
                    </a>
                    </ul>
                </div>

                <div class="contents">
                    <div class="productName">
                    <h3>${datas.name_pro}</h3>
                    </div>
                    <div class="price_raiting">
                    <div class="price">
                        <h5>${
                            datas.price_new ? datas.price_old : datas.price_new
                        } VND</h5>
                    </div>
                    <div class="raiting">
                     ${htmlStart}
                    </div>
                    </div>
                </div>
                </div>
                `;
          return htmls;
        });

        $(".box-container").html(html);
      })
    })
  })
</script>
@stop()