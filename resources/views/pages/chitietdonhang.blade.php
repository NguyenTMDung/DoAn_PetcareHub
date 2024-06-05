@extends('layout')
@section('content')
<div id="title">
    <h4>Chi tiết đơn hàng</h4>
</div>
<div class="orders">
    {{-- <div id="detail-order">
        <div style="display: flex;">
            <p><strong>Khách hàng: </strong> </p>
            <p id="name">Nguyễn Văn A</p>
        </div>
        <div style="display: flex;">
            <p><strong>Số điện thoại: </strong> </p>
            <p id="tel">012335732</p>
        </div>
        <div style="display: flex;">
            <p><strong>Mã đơn hàng:</strong>  </p>
            <p id="id-order">DH0111</p>
        </div>
        <div style="display: flex;">
            <p><strong>Ngày đặt:</strong>  </p>
            <p id="current-date"></p>
        </div>
        <div style="display: flex;">
            <p><strong>Giao hàng:</strong>  </p>
            <p id="address">Tại cửa hàng hoặc địa chỉ của khách</p>
        </div>
        <div style="display: flex;">
            <p><strong>Trạng thái đơn hàng:</strong>  </p>
            <p id="status-order">Chờ xác nhận</p>
        </div>
        <div style="display: flex;">
            <p><strong>Phương thức thanh toán:</strong>  </p>
            <p id="method">Chuyển khoản</p>
        </div>
        <div style="display: flex;" id="status">

        </div>
    </div> --}}
    <div id="products">
        <h2 class="title">Sản phẩm</h2>
        <div class="product" style="display: flex;">
            <div class="img-pro">
                <img src="{{('public/frontend/image/best_seller3.png')}}" alt="" class="img-product">
            </div>
            <div class="detail-product">
                <div class="text-truncate-container">
                    <p>Quần Áo Mùa Hè Teddy Thú Cưng Giải Phóng Mặt Bằng Áo Cầu Vồng Puff Tay Chống Trơn Mỏng
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
                <img src="{{('public/frontend/image/best_seller2.png')}}" alt="" class="img-product">
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
@endsection