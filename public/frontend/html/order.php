<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toan</title>
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
            <a href="#" style="text-decoration-line: none;"></a>
            <p>PET CARE HUB</p>
            </a>
        </div>

        <a href="#cart" id="cart" style="text-align: right;width: 10%;margin-top: -0.5vw;"><i class="bi bi-cart4 fa-2x"
                style="color: #003459;"></i></a>
    </div>
    <div class="orders">
        <div id="detail-order">
            <form>
                <h2 class="title">Vận chuyển</h2>
                <div id="location" onclick="choose(this)">
                    <div class="options ship">
                        <input type="radio" id="address" name="loca" value="1">
                        <p>Giao đến địa chỉ của bạn</p>
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="options ship">
                        <input type="radio" id="store" name="loca" value="2">
                        <p>Nhận tại cửa hàng</p>
                        <i class="bi bi-shop"></i>
                    </div>
                </div>
                <div id="infor-customer">

                </div>
                <div id="error-message1">

                </div>

                <h2 class="title" style="margin-top: 2vw;">Thanh toán</h2>
                <p style="font-size: 15px; font-weight: 400;color: #656565;">Toàn bộ các giao dịch được bảo mật và mã
                    hóa.</p>
                <div id="pay" onclick="choose(this)">
                    <div class="options pay" onclick="bg">
                        <input type="radio" id="cash" name="method" value="1">
                        <p>Thanh toán khi nhận hàng</p>
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <div class="options pay">
                        <input type="radio" id="banking" name="method" value="2">
                        <p>Thanh toán qua ngân hàng</p>
                        <i class="bi bi-bank"></i>
                        <div id="bank">

                        </div>
                    </div>

                </div>
                <div id="error-message">

                </div>
                <input type="submit" name="complete" id="complete" value="Hoàn tất đơn hàng">
            </form>
        </div>
        <div id="products">
            <h2 class="title">Sản phẩm</h2>
            <div class="product" style="display: flex;">
                <div style="width: 6vw;">
                    <img src="image/best_seller3.png" alt="" class="img-product">
                </div>
                <div class="detail-product">
                    <div class="text-truncate-container">
                        <p>Quần Áo Mùa Hè Teddy Thú Cưng Giải Phóng Mặt Bằng Áo Cầu Vồng Puff Tay Chống Trơn Mỏng
                            Phong Cách Chó Mèo Mùa Hè</p>
                    </div>
                    <div style="display: flex;">
                        <p>Phân loại:</p>
                        <p class="classify" style="margin-left:5px ;">Size XXL</p>
                    </div>
                    <div style="display: flex;">
                        <p>SL: </p>
                        <p class="quantity" style="margin-left:5px ;">1</p>
                    </div>
                </div>
                <div class="pro-price">
                    50000
                </div>
            </div>
            <hr style="border: 1px solid #656565;width: 90%;margin: auto;margin-bottom: 1vw;">
            <div class="product" style="display: flex;">
                <div style="width: 6vw;">
                    <img src="image/best_seller2.png" alt="" class="img-product">
                </div>
                <div class="detail-product">
                    <div class="text-truncate-container">
                        <p>Đầm họa tiết trái đào dễ thương cho thú cưng size S-XL</p>
                    </div>
                    <div style="display: flex;">
                        <p>Phân loại:</p>
                        <p class="classify" style="margin-left:5px ;">Size XXL</p>
                    </div>
                    <div style="display: flex;">
                        <p>SL: </p>
                        <p class="quantity" style="margin-left:5px ;">1</p>
                    </div>
                </div>
                <div class="pro-price">
                    40000
                </div>
            </div>
            <hr style="border: 1px solid #656565;width: 90%;margin: auto;margin-bottom: 1vw;">
            <div style="margin: 5vw;margin-top: 2vw; color: #003459;">
                <div style="display: flex;">
                    <h5 style="width: 75%;">Số lượng</h5>
                    <h5 id="quantity" style="text-align: end;width:25% ;">2</h5>
                </div>
                <div style="display: flex;">
                    <h5 style="width: 75%;">Phí vận chuyển</h5>
                    <h5 id="transport-fee" style="text-align: end;width:25% ;">40000</h5>
                </div>
                <div style="display: flex;">
                    <h3 style="width: 75%;">Tổng tiền</h3>
                    <h3 id="total-products" style="text-align: end;width:25%  ;">90000</h3>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function choose(a) {
        a.querySelectorAll('input[type=radio]').forEach(radio => {
            const divOptions = radio.parentNode;
            if (radio.checked) {
                divOptions.style.backgroundColor = '#FCEED5';
                divOptions.style.borderRadius = '10px';
            } else {
                divOptions.style.backgroundColor = 'white';
                divOptions.style.borderRadius = '10px';
            }
        });
    }
    document.querySelectorAll('input[type=radio]').forEach(radio => {
        radio.addEventListener('change', () => {
            if (radio.id === 'address' && radio.checked) {
                document.getElementById('infor-customer').innerHTML = `<p>Họ và Tên*</p>
                    <input type="text" id="name" placeholder="Nguyễn Văn A">
                    <p>Địa chỉ giao hàng* <br>(Số nhà, Đường, Phường/Xã, Quận/Huyện, Tỉnh/Thành Phố)</p>
                    <input type="text" id="address" placeholder="Số 34, Tân Lập, Đông Hòa, Dĩ An, Bình Dương">
                    <p>Điện thoại*</p>
                    <input type="tel" id="tel" placeholder="098xxxxxxx">
                    <div id="error-message2">
                    </div>`
            }
            else if (radio.id === 'store' && radio.checked) {
                document.getElementById('infor-customer').innerHTML = `<p style="font-size: 20px;font-weight: 500;margin-top: 1.5vw;">Địa điểm nhận hàng</p>
                    <div style="border: 1px solid #AFAFAF;border-radius: 10px;padding: 1vw 0 0 1vw ;">
                        <h5>Pet Care Hub</h5>
                    <p style="margin-top: -1px;color: #353535;">Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh</p></div>`
            }
            else if (radio.id === 'banking' && radio.checked) {
                document.getElementById('bank').innerHTML = `<h6>Chuyển Khoản Ngân Hàng</h6>
                            <p>Ngân Hàng : TP bank</p>
                            <p>Số Tài Khoản: 0987654321</p>
                            <p style="margin-bottom: 1vw;">Nội Dung: Tên Người Mua Hàng + Số Điện Thoại</p>`
            }
            else if (radio.id === 'cash' && radio.checked) {
                document.getElementById('bank').innerHTML = ``
            }
        });
    });
    const proPrice = document.getElementsByClassName('pro-price');
    function formatPrice(price) {
        return price.toLocaleString('en-US', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });
    }
    for (let i = 0; i < proPrice.length; i++) {
        const originalValue = parseInt(proPrice[i].textContent);
        const price = formatPrice(originalValue);
        proPrice[i].textContent = price;
    }
    //
    const totalPro = document.getElementById("total-products");
    const total = totalPro.textContent;
    const formattedNumber = Number(total).toLocaleString();
    totalPro.textContent = formattedNumber;
    //
    const TransFee = document.getElementById("transport-fee");
    const fee = TransFee.textContent;
    const formatted = Number(fee).toLocaleString();
    TransFee.textContent = formatted;
    //
    const addressOption = document.getElementById('address');
    const storeOption = document.getElementById('store');
    const errorMessage1 = document.getElementById('error-message1');
    const complete1 = document.getElementById('complete');
    complete1.addEventListener('click', (event) => {
        if (!addressOption.checked && !storeOption.checked) {
            errorMessage1.textContent = '*Vui lòng chọn một tùy chọn hình thức nhận hàng!';
            event.preventDefault();
        } else {
            errorMessage.textContent = '';
        }
    });
    //
    const cashOption = document.getElementById('cash');
    const bankingOption = document.getElementById('banking');
    const errorMessage = document.getElementById('error-message');
    const completeButton = document.getElementById('complete');
    completeButton.addEventListener('click', (event) => {
        if (!cashOption.checked && !bankingOption.checked) {
            errorMessage.textContent = '*Vui lòng chọn một tùy chọn thanh toán!';
            event.preventDefault();
        } else {
            errorMessage.textContent = '';
        }
    });
    //
</script>
<?php include("css/styleOrder.php"); ?>
</html>