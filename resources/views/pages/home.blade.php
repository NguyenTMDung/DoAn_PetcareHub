@extends('layout')
@section('content')
{{-- banner --}}
    <div id="slide-show" class="carousel slide" data-bs-ride="carousel" style="margin: 2vw 0;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{('public/frontend/image/Pet Care Hub (1).png')}}" class="d-block w-100" alt="..."
                    style="max-width: 90vw;border-radius: 10px">
            </div>
            <div class="carousel-item">
                <img src="{{('public/frontend/image/banner2.png')}}" class="d-block w-100" alt="..."
                    style="max-width: 90vw;border-radius: 10px">
            </div>
            <div class="carousel-item">
                <img src="{{('public/frontend/image/slide-show-3.png')}}" class="d-block w-100" alt="..."
                    style="max-width: 90vw;border-radius: 10px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slide-show" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slide-show" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- mua sắm theo giống thú cưng --}}
    <p class="title">Mua sắm theo giống thú cưng</p>
    <div id="shopify-section">
        <div class="sub-section">
            <a href="#cho">
                <img src="{{('public/frontend/image/dog_banner.webp')}}" alt="dog">
            </a>
        </div>

        <div class="sub-section">
            <a href="meo">
                <img src="{{('public/frontend/image/cat_banner.webp')}}" alt="cat">
            </a>
        </div>

    </div>{{-- được boss yêu thích --}}
    <div id="best-seller">
            <p class="title">Được Boss yêu thích</p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng
                                                    </p>
                                                </div>
                                                <div class="pro-price">
                                                    179.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/best_seller2.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Đầm họa tiết trái đào dễ thương cho thú cưng size S-XL</p>
                                                </div>
                                                <div class="pro-price">
                                                    45.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 101</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/best_seller3.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Quần Áo Mùa Hè 4599 Teddy ins Thú Cưng Giải Phóng Mặt Bằng Áo
                                                        Cầu
                                                        Vồng Puff Tay Chống Trơn Mỏng Phong Cách Chó Mèo Mùa Hè</p>
                                                </div>
                                                <div class="pro-price">
                                                    50.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 200</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/best_seller4.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Đồ chơi gặm nhai phát ra âm thanh kiểu dáng ngộ nghĩnh dành
                                                        cho
                                                        thú cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    20.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 500</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/best_seller5.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Thú Cưng Vui Halloween Mũ Mèo Chó Gấu Trúc Gấu Lợn Mũ Đội Đầu
                                                    </p>
                                                </div>
                                                <div class="pro-price">
                                                    69.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 150</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/best_seller6.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Xúc Xích Cho Chó Thức Ăn Cho Chó Thú Cưng Mèo Xúc Xích Điều
                                                        Trị
                                                        Cho Thú Cưng Chó Ăn Nhẹ</p>
                                                </div>
                                                <div class="pro-price">
                                                    3.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 1000</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- left,right control -->
                            <div id="slider-control">
                                <a class="left carousel-control" href="#itemslider" data-slide="prev"><i
                                        class="bi bi-chevron-left" style="color: black;"></i></a>
                                <a class="right carousel-control" href="#itemslider" data-slide="next"><i
                                        class="bi bi-chevron-right" style="color: black;margin-left: 1.5vw;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- banner --}}
        <div id="banner">
            <img src="{{('public/frontend/image/banner3.png')}}" alt="banner"
                style="border-radius: 10px;border: 10px solid #003459;width: 100%;">
        </div>
        {{-- san phẩm mới --}}
        <div id="new-products">
            <p class="title">Sản Phẩm Mới Nhất</p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-showmanymoveone slide" id="itemsliderx">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/new_pro1.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Khăn Cho Chó Tay Đan Ins Phong Cách Yếm Mèo Cổ Dễ Thương
                                                        Thú
                                                        Cưng
                                                        Đan Nước Bọt Khăn Đồ Dùng Cho Thú Cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    20.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 10</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/new_pro2.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Khô miếng gà mèo chó đồ ăn nhẹ răng hàm làm sạch răng
                                                        thơm
                                                        giòn
                                                        gà khô đồ ăn nhẹ</p>
                                                </div>
                                                <div class="pro-price">
                                                    8.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 5 </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/new_pro3.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Lá bạc hà mèo bóng lông làm tăng sự thèm ăn lá bạc hà mèo
                                                        tự
                                                        nhiên</p>
                                                </div>
                                                <div class="pro-price">
                                                    20.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 3</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/new_pro4.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Thức ăn chủ yếu cho chó đóng hộp thức ăn ướt đồ ăn nhẹ
                                                        mousse
                                                        thịt bùn thành chó con đóng hộp chung</p>
                                                </div>
                                                <div class="pro-price">
                                                    13.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 7</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/new_pro5.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Gel tắm cho thú cưng khử mùi chống ngứa lâu dài gel tắm
                                                        đặc
                                                        biệt
                                                        cho thú cưng 500m</p>
                                                </div>
                                                <div class="pro-price">
                                                    50.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 11</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="product">
                                            <a href="">
                                                <div class="img-products">
                                                    <img src="{{('public/frontend/image/new_pro6.png')}}" alt="">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>✨Tám phong cách✨Độ đàn hồi cao mèo móng vuốt đồ chơi,
                                                        mini
                                                        palm
                                                        kéo, đá, tát găng tay, khéo léo và ngộ nghĩnh cao su mềm
                                                    </p>
                                                </div>
                                                <div class="pro-price">
                                                    6.000 VND
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 17</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- left,right control -->
                            <div id="slider-control">
                                <a class="left carousel-control" href="#itemsliderx" data-slide="prev"><i
                                        class="bi bi-chevron-left" style="color: black;"></i></a>
                                <a class="right carousel-control" href="#itemsliderx" data-slide="next"><i
                                        class="bi bi-chevron-right" style="color: black;margin-left: 1.5vw;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- địa chỉ --}}
    <div id="shop-address">
        <div class="title">
            <hr>
            <p>Mua Trực Tiếp Tại Cửa Hàng</p>
            <hr>
        </div>
        <div class="img-shop">
            <div class="sub-section">
                <img src="{{('public/frontend/image/img_shop1.webp')}}" alt="dog">
            </div>
            <div class="sub-section">
                <img src="{{('public/frontend/image/img_shop2.webp')}}" alt="cat">
            </div>
        </div>
        <div id="shop-address-detail">
            <h3>Pet Care Hub</h3>
            <p>Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam.</p>
            <input type="submit" value="Chỉ Đường" onclick="ggmap()">
        </div>
        <div id="map">

        </div>
    </div>
    <script>
        function ggmap() {
            document.getElementById('map').innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.231240417278!2d106.80047381139414!3d10.870008889239834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAtIMSQSFFHIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1715785879974!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#itemslider').carousel({ interval: 3000 });
            $('.carousel-showmanymoveone .item').each(function () {
                var itemToClone = $(this);
                for (var i = 1; i < 4; i++) {
                    itemToClone = itemToClone.next();

                    if (!itemToClone.length) {
                        itemToClone = $(this).siblings(':first');
                    }
                    itemToClone.children(':first-child').clone()
                        .addClass("cloneditem-" + (i))
                        .appendTo($(this));
                }
            });
        });
    </script>
@endsection