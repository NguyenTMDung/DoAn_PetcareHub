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
    <link rel="stylesheet" href="{{asset('public/frontend/css/styleOrder.css')}}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <div class="logo">
                <a href="#" style="text-decoration-line: none;color: #003459;">
                PET CARE HUB
                </a>
            </div>
        </div>
    </div>
    <div class="orders">
        <div id="detail-order">
            <form action="{{URL::to('/buy-now')}}" method="POST" id="customer-form">
                {{csrf_field()}}
                {{ method_field('POST')}}

                <div id="customer">
                    <h2 class="title">Vận chuyển</h2>
                    <p>Họ và Tên*</p>
                    <input type="text" id="name" name="name" placeholder="Nguyễn Văn A">
                    <div id="error-name">

                    </div>
                    <p>Điện thoại*</p>
                    <input type="tel" id="tel" name="phone" placeholder="098xxxxxxx">
                    <div id="error-tel">

                    </div>
                    <p>Email*</p>
                    <input type="email" id="email" name ="email" placeholder="abc@gmail.com">
                    <div id="error-mail">

                    </div> 
                    <br>
                    <div>
                        <label for="note" class="col-form-label">Ghi chú</label>
                        <textarea type="text" class="form-control" id="note" name="note"></textarea>
                    </div>
                </div>
                {{-- <div id="pay" onclick="choose(this)">
                    <div class="options pay">
                        <input type="radio" id="address" name="locate" value="home">
                        <p>Giao đến địa chỉ của bạn</p>
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="options pay">
                        <input type="radio" id="store" name="locate" value="store">
                        <p>Nhận tại cửa hàng</p>
                        <i class="bi bi-shop"></i>
                        <div id="bank">

                        </div>
                    </div>

                </div> --}}
                <div id="location" onclick="choose(this)">
                    <div class="options ship">
                        <input type="radio" id="address" name="loca" value="delivery">
                        <label for="address">Giao đến địa chỉ của bạn</label>
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="options ship">
                        <input type="radio" id="store" name="loca" value="pickup">
                        <label for="store">Nhận tại cửa hàng</label>
                        <i class="bi bi-shop"></i>
                    </div>
                </div>
                <div id="infor-customer">
                </div>
                <div id="error-message1">
                </div>
                <h2 class="title" style="margin-top: 2vw;">Thanh toán</h2>
                <p id="note">Toàn bộ các giao dịch được bảo mật và mã
                    hóa.</p>
                <div id="pay" onclick="choose(this)">
                    <div class="options pay">
                        <input type="radio" id="cash" name="method_payment" value="Tiền mặt">
                        <p>Thanh toán khi nhận hàng</p>
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <div class="options pay">
                        <input type="radio" id="banking" name="method_payment" value="Thanh toán online">
                        <p>Thanh toán qua ngân hàng</p>
                        <i class="bi bi-bank"></i>
                        <div id="bank">

                        </div>
                    </div>

                </div>
                <div id="error-message">

                </div>
                {{-- <button type="submit" name="complete" id="complete" value="Thanh toán">Thanh toán</button>
            </form> --}}
            </div>
            <div id="products">
                <h2 class="title">Sản phẩm</h2>
                @foreach( $cartItems as $index => $item)
                <div class="product" style="display: flex;">
                    <div style="width: 6vw;">
                        <img src="public/storage/products/{{$item->image}}" alt="" class="img-product">
                    </div>
                    <div class="detail-product">
                        <div class="text-truncate-container">
                            <p>{{$item->name}}</p>
                        </div>
                        <div style="display: flex;">
                            <p>Phân loại:</p>
                            <p class="classify" style="margin-left:5px ;">{{$item->size}}</p>
                        </div>
                        <div style="display: flex;">
                            <p>SL: </p>
                            <p class="quantity" style="margin-left:5px ;">{{$item->num}}</p>
                        </div>
                    </div>
                    <div class="pro-price">
                        {{$item->price * $item->num}}
                    </div>
                </div>
                <hr style="border: 1px solid #656565;width: 90%;margin: auto;margin-bottom: 1vw;">
                <input type="hidden" name="products[{{ $index }}][id]" value="{{ $item->id }}">
                <input type="hidden" name="products[{{ $index }}][product_id]" value="{{ $item->product_id }}">
                <input type="hidden" name="products[{{ $index }}][name]" value="{{ $item->name }}">
                <input type="hidden" name="products[{{ $index }}][size]" value="{{ $item->size }}">
                <input type="hidden" name="products[{{ $index }}][num]" value="{{ $item->num }}">
                <input type="hidden" name="products[{{ $index }}][price]" value="{{ $item->price * $item->num}}">
                @endforeach
                <div id="detail-pay">
                    <div style="display: flex;">
                        <h5 style="width: 75%;">Số lượng</h5>
                        <h5 id="quantity" style="text-align: end;width:25% ;"></h5>
                    </div>
                    <div style="display: flex;">
                        <h5 style="width: 75%;">Phí vận chuyển</h5>
                        <h5 id="transport-fee" style="text-align: end;width:25% ;">30000</h5>
                    </div>
                    <div style="display: flex;">
                        <h3 style="width: 75%;">Tổng tiền</h3>
                        <h3 id="total-products" style="text-align: end;width:25%  ;"></h3>
                    </div>
                    <input type="hidden" name="total_price" value="">
                    <button type="submit" name="complete" id="complete" value="Thanh toán">Thanh toán</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
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
                document.getElementById('infor-customer').innerHTML = `
                    <p>Địa chỉ giao hàng*</p>
                    <select class="form-select form-select-sm mb-3" id="city" name="city" aria-label=".form-select-sm">
                        <option value="" selected>Chọn tỉnh thành</option>
                    </select>
                    <select class="form-select form-select-sm mb-3" id="district" name="district" aria-label=".form-select-sm">
                        <option value="" selected>Chọn quận huyện</option>
                    </select>
                    <select class="form-select form-select-sm" id="ward" name="ward" aria-label=".form-select-sm">
                        <option value="" selected>Chọn phường xã</option>
                    </select>
                    <p>Chi tiết*</p>
                    <input type="text" id="address" name="addressDetail" placeholder="Số 34, Tân Lập">
                    <div id="error-message2">
                    </div>`
                getAPI();
                getCheck();
            }
            else if (radio.id === 'store' && radio.checked) {
                document.getElementById('infor-customer').innerHTML = `<h2 class='title'>Địa điểm nhận hàng</h2>
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
    document.getElementById('complete').addEventListener('click', function (event) {
        event.preventDefault();

        var name = document.getElementById('name');
        var tel = document.getElementById('tel');
        var email = document.getElementById('email');

        if (name.value === '') {
            document.getElementById('error-name').innerHTML = '*Không được để trống tên';
        } else {
            document.getElementById('error-name').innerHTML = '';
        }
        if (tel.value === '') {
            document.getElementById('error-tel').innerHTML = '*Không được để trống số điện thoại';
        } else {
            document.getElementById('error-tel').innerHTML = '';
        }
        if (email.value === '') {
            document.getElementById('error-mail').innerHTML = '*Không được để trống email';
        } else {
            document.getElementById('error-mail').innerHTML = '';
        }

        if (document.getElementById('error-mail').innerHTML === '') {
        document.getElementById('customer-form').submit();
        }
    });
    function getAPI() {
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Name);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Name === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Name);
                    }
                }
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Name === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Name);
                    }
                }
            };
        }
    }

    document.getElementById('complete').addEventListener('click', function (event) {
    event.preventDefault();

    var city = document.getElementById('city').value;
    var district = document.getElementById('district').value;
    var ward = document.getElementById('ward').value;
    var address = document.getElementById('address').value;

    var errorMessage2 = document.getElementById('error-message2');
    errorMessage2.innerHTML = ''; // Xóa bất kỳ thông báo lỗi cũ nào trước đó

    // Kiểm tra xem các trường có rỗng không và hiển thị thông báo lỗi tương ứng
    if (city === '') {
        errorMessage2.innerHTML += '*Tỉnh/Thành phố không thể trống<br>';
    }
    if (district === '') {
        errorMessage2.innerHTML += '*Quận/Huyện không thể trống<br>';
    }
    if (ward === '') {
        errorMessage2.innerHTML += '*Phường/Xã không thể trống<br>';
    }
    if (address === '') {
        errorMessage2.innerHTML += '*Địa chỉ chi tiết không thể trống<br>';
    }

    // Nếu không có lỗi, gửi form
    if (errorMessage2.innerHTML === '') {
        document.getElementById('customer-form').submit();
    }
});

    document.addEventListener('DOMContentLoaded', function() {

        //Số lượng
        var selectedCount = {{ $cartItems->count() }};
        document.getElementById('quantity').innerText = selectedCount;

        // Tính tổng tiền của tất cả các sản phẩm
        var priceElements = document.querySelectorAll('.pro-price');
        var totalProductPrice = 0;
        priceElements.forEach(function(element) {
            totalProductPrice += parseInt(element.textContent);
        });

        // Lấy phí vận chuyển
        var transportFee = parseInt(document.getElementById('transport-fee').textContent);

        // Tính tổng tiền cuối cùng
        var totalPrice = totalProductPrice + transportFee;
        document.getElementById('total-products').innerText = (totalPrice*1000).toLocaleString('vi-VN');
        document.querySelector('input[name="total_price"]').value = totalPrice;

    });
</script>
<?php 
// include("css/styleOrder.php"); 
?>

</html>