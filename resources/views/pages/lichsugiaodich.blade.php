@extends('layout')
@section('content')
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
                    <th style="width: 10%;">Số lượng</th>
                    <th style="width: 10%;">Tổng</th>
                    <th style="width: 5%;">Chi tiết</th>
                </tr>
                <tr>
                    <td class="id-order">DH012</td>
                    <td class="date">22/12/2023</td>
                    <td class="address">35 Tân Lập, Đông Hòa, Dĩ An, Bình Dương</td>
                    <td class="quantity">3</td>
                    <td class="total">1000000</td>
                    <td><a href="">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div id="mobile">
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <td class="id-order">DH012</td>
                </tr>
                <tr>
                    <th >Ngày đặt</th>
                    <td class="date">22/12/2023</td>
                </tr>
                <tr>
                    <th>Trạng thái thanh toán</th>
                    <td class="status">Chưa thanh toán</td>
                </tr>
                <tr>
                    <th>Nhận hàng</th>
                    <td class="address">35 Tân Lập, Đông Hòa, Dĩ An, Bình Dương</td>
                </tr>
                <tr>
                    <th>Số lượng</th>
                    <td class="quantity">3</td>
                </tr>
                <tr>
                    <th>Tổng</th>
                    <td class="total">1000000</td>
                </tr>
                <tr>
                    <th>Chi tiết</th>
                    <td><a href="">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection