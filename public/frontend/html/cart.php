<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/styleHome.php">
    <link rel="stylesheet" href="javascript/jsHome.php">
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
                <div class="btn btn-secondary dropdown-toggle nav-link" aria-expanded="false"
                    style="background-color: #FCEED5; border: none;color: #003459;">
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
                <div class="btn btn-secondary dropdown-toggle nav-link" aria-expanded="false"
                    style="background-color: #FCEED5; border: none;color: #003459;">
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
        <div id="frame">
            <div id="title">
                <h3>Giỏ Hàng</h3>
            </div>
            <div id="orders">
                <form>
                    <table>
                        <tr>
                            <td style="flex-grow: 1;" ><input type="checkbox" name="tick" class="tick"></td>
                            <td class="product" style="flex-grow: 4;">
                                <div style="width: 10vw;">
                                    <img src="image/best_seller3.png" alt="" class="img-product" style="width: 10vw;">
                                </div>
                                <div class="detail-product" >
                                    <div class="text-truncate-container">
                                        <p>Quần Áo Mùa Hè Teddy Thú Cưng Giải Phóng Mặt Bằng Áo Cầu Vồng Puff Tay Chống Trơn Mỏng Phong Cách Chó Mèo Mùa Hè</p>
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
                                            <div class="input-group " style="width: 8vw;">
                                                <button class="btn btn-white border border-secondary" type="button" id="button-addon1" data-mdb-ripple-color="dark" onclick="minusQuan()" disabled>
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input readonly="" name="quantity" id="quantity" type="text" class="form-control text-center border border-secondary" value="1"  min="1" max="10" style="background-color: white;padding: 0;margin: 0;"/>
                                                <button class="btn btn-white border border-secondary" type="button" id="button-addon2" data-mdb-ripple-color="dark" onclick="plusQuan()">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td style="flex-grow: 1;">
                                <button class="delete-pro" ><i class="bi bi-dash-circle fa-2x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td style="flex-grow: 1;" ><input type="checkbox" name="tick" class="tick"></td>
                            <td class="product" style="flex-grow: 4;">
                                <div>
                                    <img src="image/best_seller2.png" alt="" class="img-product" style="width: 10vw;">
                                </div>
                                <div class="detail-product">
                                    <div class="text-truncate-container">
                                        <p>Đầm họa tiết trái đào dễ thương cho thú cưng size S-XL</p>
                                    </div>
                                    <select class="select-kind">
                                        <option value="1">Size S</option>
                                        <option value="2">Size M</option>
                                        <option value="3">Size L</option>
                                        <option value="4">Size XL</option>
                                        <option value="4" selected>Size XXL</option>
                                    </select>
                                    <div class="pro-price">
                                        40000 
                                    </div>
                                    <div class="quantitys" style="width: 1vw;">
                                            <div class="input-group " style="width: 8vw;">
                                                <button class="btn btn-white border border-secondary" type="button" id="button-addon1" data-mdb-ripple-color="dark" onclick="minusQuan()" disabled>
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input readonly="" name="quantity" id="quantity" type="text" class="form-control text-center border border-secondary" value="1"  min="1" max="10" style="background-color: white;padding: 0;margin: 0;"/>
                                                <button class="btn btn-white border border-secondary" type="button" id="button-addon2" data-mdb-ripple-color="dark" onclick="plusQuan()">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        
                            <td style="flex-grow: 1;">
                                <button class="delete-pro" ><i class="bi bi-dash-circle fa-2x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table style="width: 100%;border-top: 1px solid;">
                                    <tr>
                                        <td style="width: 70%; text-align: start;padding: 0 10vw;">
                                            <p id="quantity_title">Số lượng sản phẩm :</p>
                                        </td>
                                        <td>
                                            <p id="quantity_procducts"> 2</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 70%;text-align: start;padding: 0 10vw;">
                                            <p id="total_title">Tổng tiền :</p>
                                        </td>
                                        <td>
                                            <p class="total_procducts"> 90000</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>

                    </table>
                   
                </form>
            </div>
        </div>
        <form action="">
             <input type="submit" name="pay" id="pay" value="Mua hàng">
        </form>
    </div>
    <div id="footer">
        <table>
            <tr>
                <td id="infor-shop">
                    <h3>Liên hệ</h3>
                    CỬA HÀNG SẢN PHẨM VÀ DỊCH VỤ THÚ CƯNG PET CARE HUB
                    Địa chỉ: Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam. <br>
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
    function minusQuan() {
            if (document.getElementById("quantity").value > 1) {
                document.getElementById("quantity").value--;
                document.getElementById("button-addon2").disabled = false;
                if (document.getElementById("quantity").value === 1) {
                    document.getElementById("button-addon1").disabled = true;
                }
            } else {
                document.getElementById("button-addon1").disabled = true;
            }
        }
        function plusQuan() {
            if (document.getElementById("quantity").max - document.getElementById("quantity").value > 0) {
                document.getElementById("quantity").value++;
                document.getElementById("button-addon1").disabled = false;
                if (document.getElementById("quantity").max - document.getElementById("quantity").value === 0) {
                    document.getElementById("button-addon2").disabled = true;
                }

            } else {
                document.getElementById("button-addon2").disabled = true;
            }
        }
        const proPrice = document.getElementsByClassName('pro-price');
        const totalProcducts = document.getElementsByClassName('total_procducts');
        function formatPrice(price) {
            return price.toLocaleString('en-US', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0,
            });
        }

        for (let i = 0; i < proPrice.length; i++) {
            const originalValue = parseInt(proPrice[i].textContent);
            const formattedValue = formatPrice(originalValue);
            proPrice[i].textContent = formattedValue;
        }
        for (let i = 0; i < totalProcducts.length; i++) {
            const originalValue = parseInt(totalProcducts[i].textContent);
            const formattedValue = formatPrice(originalValue);
            totalProcducts[i].textContent = formattedValue;
        }
        </script>
</body>
<?php include("css/styleCart.php"); ?>

</html>