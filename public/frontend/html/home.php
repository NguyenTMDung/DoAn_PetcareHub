<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="library/font-awesome/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="image/logo.png" alt="logo">
        </div>
        <form>
            <div id="search-container">
                <div type="submit" id="submit"><i class="bi bi-search" id="isearch"></i></div>
                <input type="search" name="search" id="input_search" placeholder="Search...">
            </div>
        </form>
        <div id="infor">
            <div id="phone">
                <p id="sty_phone">Phone</p>
                <p id="phone_number">0987654321</p>
            </div>
            <div id="email">
                <p id="sty_email">Email</p>
                <p id="email_addr">abc@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="nav al-center ju-center" style="flex-grow: 3;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
            </li>
            <li class="nav-item dropdown">
                <div class="btn btn-secondary dropdown-toggle nav-link"
                    aria-expanded="false" style="background-color: #FCEED5; border: none;color: #003459;">
                    <a href="">Sản Phẩm</a>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Chó</a>
                        <ul class="sub-menu">
                            <li><a href="#">Thức ăn</a></li>
                            <li><a href="#">Đồ dùng thú cưng</a></li>
                            <li><a href="#">Thời trang</a></li>
                            <li><a href="#">Sản Phẩm làm đẹp</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Mèo</a>
                        <ul class="sub-menu" style="margin-top: 26%;">
                            <li><a href="#">Thức ăn</a></li>
                            <li><a href="#">Đồ dùng thú cưng</a></li>
                            <li><a href="#">Thời trang</a></li>
                            <li><a href="#">Sản Phẩm làm đẹp</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <div class="btn btn-secondary dropdown-toggle nav-link"
                    aria-expanded="false" style="background-color: #FCEED5; border: none;color: #003459;">
                    <a href="">Dịch Vụ</a>
                </div>
                <ul class="dropdown-menu" style="width: 200px;">
                    <li><a class="dropdown-item" href="#">Dịch vụ Spa</a></li>
                    <li><a class="dropdown-item" href="#">Dịch vụ khách sạn</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Giới Thiệu</a>
            </li>
        </ul>
        <ul id="sty-user" style="flex-grow: 1;">
            <li>
                <a href="#account" id="account"><i class="fas fa-user fa-2x"
                        style="color: #003459;padding: 2vw;"></i></a>
                <a href="#cart" id="cart"><i class="class = bi bi-cart4  fa-2x" style="color: #003459;"></i></a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div id="slide-show" class="carousel slide" data-bs-ride="carousel" style="margin: 2vw 0;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/Pet Care Hub (1).png" class="d-block w-100" alt="..."
                        style="max-width: 90vw;border-radius: 10px">
                </div>
                <div class="carousel-item">
                    <img src="image/banner2.png" class="d-block w-100" alt="..."
                        style="max-width: 90vw;border-radius: 10px">
                </div>
                <div class="carousel-item">
                    <img src="image/slide-show-3.png" class="d-block w-100" alt="..."
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
        <p class="title">Mua sắm theo giống thú cưng</p>
        <div id="shopify-section">
            <div class="sub-section">
                <a href="#cho">
                    <img src="image/dog_banner.webp" alt="dog">
                </a>
            </div>

            <div class="sub-section">
                <a href="meo">
                    <img src="image/cat_banner.webp" alt="cat">
                </a>
            </div>

        </div>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
            <img src="image/banner3.png" alt="banner" style="border-radius: 10px;border: 10px solid #003459;">
        </div>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
        <div id="promotion">
            <p class="title">Khuyến Mãi</p>
            <div class="product-list">
                <div class="text-center my-3">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="productCarousel3" class="carousel slide" data-bs-ride="carousel">
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
                                                    <p class="old-price">179.000 VND</p>
                                                    <p class="new-price">179.000 VND</p>
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    <img src="image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg" alt=""
                                                        style="width: 15vw;">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    <p class="old-price">179.000 VND</p>
                                                    <p class="new-price">179.000 VND</p>
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    <img src="image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg" alt=""
                                                        style="width: 15vw;">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    <p class="old-price">179.000 VND</p>
                                                    <p class="new-price">179.000 VND</p>
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    <img src="image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg" alt=""
                                                        style="width: 15vw;">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    <p class="old-price">179.000 VND</p>
                                                    <p class="new-price">179.000 VND</p>
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    <img src="image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg" alt=""
                                                        style="width: 15vw;">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    <p class="old-price">179.000 VND</p>
                                                    <p class="new-price">179.000 VND</p>
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
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
                                                    <img src="image/vn-11134207-7r98o-lnlnqr6vpyp918.jpg" alt=""
                                                        style="width: 15vw;">
                                                </div>
                                                <div class="text-truncate-container">
                                                    <p>Nhà đệm cho chó mèo có thể gấp gọn tháo rời ổ ấm cho thú cưng</p>
                                                </div>
                                                <div class="pro-price">
                                                    <p class="old-price">179.000 VND</p>
                                                    <p class="new-price">179.000 VND</p>
                                                </div>
                                                <div class="sales">
                                                    Lượt bán: <p class="number-of-sales"> 100</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#productCarousel3" role="button"
                                data-bs-slide="prev" style="margin-left: -6vw;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#productCarousel3" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="shop-address">
            <div class="title">
                <hr>
                <p>Mua Trực Tiếp Tại Cửa Hàng</p>
                <hr>
            </div>
            <div class="img-shop">
                <div class="sub-section">
                    <img src="image/img_shop1.webp" alt="dog">
                </div>
                <div class="sub-section">
                    <img src="image/img_shop2.webp" alt="cat">
                </div>
            </div>
            <div id="shop-address-detail">
                <h3>Pet Care Shop</h3>
                <p>Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam.</p>
                <a
                    href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+-+%C4%90HQG+TP.HCM/@10.8700089,106.8004738,17z/data=!3m1!4b1!4m6!3m5!1s0x317527587e9ad5bf:0xafa66f9c8be3c91!8m2!3d10.8700089!4d106.8030541!16s%2Fm%2F02qqlmm?hl=vi-VN&entry=ttu">
                    <input type="submit" value="Chỉ Đường">
                </a>
            </div>
        </div>
    </div>
    <div id="footer">
        <table>
            <tr>
                <td id="infor-shop">
                    <h3>Liên hệ</h3>
                        CỬA HÀNG SẢN PHẨM VÀ DỊCH VỤ THÚ CƯNG PET CARE HUB. <br>
                        Địa chỉ: Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam.
                        <br>
                    <a href="#hotline"><i class="fas fa-phone-alt"></i>Hotline:+84 9123123123</a><br>
                    <a href="#shop_email"><i class="bi bi-envelope-fill"></i>Email: abc@gmail.com</a>
                    <div id="connect_shop">
                        <a href="#tiktok"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#facebook" id="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#youtube" id="youtube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </td>
                <td style="width: 30%;"> &nbsp;</td>
                <td id="policy">
                    <h3>Chính sách khách hàng</h3>
                    <a href="#">Chính sách đổi trả.</a><br>
                    <a href="#">Chính sách bảo mật.</a><br>
                    <a href="#">Phương thức thanh toán.</a><br>
                    <a href="#">Chính sách hoàn tiền</a><br>
                    <p>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;" class="logo"><img src="image/logo.png" alt="logo"></td>
            </tr>
        </table>
    </div>
    <script>
        let items1 = document.querySelectorAll('#productCarousel1 .carousel-item')

        items1.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items1[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
        let items2 = document.querySelectorAll('#productCarousel2 .carousel-item')

        items2.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
        let items3 = document.querySelectorAll('#productCarousel3 .carousel-item')

        items3.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items3[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    <?php include("css/styleHome.php"); ?>
</body>

</html>