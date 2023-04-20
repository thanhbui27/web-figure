<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin page</title>
    <link rel="stylesheet" href="{{asset('layout/Css/admin/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('layout/Css/admin/adminProduct.css')}}" />
    @yield('style-slide')
    @yield('adSpin')
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  </head>
  <body>
    <input type="checkBox" id="check" />
    <header>
      <label for="check"><i class="fas fa-bars" id="slidebar_btn"></i></label>
      <div class="left_area">
        <h3>Admin Page</h3>
      </div>
      <div class="right_area">
        <a href="{{route('login.out')}}" class="logout_btn">Logout</a>
      </div>
    </header>

    <div class="slidebar">
      <div class="profile_info">
        <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" class="profile_imgae" alt="" />    
        <h4>{{ session()->has('fullname') ? session('fullname') : session('username') }}</h4>
      </div>
      <div class="menu">
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fa fa-desktop"></i><span>Dashboard</span>
            <i class="fas fa-angle-right dropdown"></i
          ></a>
          <div class="sub-menu">
            <a href="{{route('admin')}}" class="sub-item"
              ><i class="fab fa-slideshare"></i></i><span>Edit slide</span></a
            >
            <a href="{{route('adminContent')}}" class="sub-item"
              ><i class="fas fa-text-width"></i></i><span>Edit content</span></a
            >
            <a href="{{route('adminBanner')}}" class="sub-item"
              ><i class="fab fa-wordpress"></i></i><span>Edit banner</span></a
            >
          </div>
        </div>
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fas fa-indent"></i><span>ProductSort</span></i
          > <i class="fas fa-angle-right dropdown"> </i
            ></a>
            <div class="sub-menu">
              <a href="{{route('adminSort')}}" class="sub-item"
                ><i class="fas fa-clipboard-list"></i><span>List Sort</span></a
              >
              <a href="{{route('adminAddListSort')}}" class="sub-item"
                ><i class="fas fa-plus-square"></i></i><span>Add Sort</span></a
              >
            </div>
        </div>
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fas fa-swatchbook"></i></i><span>Product</span>
            <i class="fas fa-angle-right dropdown"> </i
          ></a>
          <div class="sub-menu">
            <a href="{{route('ListProduct')}}" class="sub-item"
              ><i class="fas fa-clipboard-list"></i><span>List product</span></a
            >
            <a href="{{route('adminProduct')}}" class="sub-item"
              ><i class="fas fa-plus-square"></i></i><span>Add product</span></a
            >
          </div>
        </div>
        <div class="item">
          <a class="sub-btn" href="#"
            ><i class="fas fa-swatchbook"></i></i><span>Voucher</span>
            <i class="fas fa-angle-right dropdown"> </i
          ></a>
          <div class="sub-menu">
            <a href="{{route('listVoucher')}}" class="sub-item"
              ><i class="fas fa-clipboard-list"></i><span>List voucher</span></a
            >
            <a href="{{route('voucherAdmin')}}" class="sub-item"
              ><i class="fas fa-plus-square"></i></i><span>Add voucher</span></a
            >
          </div>
        </div>
        <div class="item">
          <a class="" href="{{route('adminCustomer')}}"
            ><i class="fas fa-user-cog"></i></i><span>Customer</span
            ></a>
        </div>
        <div class="item">
          <a  href="{{route('adminSpinning')}}"
            ><i class="fas fa-fan"></i></i><span>Spinning</span
            ></a>       
        </div>
        <div class="item">
          <a  href="{{route('adminOrder')}}"
            ><i class="fa fa-info-circle"></i><span>Order</span
            ></a> 
        </div>
      </div>
    </div>
    @yield('adminMain')
    @yield('ajaxAdmin')
    <script src="{{asset('layout/Js/admin.js')}}"></script>
  </body>
</html>