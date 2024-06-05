@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleAccount.css')}}">

<div id="title">
    <h4>Chi tiết đơn hàng</h4>
</div>
<div class="orders">
    <div id="detail-order">
        <div style="display: flex;">
            <p><strong>Khách hàng: </strong> </p>
            <p id="name">{{$orderData['name']}}</p>
        </div>
        <div style="display: flex;">
            <p><strong>Số điện thoại: </strong> </p>
            <p id="tel">{{$orderData['phone']}}</p>
        </div>
        <div style="display: flex;">
            <p><strong>Mã đơn hàng:</strong>  </p>
            <p id="id-order">{{$orderData['code']}}</p>
        </div>
        <div style="display: flex;">
            <p><strong>Giao hàng:</strong>  </p>
            <p id="address">{{$orderData['address']}}</p>
        </div>
        @if ($orderData['address'] == 'Cửa hàng PetCareHub')
            <div style="background-color:rgb(252, 241, 230); padding: 2vw; border-radius: 10px">
            <b> Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh</b> 
            </div>
            @endif
        <div style="display: flex; margin-top: 1vw"> 
            <p><strong>Phương thức thanh toán:</strong>  </p>
            <p id="method">{{$orderData['method_payment']}}</p>
            
        </div>
            @if ($orderData['method_payment'] == 'Thanh toán online')
            <div style="display: block; background-color:rgb(252, 241, 230); padding: 2vw; border-radius: 10px">
            <b> <p>THÔNG TIN CHUYỂN KHOẢN</p></b>
                <p><b>Chủ Tài Khoản:</b> NGUYEN THI MY DUNG</p>  
                <p><b>Ngân Hàng: </b> VietComBank</p>
                <p><b>Số Tài Khoản:</b> 1028363484</p>
                <p style="margin-bottom: 1vw;"><b>Nội Dung:</b> </p>
            </div>
            @endif
        <br>
        <a href="{{URL::to('/xac-nhan')}}"><button type="button" name="complete" id="complete" value="Thanh toán">Xác nhận</button> </a>
    </div>
    <div id="products">
        <h2 class="title">Sản phẩm</h2>
        @foreach($cartItems as $cart)
        <div class="product" style="display: flex;">
            <div class="img-pro">
                <img src="public/storage/products/{{$cart->image}}" alt="" class="img-product">
            </div>
            <div class="detail-product">
                <div class="text-truncate-container">
                    <p>{{$cart->name}}</p>
                </div>
                <div style="display: flex;">
                    <p>Phân loại:</p>
                    <p class="classify" style="margin-left:5px ;">{{$cart->size}}</p>
                </div>
                <div style="display: flex;">
                    <p>SL:</p>
                    <p class="quantity" style="margin-left:5px ;">{{$cart->num}}</p>
                </div>
            </div>
            <div class="pro-price">{{ number_format($cart->price*$cart->num, 0, '.','.') }}</div>
        </div>
        <hr style="border: 1px solid #656565;width: 90%;margin: auto;margin-bottom: 1vw;">
        @endforeach
        
        <div style="margin: 5vw 2vw;margin-top: 2vw; color: #003459;">
            <div style="display: flex;">
                <h5 style="width: 75%;">Số lượng</h5>
                <h5 id="quantity" style="text-align: end;width:25%;"></h5>
            </div>
            <div style="display: flex;">
                <h5 style="width: 75%;">Phí vận chuyển</h5>
                <h5 id="transport-fee" style="text-align: end;width:25%;">{{ number_format(30000,0,'.','.') }}</h5>
            </div>
            <div style="display: flex;">
                <h3 style="width: 75%;">Tổng tiền</h3>
                <h3 id="total-products" style="text-align: end;width:25%;">{{ number_format($orderData['total'],0,'.','.') }}</h3>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        //Số lượng
        var selectedCount = {{ $cartItems->count() }};
        document.getElementById('quantity').innerText = selectedCount;

    });
</script>
@endsection