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
                    <td>
                    <div id="btn-detail">
                        @if($orderData->status === "Chờ xác nhận")
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="background-color: rgb(255, 0, 0);color: white;">
                                        <i class="bi bi-x-circle"></i>
                        </button>
                        @endif
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detailModal" style="background-color: #1eff00;">
                                        <i class="bi bi-pencil-square"></i>
                        </button>
                    </div>
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
                    <td><div id="btn-detail">
                        @if($orderData->status === "Chờ xác nhận")
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="background-color: rgb(255, 0, 0);color: white;">
                                        <i class="bi bi-x-circle"></i>
                        </button>
                        @endif
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detailModal" style="background-color: #1eff00;">
                                        <i class="bi bi-pencil-square"></i>
                        </button>
                    </div>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(148, 148, 148, 0.326);">
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
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                  <button type="button" class="btn btn-primary">Xác nhận</button>
                </div>
              </div>
            </div>
        </div>
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true" style="background-color: rgba(255, 0, 0, 0.326);">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Chi tiết</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4>
                                    Sản phẩm
                                </h4>
                                <div id="products1">
                                    <div class="product" style="display: flex;">
                                        <div class="img-pro">
                                            <img src="image/best_seller3.png" alt="" class="img-product">
                                        </div>
                                        <div class="detail-product">
                                            <div class="text-truncate-container">
                                                <p>Quần Áo Mùa Hè Teddy Thú Cưng Giải Phóng Mặt Bằng Áo Cầu Vồng Puff
                                                    Tay Chống Trơn Mỏng
                                                    Phong Cách Chó Mèo Mùa Hè</p>
                                            </div>
                                            <div style="display: flex;">
                                                <p>Phân loại:</p>
                                                <p class="classify" style="margin-left:5px ;">Size XXL</p>
                                            </div>
                                            <div style="display: flex;">
                                                <p>SL: </p>
                                                <p class="quantity" style="margin-left:5px ;">1</p>
                                            </div>
                                        </div>
                                        <div class="pro-price">
                                            50000
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid #656565;width: 90%;margin: auto;margin-bottom: 1vw;">
                                    <div class="product" style="display: flex;">
                                        <div class="img-pro">
                                            <img src="image/best_seller2.png" alt="" class="img-product">
                                        </div>
                                        <div class="detail-product">
                                            <div class="text-truncate-container">
                                                <p>Đầm họa tiết trái đào dễ thương cho thú cưng size S-XL</p>
                                            </div>
                                            <div style="display: flex;">
                                                <p>Phân loại:</p>
                                                <p class="classify" style="margin-left:5px ;">Size XXL</p>
                                            </div>
                                            <div style="display: flex;">
                                                <p>SL: </p>
                                                <p class="quantity" style="margin-left:5px ;">1</p>
                                            </div>
                                        </div>
                                        <div class="pro-price">
                                            40000
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid #656565;width: 90%;margin: auto;margin-bottom: 1vw;">
                                    <div style="margin: 5vw 2vw;margin-top: 2vw; color: #003459;">
                                        <div style="display: flex;">
                                            <h5 style="width: 75%;">Số lượng</h5>
                                            <h5 id="quantity" style="text-align: end;width:25% ;">2</h5>
                                        </div>
                                        <div style="display: flex;">
                                            <h5 style="width: 75%;">Phí vận chuyển</h5>
                                            <h5 id="transport-fee" style="text-align: end;width:25% ;">40000</h5>
                                        </div>
                                        <div style="display: flex;">
                                            <h3 style="width: 75%;">Tổng tiền</h3>
                                            <h3 id="total-products" style="text-align: end;width:25%  ;">90000</h3>
                                        </div>
                                    </div>
                                </div>
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