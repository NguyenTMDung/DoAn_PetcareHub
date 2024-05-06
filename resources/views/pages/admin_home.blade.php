@extends('admin_layout')
@section('admin_home')
<div id="part-1">
    <div id="statistic">
        <div id="date">
            <p>Ngày: </p>
            <input type="date" id="current-time" name="a"
                style="padding: 5px;font-size: 20px;font-weight: 600;color: #003459;">
        </div>
        <div id="style-1">
            <div id="total-revenue">
                <i class="fas fa-chart-line"
                    style="background-color: #FA5A7D;padding: 0.5vw;color: white;border-radius: 20px;"></i>
                <h4 id="detail-revenue">1 Tỷ</h4>
                <p>Tổng doanh thu</p>
            </div>
            <div id="total-order">
                <i class="fas fa-clipboard-list"
                    style="background-color: #FF947A;padding: 0.5vw 0.6vw;color: white;border-radius: 20px;"></i>
                <h4 id="detail-order">1000</h4>
                <p>Tổng đơn</p>
            </div>
            <div id="new-customer">
                <i class="fas fa-user-plus"
                    style="background-color: #BF83FF;padding: 0.5vw 0.4vw;color: white;border-radius: 20px;"></i>
                <h4 id="detail-customer">8</h4>
                <p>Khách hàng mới</p>
            </div>
        </div>
    </div>
    <div id="best-seller">
        <h5 class="title">Sản phẩm bán chạy</h5>
        <table>
            <tr>
                <th style="width: 10%;">#</th>
                <th>Sản Phẩm</th>
                <th>Tỉ lệ</th>
            </tr>
            <tr>
                <td>
                    <p>1</p>
                </td>
                <td>
                    <p id="product-1" class="text-truncate-container">Thức ăn cho chó</p>
                </td>
                <td>
                    <p id="ratio-1">10%</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>2</p>
                </td>
                <td>
                    <p id="product-2" class="text-truncate-container">Quần Áo Mùa Hè Teddy Thú Cưng Giải
                        Phóng Mặt Bằng Áo Cầu Vồng Puff Tay Chống Trơn Mỏng Phong Cách Chó Mèo Mùa Hè</p>
                </td>
                <td>
                    <p id="ratio-2">8%</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>3</p>
                </td>
                <td>
                    <p id="product-3" class="text-truncate-container">Thanh mài răng</p>
                </td>
                <td>
                    <p id="ratio-3">5%</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>4</p>
                </td>
                <td>
                    <p id="product-4" class="text-truncate-container">Xúc xích</p>
                </td>
                <td>
                    <p id="ratio-4">4%</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>5</p>
                </td>
                <td>
                    <p id="product-5" class="text-truncate-container">Sữa tắm</p>
                </td>
                <td>
                    <p id="ratio-5">2.5%</p>
                </td>
            </tr>
        </table>
    </div>
</div>

{{-- biểu đồ cột --}}
<div class="chartRevenue">
    <h5 class="title">Tổng doanh thu</h5>
    <p style="color: #96A5B8;">(Triệu đồng)</p>
    <div class="chartBox">
        <canvas id="venueChart"></canvas>
    </div>
</div>
@endsection