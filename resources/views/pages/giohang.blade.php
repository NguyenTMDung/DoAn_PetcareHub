@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleCart.css')}}">
<div id="frame">
    <div id="title">
        <h3>Giỏ Hàng</h3>
    </div>
    <div id="orders">
        <form>
            <table>
                @foreach ($cartItems as $item)
                <tr>
                    <td style="flex-grow: 1;"><input type="checkbox" name="tick" class="tick"></td>
                    <td class="product" style="flex-grow: 4;">
                        <div style="width: 10vw;">
                            <img src="{{asset('public/')}}" alt="" class="img-product" style="width: 10vw;">
                        </div>
                        <div class="detail-product">
                            <div class="text-truncate-container">
                                <p>Quần Áo Mùa Hè Teddy Thú Cưng Giải Phóng Mặt Bằng Áo Cầu Vồng Puff Tay Chống
                                    Trơn Mỏng Phong Cách Chó Mèo Mùa Hè</p>
                            </div>
                            <select class="select-kind">
                                <option value="1">Size S</option>
                                <option value="2">Size M</option>
                                <option value="3">Size L</option>
                                <option value="4">Size XL</option>
                                <option value="4" selected>Size XXL</option>
                            </select>
                            <div class="pro-price">
                                50000
                            </div>
                            <div class="quantitys" style="width: 1vw;">
                                <input type="number" name="id2" id="quantity" value="1" min="1" max="10">
                            </div>
                        </div>
                    </td>
                    <td style="flex-grow: 1;">
                        <button class="delete-pro"><i class="bi bi-dash-circle fa-2x"></i></button>
                    </td>
                </tr>
                @endforeach

            </table>

        </form>
    </div>
</div>
<form action="">
    <input type="submit" name="pay" id="pay" value="Mua hàng">
</form>
@endsection