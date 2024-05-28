@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleHomeadmin.css')}}">
<div id="part-1">
                    <div id="statistic">
                        <div id="date">
                            <p>Ngày:</p>
                            <input type="date" id="current-time" name="a" />
                        </div>
                        <div id="style-1">
                            <div id="total-revenue">
                                <i
                                    class="fas fa-chart-line"
                                    style="
                                        background-color: #fa5a7d;
                                        padding: 0.5vw;
                                        color: white;
                                        border-radius: 20px;
                                    "
                                ></i>
                                <h4 id="detail-revenue">{{$totalRevenue}}</h4>
                                <p>Tổng doanh thu</p>
                            </div>
                            <div id="total-order">
                                <i
                                    class="fas fa-clipboard-list"
                                    style="
                                        background-color: #ff947a;
                                        padding: 0.5vw 0.6vw;
                                        color: white;
                                        border-radius: 20px;
                                    "
                                ></i>
                                <h4 id="detail-order">{{$totalBills}}</h4>
                                <p>Tổng đơn</p>
                            </div>
                            <div id="new-customer">
                                <i
                                    class="fas fa-user-plus"
                                    style="
                                        background-color: #bf83ff;
                                        padding: 0.5vw 0.4vw;
                                        color: white;
                                        border-radius: 20px;
                                    "
                                ></i>
                                <h4 id="detail-customer">{{$newCustomersCount}}</h4>
                                <p>Khách hàng mới</p>
                            </div>
                        </div>
                    </div>
                    <div id="best-seller">
                        <h5 class="title">Sản phẩm bán chạy</h5>
                        <table>
                            <tr>
                                <th style="width: 10%">#</th>
                                <th>Sản Phẩm</th>
                                <th>Tỉ lệ</th>
                            </tr>
                            <tr>
                                <td>
                                    <p id="stt">1</p>
                                </td>
                                <td>
                                    <p
                                        id="product-1"
                                        class="text-truncate-container"
                                    >
                                        Thức ăn cho chó
                                    </p>
                                </td>
                                <td>
                                    <p id="ratio-1">10%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="stt">2</p>
                                </td>
                                <td>
                                    <p
                                        id="product-2"
                                        class="text-truncate-container"
                                    >
                                        Quần Áo Mùa Hè Teddy Thú Cưng Giải Phóng
                                        Mặt Bằng Áo Cầu Vồng Puff Tay Chống Trơn
                                        Mỏng Phong Cách Chó Mèo Mùa Hè
                                    </p>
                                </td>
                                <td>
                                    <p id="ratio-2">8%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="stt">3</p>
                                </td>
                                <td>
                                    <p
                                        id="product-3"
                                        class="text-truncate-container"
                                    >
                                        Thanh mài răng
                                    </p>
                                </td>
                                <td>
                                    <p id="ratio-3">5%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="stt">4</p>
                                </td>
                                <td>
                                    <p
                                        id="product-4"
                                        class="text-truncate-container"
                                    >
                                        Xúc xích
                                    </p>
                                </td>
                                <td>
                                    <p id="ratio-4">4%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="stt">5</p>
                                </td>
                                <td>
                                    <p
                                        id="product-5"
                                        class="text-truncate-container"
                                    >
                                        Sữa tắm
                                    </p>
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
{{--Biểu đồ khách hàng đơn hàng--}}
<div class="chartOrder">
                <h5 class="title">Đơn hàng và lượng truy cập website</h5>
                <div class="chartBox">
                    <canvas id="orderChart"></canvas>
                </div>
            </div>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script>
    window.onload = (function loadDate() {
        let date = new Date(),
            day = date.getDate(),
            month = date.getMonth() + 1,
            year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        const todayDate = `${year}-${month}-${day}`;

        document.getElementById("current-time").value = todayDate;
        document.getElementById("current-year").innerHTML = year;
    });
    // Seller
    const dataRevenue = {
        labels: ['1/5/2024', '2/5/2024', '3/5/2024', '4/5/2024', '5/5/2024', '6/5/2024', '7/5/2024'],
        datasets: [{
            label: 'Sản phẩm',
            data: [17, 12, 6, 9, 12, 3, 9],
            backgroundColor: [
                '#9bd5ff'
            ],
            borderColor: [
                '#003459'
            ],
            borderWidth: 1,
            barPercentage: 0.9,
            categoryPercentage: 0.5
        }, {
            label: 'Dịch vụ',
            data: [4, 8, 10, 6, 11, 7, 11],
            backgroundColor: [
                'rgba(255, 26, 104, 0.2)'
            ],
            borderColor: [
                'rgba(255, 26, 104, 1)'
            ],
            borderWidth: 1,
            barPercentage: 0.9,
            categoryPercentage: 0.5
        },]
    };

    // config 
    const config1 = {
        type: 'bar',
        data: dataRevenue,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grace: '5%',
                    height: '5%'
                }
            },
            plugins: {
                legend: {
                    position: 'right',
                    align: 'start',
                }
            }
        }
    };

    // render init block
    const venueChart = new Chart(
        document.getElementById('venueChart'),
        config1
    );
    // Order
    const dataOrder = {
        labels: ['1/5/2024', '2/5/2024', '3/5/2024', '4/5/2024', '5/5/2024', '6/5/2024', '7/5/2024'],
        datasets: [
        {
            label: 'Lượng khách truy cập mới',
            data: [14, 1, 10, 20, 15, 9, 22],
            backgroundColor: [
                'rgb(139, 139, 139)'
            ],
            borderColor: [
                'black'
            ],
            barPercentage: 0.9,
            categoryPercentage: 0.5,
            type :'line',
        },{
            label: 'Đơn hàng',
            data: [17, 12, 6, 9, 12, 3, 9],
            backgroundColor: [
                'rgba(255, 26, 104, 0.2)'
            ],
            borderColor: [
                'rgba(255, 26, 104, 1)'
            ],
            borderWidth: 1,
            barPercentage: 0.9,
            categoryPercentage: 0.5
        }]
    };
    // config 
    const config2 = {
        data: dataOrder,
        type :'bar',
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grace: '5%',
                    height: '5%'
                }
            },
            plugins: {
                legend: {
                    position: 'right',
                    align: 'start',
                }
            },
        }
    };
    // render init block
    const serviceChart = new Chart(
        document.getElementById('orderChart'),
        config2
    );
    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    //
    document.getElementById('status').innerHTML= '<h3>Trang chủ</h3>'
</script>
@endsection
