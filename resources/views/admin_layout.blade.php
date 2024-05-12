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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('public/frontend/css/styleHomeadmin.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
    <style>
    .active, li:hover, a:active{
    background-color: antiquewhite;
    border-radius: 10px;
    font-weight: 700;
    }

    #nav li.active a{
    background-color: antiquewhite;
    border-radius: 10px;
    font-weight: 700;
    }
    #nav li.active
    {
        background-color: antiquewhite;
        border-radius: 10px;
    }
    
    </style>
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
                <li class="action active"><a href="{{URL::to('/admin-trang-chu')}}" >Trang chủ</a></li>
                <li class="action"><a href="{{URL::to('/a')}}" >Hóa đơn</a></li>
                <li class="action"><a href="{{URL::to('/quan-ly-khach-hang')}}" >Khách hàng</a></li>
                <li class="action"><a href="{{URL::to('c')}}" >Đơn hàng</a></li>
                <li class="action"><a href="{{URL::to('/quan-ly-nhan-vien')}}" >Quản lý nhân viên</a></li>
                <li class="action"><a href="{{URL::to('e')}}" >Sản phẩm</a>
                    <ul class="sub-menu" style="width: max-content;">
                        <li><a href="{{URL::to('f')}}" style="margin-left: 1vw;" >Danh mục sản phẩm</a></li>
                        <li style="margin-bottom: 5;"><a href="{{URL::to('f')}}" style="margin-left: 1vw;padding-bottom: 0;">Loại sản phẩm</a></li>
                        <li style="margin-bottom: 0;"><a href="{{URL::to('f')}}" style="margin-left: 1vw;padding-bottom: 0;">Sản phẩm</a></li>
                    </ul>
                </li>
                <li class="action"><a href="{{URL::to('f')}}">Quản lý slider</a></li>
                <li class="action">
                    <a href="{{URL::to('f')}}">Lịch hẹn</a>
                    <ul class="sub-menu" style="width: max-content;">
                        <li><a href="{{URL::to('f')}}" style="margin-left: 1vw;" >Danh sách lịch hẹn</a></li>
                        <li style="margin-bottom: 0;"><a href="{{URL::to('f')}}" style="margin-left: 1vw;padding-bottom: 0;">Quản lý
                                khung
                                giờ</a></li>
                    </ul>
                </li>
                <li class="action"><a href="{{URL::to('f')}}" >Sign out</a></li>
            </ul>
        </div>

        <div id="container">
            @yield('admin_content')
        </div>
    </div>
</body>
<script>
const currentUrl = window.location.href;
// Lấy danh sách các menu
const menuItems = document.querySelectorAll('#nav li a');

// Kiểm tra và thêm lớp "active" cho menu đang được truy cập
menuItems.forEach(item => {
    if (item.href === currentUrl) {
        item.parentElement.classList.add('active');
    }
});
const menuItems1 = document.querySelectorAll('#nav li');
        // Tìm menu có class "active"
        menuItems1.forEach(item => {
            if (item.classList.contains('active')) {
                const menuText = item.textContent.trim();
                document.getElementById('status').innerHTML = `<h3>${menuText}</h3>`;
            }
        });

</script>
</html>