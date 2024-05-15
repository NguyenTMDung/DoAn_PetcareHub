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
        <div class="product-list">
            <div class="text-center my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox" style="width: 100%;margin-left: 1vw;">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng</p>
                                            </div>
                                            <div class="pro-price">
                                                179.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 100</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/best_seller2.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Đầm họa tiết trái đào dễ thương cho thú cưng size S-XL</p>
                                            </div>
                                            <div class="pro-price">
                                                45.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 101</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/best_seller3.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Quần Áo Mùa Hè 4599 Teddy ins Thú Cưng Giải Phóng Mặt Bằng Áo Cầu Vồng Puff Tay Chống Trơn Mỏng Phong Cách Chó Mèo Mùa Hè</p>
                                            </div>
                                            <div class="pro-price">
                                                50.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 200</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/best_seller4.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Đồ chơi gặm nhai phát ra âm thanh kiểu dáng ngộ nghĩnh dành cho thú cưng</p>
                                            </div>
                                            <div class="pro-price">
                                                20.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 500</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/best_seller5.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Thú Cưng Vui Halloween Mũ Mèo Chó Gấu Trúc Gấu Lợn Mũ Đội Đầu</p>
                                            </div>
                                            <div class="pro-price">
                                                69.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 150</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/best_seller6.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Xúc Xích Cho Chó Thức Ăn Cho Chó Thú Cưng Mèo Xúc Xích Điều Trị Cho Thú Cưng Chó Ăn Nhẹ</p>
                                            </div>
                                            <div class="pro-price">
                                                3.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p>    
                                                <p class="number-of-sales"> 1000</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#productCarousel1" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#productCarousel1" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="banner">
        <img src="{{('public/frontend/image/banner3.png')}}" alt="banner" style="border-radius: 10px;border: 10px solid #003459;width:100%">
    </div>
    {{-- sản phẩm mới --}}
    <div id="new-products">
        <p class="title">Sản Phẩm Mới Nhất</p>
        <div class="product-list">
            <div class="text-center my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="productCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox" style="width: 100%;margin-left: 1vw;">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/new_pro1.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Khăn Cho Chó Tay Đan Ins Phong Cách Yếm Mèo Cổ Dễ Thương Thú Cưng Đan Nước Bọt Khăn Đồ Dùng Cho Thú Cưng</p>
                                            </div>
                                            <div class="pro-price">
                                                20.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                Lượt bán: 
                                                </p>
                                                <p class="number-of-sales"> 10</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/new_pro2.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Khô miếng gà mèo chó đồ ăn nhẹ răng hàm làm sạch răng thơm giòn gà khô đồ ăn nhẹ</p>
                                            </div>
                                            <div class="pro-price">
                                                8.000 VND
                                            </div>
                                            <div class="sales">
                                            <p>
                                                Lượt bán: 
                                            </p> 
                                            <p class="number-of-sales"> 5 </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/new_pro3.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Lá bạc hà mèo bóng lông làm tăng sự thèm ăn lá bạc hà mèo tự nhiên</p>
                                            </div>
                                            <div class="pro-price">
                                                20.000 VND
                                            </div>
                                            <div class="sales">
                                            <p>
                                                Lượt bán: 
                                            </p>     
                                            <p class="number-of-sales"> 3</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/new_pro4.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Thức ăn chủ yếu cho chó đóng hộp thức ăn ướt đồ ăn nhẹ mousse thịt bùn thành chó con đóng hộp chung</p>
                                            </div>
                                            <div class="pro-price">
                                                13.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 7</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/new_pro5.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>Gel tắm cho thú cưng khử mùi chống ngứa lâu dài gel tắm đặc biệt cho thú cưng 500m</p>
                                            </div>
                                            <div class="pro-price">
                                                50.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 11</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-products">
                                                <img src="image/new_pro6.png" alt=""
                                                    style="width: 15vw;">
                                            </div>
                                            <div class="text-truncate-container">
                                                <p>✨Tám phong cách✨Độ đàn hồi cao mèo móng vuốt đồ chơi, mini palm kéo, đá, tát găng tay, khéo léo và ngộ nghĩnh cao su mềm</p>
                                            </div>
                                            <div class="pro-price">
                                                6.000 VND
                                            </div>
                                            <div class="sales">
                                                <p>
                                                    Lượt bán: 
                                                </p> 
                                                <p class="number-of-sales"> 17</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#productCarousel2" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#productCarousel2" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
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
            <a
                href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+-+%C4%90HQG+TP.HCM/@10.8700089,106.8004738,17z/data=!3m1!4b1!4m6!3m5!1s0x317527587e9ad5bf:0xafa66f9c8be3c91!8m2!3d10.8700089!4d106.8030541!16s%2Fm%2F02qqlmm?hl=vi-VN&entry=ttu">
                <input type="submit" value="Chỉ Đường">
            </a>
        </div>
    </div>
@endsection