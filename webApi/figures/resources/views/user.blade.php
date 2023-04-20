@extends('layouts.layout')
@section('title','user')
@section('cssUser')
<link rel="stylesheet" href="{{asset('layout/Css/user/user.css')}}">
@stop()

@section('mains')
<div class="box-user">
    <div class="user-img">
        <img src="{{asset('layout/Img/gaixinh 600x600.png')}}" alt="">
    </div>

    <div class="user-info">
        <div class="user-infor-form">
            @if(session('id_cus')&&session('fullname')&&session('email')&&session('dates')&&session('cmnd')&&session('adress')&&session('sdt'))
            <div class="user-infor-col">
                <div class="info_current">
                    <input type="text" class="getName" data-action='updateName' value="{{session('fullname')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-name">Sửa</button>
                    <button class="choose-save none save-name">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                    <input type="email" class="getName" data-action='updateEmail' name="email" value="{{session('email')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-email">Sửa</button>
                    <button class="choose-save none save-name">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                    <input type="date" class="getName" data-action='updatedates' name="date" value="{{session('dates')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-date">Sửa</button>
                    <button class="choose-save none save-name">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                    <input type="text" class="getName" data-action='updateAdress' name="adress" value="{{session('adress')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-adress">Sửa</button>
                    <button class="choose-save none save-adress">lưu</button>
                </div>
            </div>

            <div class="user-infor-col">
                <div class="info_current">
                    <input type="text" class="getName" name="sdt" data-action='updateSdt' value="0{{session('sdt')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-sdt">Sửa</button>
                    <button class="choose-save none save-sdt">lưu</button>
                </div>
            </div>
            <div class="user-infor-col">
                <div class="info_current">
                    <input type="text" class="getName" name="cmnd" data-action='updateCmnd' value="{{session('cmnd')}}" disabled>
                </div>
                <div class="edit">
                    <button class="choose-edit edit-cmnd">Sửa</button>
                    <button class="choose-save none save-cmnd">lưu</button>
                </div>
            </div>
            @endif
            @if( !session()-> has('sdt') && !session()-> has('email')&& !session()-> has('dates') && !session()-> has('cmnd') )
            <div class="titles">
                <h3>Bạn chưa cung cấp đầy đủ thông tin !!!</h3>
                <i>Vui lòng nhập đầy đủ thông tin để thuận tiện cho việc mua hàng</i>
            </div>
            <div class="form-submit-info">
                <form action="{{route('updateUser')}}" method="GET">
                    @CSRF
                    <input type="hidden" name="id_per" value="{{session('id')}}">
                    <div class="user-infor-col">
                        <div class="info_current">
                            <input type="text" name="fullname" placeholder="Họ và tên">
                        </div>

                    </div>

                    <div class="user-infor-col">
                        <div class="info_current">
                            <input type="email" name="email" placeholder="Email">
                        </div>

                    </div>

                    <div class="user-infor-col">
                        <div class="info_current">
                            <input type="date" name="date">
                        </div>

                    </div>

                    <div class="user-infor-col">
                        <div class="info_current">
                            <input type="text" name="adress" placeholder="Địa chỉ">
                        </div>

                    </div>

                    <div class="user-infor-col">
                        <div class="info_current">
                            <input type="text" name="sdt" placeholder="Số điện thoại">
                        </div>

                    </div>
                    <div class="user-infor-col">
                        <div class="info_current">
                            <input type="text" name="cmnd" placeholder="Chứng minh nhân dân">
                        </div>

                    </div>
                    <div class="update">
                        <input type="submit" value="Cập nhật">
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>

</div>
<div class="tabbars">
    <div class="tab">
        <button class="tablinks order" onclick="openCity(event, 'order')">Đơn đặt hàng</button>
        <button class="tablinks product" onclick="openCity(event, 'product')">Sản phẩm đã mua</button>
        <button class="tablinks pass" onclick="openCity(event, 'pass')">Thay đổi mật khẩu</button>
    </div>
    <div id="order" class="tabcontent">
        <div class="containers">
            <h4>Danh sách order</h4>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">STT</div>
                    <div class="col col-1"> Mã GD</div>
                    <div class="col col-1">Trạng thái</div>
                    <div class="col col-1">Ngày thanh toán</div>
                    <div class="col col-1">Chi tiết</div>
                </li>
                <div class="showw"> </div>
                <div class="loadMore">
                    <span>
                        <h5>xem thêm </h5> <i class="fas fa-chevron-down"></i>
                    </span>
                </div>
            </ul>
        </div>
    </div>

    <div id="product" class="tabcontent">
        <section class="product-box-container">
            <div class="box-prominent">
                <div class="box-container product-attention">

                </div>
            </div>
        </section>
    </div>

    <div id="pass" class="tabcontent">
        <h3>Đổi mật khẩu</h3>
        <div class="resetPass">
            <form id="resetPassword" action="{{route('changePassword')}}" method="post">
                @csrf
                <div class="user-infor-col">
                    <div class="info_current">
                        <input type="password" id="inputPassword" name="password" placeholder="Nhập mật khẩu">
                    </div>
                </div>
                <div class="user-infor-col">
                    <div class="info_current">
                        <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
                <div class="button">
                    <button>Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="show-motife"></div>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
@section('ajax')
<script src="{{asset('layout/Ajax/user.js')}}"></script>
@stop()
@stop()