@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleAccount.css')}}">

<div id="title">
    <h4>LỊCH SỬ MUA HÀNG</h4>
</div>
<div id="detail-purchase">
    <div id="menu-purchase">
    <ul>
        <li class="menuItem"><a href="{{URL::to('/da-giao')}}">Đã giao</a></li>
        <li class="menuItem"><a href="{{URL::to('/cho-xac-nhan')}}">Chờ xác nhận</a></li>
        <li class="menuItem"><a href="{{URL::to('/dang-giao')}}">Đang giao</a></li>
        <li class="menuItem"><a href="{{URL::to('/da-huy')}}">Đã hủy</a></li>
    </ul>
    </div>
    <div class="detai-order">
        <div id="web">
            <table>
                <tr>
                    <th style="width: 20%;">Mã đơn hàng</th>
                    <th style="width: 10%;">Ngày đặt</th>
                    <th style="width: 20%;">Nhận hàng</th>
                    <th style="width: 10%;">Tổng</th>
                    <th style="width: 5%;">Chi tiết</th>
                </tr>
                @foreach($order as $orderData)
                <tr>
                    <td class="id-order">{{$orderData->code}}</td>
                    <td class="date">{{$orderData->created_at->format('H:i:s d/m/Y')}}</td>
                    <td class="address">{{$orderData->address}}</td>
                    <td class="total">{{$orderData->total}}</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" >
                        <i class="bi bi-x-circle"></i>
                    </button> 
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @foreach($order as $orderData)
        <div id="mobile">
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <td class="id-order">{{$orderData->code}}</td>
                </tr>
                <tr>
                    <th >Ngày đặt</th>
                    <td class="date">{{$orderData->created_at->format('H:i:s d/m/Y') }}</td>
                </tr>
                <tr>
                    <th>Nhận hàng</th>
                    <td class="address">{{$orderData->address}}</td>
                </tr>
                <tr>
                    <th>Tổng</th>
                    <td class="total">{{$orderData->total}}</td>
                </tr>
                <tr>
                    <th>Chi tiết</th>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" >
                        <i class="bi bi-x-circle"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Hủy đơn hàng</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>
                        Lý do hủy đơn
                    </h4>
                    <form action="">
                        <input type="text" name="">
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
        </div>
    </div>  
</div>
<script>
    const currentUrl = window.location.href;
    const menuItems = document.querySelectorAll('.menuItem a');
    menuItems.forEach(item => {
        if (item.href === currentUrl) {
            item.parentElement.classList.add('active');
        }
    });
    </script>
@endsection