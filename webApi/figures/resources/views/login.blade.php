<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('layout/Css/Login/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div id="main">
        <div class="container">
            <!-- start login -->
            <div class="login-circle"></div>
            <div id="SignUp" class="SignUpAccount display">
                <div class="login-container">
                    <div class="login-box " id='roundSignup'>
                        <div class="login-card">
                            <div class="title">
                                <h2>Đăng Ký</h2>
                            </div>
                            <form action="{{route('login.signup')}}" method="POST" onsubmit="return checkpass()" >
                                 @CSRF
                                <div class="username login-input">
                                    <label for="username">Tài Khoản</label>
                                    <input type="text" id="uername" name="usernameDK" placeholder="Tài khoản" required>
                                </div>
                                <div class="password login-input">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" id="password" name="passwordDK"  placeholder="Mật khẩu" required>
                                </div>
                
                                <div class="password login-input">
                                <label for="password-another">Nhập lại mật khẩu</label>
                                <input type="password" id="password-another" name="passwordDK"  placeholder="Mật khẩu" required>
                              </div>
                                
                                <div class="button-login">
                                    <button >Đăng ký</button>
                                </div>
                                <div class="signUp-another">
                                     <p >Đăng kí với google or facebook</p>
                                 </div>
                            </form>
                            <div class="login-another">
                                <div class="button-facebook">
                                  <a href="{{ url('/auth/redirect/facebook') }}">  <button>Facebook </button></a>
                                </div>
                                <div class="button-google">
                                   <a href="{{ url('/auth/redirect/google') }}">  <button>google</button></a>
                                </div>
                            </div>
                            <div class="SignUp">
                                     <p id="Signup-change">Quay lại trang đăng nhập</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="login" class="login-container ">
                <div class="login-box" id='roundLogin'>
                    <div class="login-card">
                        <div class="title">
                            <h2>Đăng nhập</h2>
                        </div>
                        @isset($err)
                            <p style="color: red;">{{$err}} </p>
                        @endisset
                        @isset($sus)
                            <p style="color: green;">{{$sus}} </p>
                        @endisset
                        <form action="{{route('login.check')}}"  method="POST">
                            @CSRF
                            <div class="username login-input">
                                <label for="username">Tài Khoản</label>
                                <input type="text" id="uername" name="username" placeholder="Tài khoản" required>
                            </div>
                            <div class="password login-input">
                                <label for="passwords">Mật khẩu</label>
                                <input type="password" id="passwords" name="password" placeholder="Mật khẩu" required>
                            </div>
                            <div class="savePass">
                                <label for="savePass">Lưu mật khẩu</label>
                                <input type="checkBox" name="savePass" id="savePass"> 
                            </div>

                            <div class="button-login">
                                <button>Đăng nhập</button>
                            </div>
                           </form>   
                            <div class="login-another">
                                <div class="button-facebook">
                                  <a href="{{ url('/auth/redirect/facebook') }}">  <button>Facebook </button></a>
                                </div>
                                <div class="button-google">
                                   <a href="{{ url('/auth/redirect/google') }}">  <button>google</button></a>
                                </div>
                            </div>

                            <div class="SignUp">
                                <p id="login-change">Bạn chưa có tài khoàn ?</p>
                            </div>
                      
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="{{asset('layout/Js/login.js')}}"></script>
</body>
</html>