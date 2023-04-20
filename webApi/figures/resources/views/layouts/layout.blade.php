<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  @yield('cssUser')
  <link rel="stylesheet" href="{{asset('layout/Css/Css.css')}}" />
  <link rel="stylesheet" href="{{asset('layout/Css/blog/blog.css')}}" />
  <link rel="stylesheet" href="{{asset('layout/Css/Cart/cart.css')}}" />
  <link rel="stylesheet" href="{{asset('layout/Css/contact/contact.css')}}" />
  <link rel="stylesheet" href="{{asset('layout/Css/detailProduct/detail.css')}}" />
  <link rel="stylesheet" href="{{asset('layout/Css/product/product.css')}}" />
  @yield('spin')
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
 
  <div id="main">
    <header>
      <div class="header">
        <div class="header-left">
          <div class="logo">
            <img src="{{asset('layout/Img/logo.jpg')}}" alt="logo" />
          </div>
          <div class="menu-bar">
            <i class="fas fa-bars"></i>
          </div>
          <div class="navbar">
            <nav>
              <ul class="bannerB">
                  <!-- 
                 <li>
                  <a href="{{route('home')}}">Trang Chủ</a>
                </li>
                <li>
                  <a href="{{route('product')}}">Sản Phẩm</a>
                </li>
                <li>
                  <a href="{{route('contact')}}">Liên Hệ</a>
                </li>
                <li>
                  <a href="{{route('blog')}}">Blog</a>
                </li> -->
             
              </ul>
            
            </nav>
          </div>
          <div class="search">
            <div class="iconSearch">
              <i class="fas fa-search"></i>
            </div>

            <div class="boxSearch">
              <input type="text" id="tSearch" />
            </div>
            <div class="resultSearch"></div>
          </div>
        </div>
        <div class="header-right">
          <div class="adverbial">
            <div class="login">
              @if(session() -> has('id'))
              <i class="fas fa-user-circle f20px"></i>
              <div class="advCustomer">
                <div class="box-customer">
                  <ul style="height: 100%;">
                    @if(session() -> has('id'))
                    <li>Xin chào {{session('username')}}</li>
                    @endif
                    <li><a href="{{route('user')}}">Thông tin cá nhân</a></li>
                    @if(session('quyen')===0)          
                    <li>
                      <a href="{{route('admin')}}">Admin</a>
                    </li>         
                   @endif
                    <li><a href="{{route('login.out')}}">Đăng xuất</a> </li>
                  </ul>
                </div>
              </div>
              @endif
              @if(!session() -> has('id'))
              <div class="login">
                <a href="{{route('login.index')}}">
                  <i class="fas fa-user-circle f20px animation-login"></i></a>
              </div>
              @endif
            </div>
            <div class="cart">
              <a href="{{route('cart')}}">
                <i class="fas fa-shopping-cart"></i>
                @if(session() -> get('cart'))
                <span class="countCart">{{ count(session()->get('cart') )}}</span>
                @endif
                <span class="countCart">0</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('mains')

    <div id="model" class="showRsSearch">
      <div class="addPRoduct add">
        <div class="title" style="margin-top: 100px;">
          <h2>Kết quả tìm kiếm</h2>
        </div>
        <div class="boxs">

        </div>

      </div>
    </div>


    <footer>
      <div class="footer-container">
        <div class="row">
          <div class="about-us">
           
          </div>
          <div class="contact">
          
          </div>
          <div class="Fanpage">
            
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{asset('layout/Js/code.js')}}"></script>
  <script type="text/javascript" src="{{asset('layout/Js/postBlog.js')}}"></script>
  <script type="text/javascript" src="{{asset('layout/Js/detailProduct.js')}}"></script>
  <script type="text/javascript" src="{{asset('layout/Js/swiper.js')}}"></script>
  <script>
    $('#tSearch').keyup(function() {
      $.ajax({
        url: "{{route('search')}}",
        type: 'get',
        data: {
          key: $(this).val(),
          action:'search'
        }
      }).done(function(data) {
        var result = '';
        result = '<ul>'
        data[0].map(d => {
          result += `<li class='rsItem'>${d.name_pro}</li>`
          return result
        })
        result += `<li class='rsLast'> xem tất cả ${data[1]} kết qua tìm kiếm </li>`
        result += '</ul>'
        if (!$('#tSearch').val()) {
          $('.resultSearch').html(null);
        } else {
          $('.resultSearch').html(result)
        }

      })
    });
    $('body').on('click','.rsLast',function(){
      location.href = "/resultSearch?search="+$('#tSearch').val();
    })
    $('.showRsSearch').on('click',function(){
      $(this).removeClass('showM');
    })
    $('body').on('click', '.rsItem', function() {
      $('.showRsSearch').addClass('showM');
      $('#tSearch').val($(this)[0].innerHTML)
      $('.resultSearch').html(null);
      $.ajax({
        url: "{{route('search')}}",
        type: 'get',
        data: {
          key: $(this)[0].innerHTML,
          action:'show'
        }
      }).done(function(data) {
      $('.boxs').html(data)
      })
    })
  </script>

  @yield('detailProduct')
  @yield('productJs')
  @yield('ajax')
</body>

</html>