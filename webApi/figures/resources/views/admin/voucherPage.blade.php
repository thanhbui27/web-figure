@extends('layouts.adminLayout')
@section('style-slide')
<link rel="stylesheet" href="{{asset('layout/Css/admin/adminDashboard.css')}}" />
@endSection
@section('adminMain')
<div class="content">
    <div class="title">
        <h5>Tạo mã voucher</h5>
    </div>
    <div class="voucher">
        <div class="createVoucher">
            <form action="{{route('createVoucher')}}" id="submit-voucher" method="GET">
                @CSRF
                <div class="createVoucher_c">
                    <div class="createVoucher_button">
                        <button id="newVoucher">Tạo mới voicher</button>
                    </div>
                    <div class="createVouter_screen">
                        <input type="text" id="voucher" name="voucher">
                    </div>
                </div>
                <div class="actionVoucher">
                    <div class="title">
                        <h5>Cài đặt</h5>
                    </div>
                    <div class="setup">

                        <div class="setupDetail">
                            <div class="voucherInput">
                                <label for="name"> <i class="fas fa-file-signature"></i> <b>Tên voucher </b></label>
                                <input type="text" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="setupDate">
                            <div class="voucherInput">
                                <label for="dateStart"> <i class="fas fa-table"></i> <b> Thời gian bắt đầu </b></label>
                                <input type="date" name="dateStart" id="dateStart" required pattern="\d{4}-\d{2}-\d{2}">
                            </div>
                            <div class="voucherInput">
                                <label for="dateEnd"> <i class="fas fa-table"></i> <b> Thời gian kết thúc </b></label>
                                <input type="date" name="dateEnd" id="dateEnd" required pattern="\d{4}-\d{2}-\d{2}">
                            </div>
                        </div>
                        <div class="voucherInput">
                            <div class="discount">
                                <label for="discount"><i class="fas fa-tag"></i> <b>Voucher Giảm giá</b></label>
                                <input type="radio" id="discount" name="action" value="discount" required>
                            </div>
                            <div class="freeship">
                                <label for="freeShip"><i class="fas fa-tag"></i> <b>Voucher miễn phí vận chuyển</b></label>
                                <input type="radio" id="freeShip" name="action" value="freeShip" required>
                            </div>
                        </div>
                        <div class="setupDate">
                            <div class="voucherInput">
                                <label for="sale"><i class="fas fa-money-check-alt"></i> <b>Giảm giá</b></label>
                                <input type="text" name="sale" id="sale" required disabled>
                            </div>
                            <div class="voucherInput">
                                <label for="limit"><i class="fas fa-link"></i></i> <b>Giới hạn</b></label>
                                <input type="text" name="limit" id="limit">
                            </div>
                        </div>
                        <div class="voucherInput">
                            <label for="getMail"><i class="fas fa-envelope-open-text"></i> <b>Gửi voucher</b> </label>
                            <div class="custom-select">
                                <select name="getMail" id="getMail">
                                    <option value="nosend">Gửi email</option>
                                    <option value="nosend">Không gửi</option>
                                    <option value="sendAllMail">Gửi đến tất cả email</option>
                                </select>
                            </div>
                        </div>
                        <div class="voucherInput">
                            <label for="editor"> <i class="fas fa-info-circle"></i> <b>Chi tiết voucher</b></label>
                            <textarea name="detail" id="editor" cols="30" rows="10"></textarea>
                        </div>
                        <div class="button-submit">
                            <button>Tạo</button>
                        </div>
                    </div>
                </div>
        </div>

        </form>
    </div>
</div>
@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/voucher.js')}}"></script>
@stop()
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("editor", {
        filebrowserUploadUrl: "{{asset('adminI/layout/ckeditor/ck_upload.php')}}",
        filebrowserUploadMethod: "form",
    });
</script>
@stop()