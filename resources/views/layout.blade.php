<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/styleHome.css')}}">
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
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="{{('public/frontend/image/logo.png')}}" alt="logo">
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
                <a class="nav-link active" aria-current="page" href="{{URL::to('/trang-chu')}}">Trang chủ</a>
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
                <a href="#cart" id="cart"><i class="bi bi-cart4  fa-2x" style="color: #003459;"></i></a>
            </li>
        </ul>
    </div>
    <div class="container">
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

        @yield('content')

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
                <td colspan="3" style="text-align: center;" class="logo"><img src="{{('public/frontend/image/logo.png')}}" alt="logo"></td>
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
        function convertToK(number) {
                if (number == 1000000) {
                    return (number / 1000000).toFixed(0) + "M";
                }if (number > 1000000) {
                    return (number / 1000000).toFixed(1) + "M";
                } else if (number == 1000) {
                    return (number / 1000).toFixed(0) + "K";
                } else if (number > 1000) {
                    return (number / 1000).toFixed(1) + "K";
                } else {
                    return number.toString();
                }
            }
            const elements = document.getElementsByClassName('number-of-sales');
            for (let i = 0; i < elements.length; i++) {
                const originalValue = parseInt(elements[i].textContent);
                const convertedValue = convertToK(originalValue); 
                elements[i].textContent = convertedValue;
            }
    </script>
</body>
</html>