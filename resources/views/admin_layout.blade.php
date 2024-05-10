<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend/library/font-awesome/fontawesome-free-6.5.2-web/css/all.css')}}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('public/frontend/css/styleHomeadmin.css')}}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="{{asset('public/frontend/image/logo.png')}}" alt="logo">
        </div>
        <div id="status">

        </div>
        <form>
            <div id="search-container">
                <div type="submit" id="submit"><i class="bi bi-search" id="isearch"></i></div>
                <input type="search" name="search" id="input_search" placeholder="Search...">
            </div>
        </form>
        <a href="" style="text-decoration-line: none;">
            <div id="account-admin">
                <p>Hello</p>
                <p id="name-admin">Admin</p>
                <p>!</p>
            </div>
        </a>
    </div>
    <div style="display: flex;">
        <div id="menu">
            <ul id="nav">
                <li id="action"><a href="{{URL::to('/admin-trang-chu')}}">Trang chủ</a></li>
                <li><a href="">Hóa đơn</a></li>
                <li><a href="">Khách hàng</a></li>
                <li><a href="">Đơn hàng</a></li>
                <li><a href="">Quản lý nhân viên</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="">Quản lý slider</a></li>
                <li>
                    <a href="">Lịch hẹn</a>
                    <ul class="sub-menu" style="width: max-content;">
                        <li><a href="#" style="margin-left: 1vw;">Danh sách lịch hẹn</a></li>
                        <li style="margin-bottom: 0;"><a href="#" style="margin-left: 1vw;padding-bottom: 0;">Quản lý
                                khung
                                giờ</a></li>
                    </ul>
                </li>
                <li><a href="">Sign out</a></li>
            </ul>
        </div>

        <div id="container">
            @yield('admin_home')
        </div>
    </div>
</body>
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
        data : dataRevenue,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grace : '5%',
                    height : '5%'
                }
            },
            plugins:{
                legend: {
                    position : 'right',
                    align :'start',
                }
            }
        }
    };

    // render init block
    const  venueChart = new Chart(
        document.getElementById('venueChart'),
        config1
    );
    // Instantly assign Chart.js version
    const chartVersion2 = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    
</script>


</html>