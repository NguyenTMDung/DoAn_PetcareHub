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
                <td class="id-order">DH012</td>
                            <td class="date">22/12/2023</td>
                            <td class="address">35 Tân Lập, Đông Hòa, Dĩ An, Bình Dương</td>
                            <td class="total">1000000</td>
                            <td>
                                <div id="btn-detail">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detailModal" style="background-color: #1eff00;margin-right: 1em;">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="background-color: rgb(255, 0, 0);color: white;">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                            </td>
            </table>
        </div>
        @foreach($order as $orderData)
        <div id="mobile">
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <td class="id-order">DH012</td>
                </tr>
                <tr>
                    <th >Ngày đặt</th>
                    <td class="date">x</td>
                </tr>
                <tr>
                    <th>Nhận hàng</th>
                    <td class="total">1000000</td>
                </tr>
                <tr>
                    <th>Tổng</th>
                    <td class="total">1000000</td>
                </tr>
                <tr>
                    <th>Chi tiết</th>
                    <td><div id="btn-detail">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detailModal" style="background-color: #1eff00;margin-right: 1em;">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="background-color: rgb(255, 0, 0);color: white;">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                    </td>
                </tr>
            </table>
        </div>
        
        @endforeach
    </div>  
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(148, 148, 148, 0.326);">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Hủy đơn hàng</h3>
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
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                  <button type="button" class="btn btn-primary">Lưu</button>
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
