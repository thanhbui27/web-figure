@extends('layouts.adminLayout')

@section('adminMain')
<div class="content">
<div class="title">
        <h2>List Customer</h2>
      </div>
      <div class="search-peoduct">
        <form action="#">
          <div class="input-search">
            <input type="search" name="search-product" id="search-product">
          </div>
          <div class="button-search">
            <button><i class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
      <div class="table-product">
        <div class="list-product-all">
          <table class="tblone">
            <tr>
              <th width='5%'>STT</th>
              <th width="15%">Name</th>
              <th width="10%">Ngày sinh</th>
              <th width="20%">Địa chỉ</th>
              <th width="10%">SDT</th>
              <th width="10%">CMND</th>
              <th width="15%">Action</th>
            </tr>
            <tbody class="showinfo">
                 @php 
              $i=1;
            @endphp
            @foreach($customer as $customers)
            <tr>
              <td>{{$i}}</td>
              <td>{{ $customers['fullname']}}</td>
              <td>{{ $customers['dates']}}</td>
              <td>{{ $customers['adress']}}</td>
              <td>0{{ $customers['sdt']}}</td>
              <td>{{ $customers['cmnd']}}</td>
              <td><div class='btn-action' ><div class="isAdmin admin" data-idd="{{ $customers['id_per']}}" ><a href="#"  @php 
               if($customers -> quyen == 0){
                 echo "style ='background:red;color:black'";
               }else{
                echo "style ='background:black;color:white'";
               }
              @endphp
               >admin</a></div><div class="delete-use delete" data-idd="{{ $customers['id_per']}}" ><a href="#">Delete</a></div><div  class="edit btn-info" data-ide="{{ $customers['id_per']}}"><a  href="#">Account</a></div></div></td>
            </tr>
            @php 
              $i++;
            @endphp
          @endforeach

            </tbody>
         
            </table>
        </div>
        <div class="page-divide">
          {!! $customer->appends(request() -> all()) -> render() !!}
        </div>
      </div>
      <div id="model-customer">
              <div class="addPRoduct add">
                <div class="title">
                  <h2>Info customer</h2>
                </div>
                <div class="form-add-product" style="color: black;">
                    <div class="list-product-all">
                        <table class="tblone">
                          <tr>
                            <th width="15%">Username</th>
                            <th width="10%">Provider</th>
                            <th width="10%">QQ</th>
                            <th width="20%">Number order</th>
                          </tr>
                          <tbody class="showIf">

                          </tbody>
                        
                          </table>
                      </div>
                </div>
        </div>
    </div>
</div>

@section('ajaxAdmin')
<script src="{{asset('layout/Ajax/adminCus.js')}}"></script>
@stop()
@stop()