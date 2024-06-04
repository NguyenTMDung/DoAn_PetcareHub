@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('public/frontend/css/datlich.css')}}">

<div class="container">
        <div class="form-container">
            <div class="form-header">
                <h3>THÔNG TIN CÁ NHÂN</h3>
            </div>
            <div class="form-row">
                <div class="form-column">
                    <div class="form-group">
                        <p><b>Họ Tên Khách Hàng:</b></p>
                        <input type="text" name="fullname" placeholder="Vui lòng nhập đầy đủ Họ và Tên">
                    </div>
                    <div class="form-group">
                        <p><b>Email:</b></p>
                        <input type="email" name="email" placeholder="Vui lòng nhập địa chỉ email">
                    </div>
                    <div class="form-group">
                        <p><b>Địa chỉ:</b></p>
                        <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ">
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-group">
                        <p><b>Ngày sinh:</b></p>
                        <input type="date" name="birthdate">
                    </div>
                    <div class="form-group">
                        <p><b>Email xác nhận:</b></p>
                        <input type="email" name="confirm_email" placeholder="Vui lòng nhập lại địa chỉ email">
                    </div>
                    <div class="form-group">
                        <p><b>Số điện thoại:</b></p>
                        <input type="tel" name="phone" placeholder="Vui lòng nhập số điện thoại">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container">
            <div class="form-head">
                <h3>THÔNG TIN ĐẶT LỊCH</h3>
            </div>
            <table id="myTable">
                <tr class="head">
                    <th style="width:10%">&nbsp;</th>
                    <th style="width:18%;">Mã đặt lịch</th>
                    <th style="width:22%;">Số lượng dịch vụ</th>
                    <th style="width:23%;">Thành tiền</th>
                    <th style="width:17%">&nbsp;</th>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ma" value="A0001"></td>
                    <td>A0001</td>
                    <td>2</td>
                    <td class="into-money">300000</td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-button">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="form-button"><i class="bi bi-dash-circle"></i></button>
                    </td>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 >Thay đổi thông tin</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body1">
                                    <div id="head">
                                        <div class="pet">
                                            <p><strong>Thú cưng</strong></p>
                                            <input type="radio" id="pet1" name="group-radio" /><label
                                                for="pet1">&nbsp;Chó</label>&nbsp;
                                            <input type="radio" id="pet" name="group-radio" /><label
                                                for="pet2">&nbsp;Mèo</label><br>
                                        </div>
                                        <div>
                                            <p><strong>Ngày đặt lịch</strong></p>
                                            <div class="search-date">
                                                <input type="date" class="sbox" >
                                            </div>
                                        </div>
                                        <div class="time-slot">
                                            <p><strong>Chọn khung giờ</strong></p>
                                            <select name="time" id="time">
                                                <option value="ca1">Ca1: 7h - 8h30</option>
                                                <option value="ca2">Ca2: 8h30 -10h</option>
                                                <option value="ca3">Ca3: 10h - 11h30</option>
                                                <option value="ca4">Ca4: 1h - 2h30</option>
                                                <option value="ca5">Ca5: 2h30 - 4h</option>
                                                <option value="ca6">Ca6: 4h - 5h30</option>
                                                <option value="ca7">Ca7: 5h30 - 7h</option>
                                            </select>
                                            <p class="pls">*Vui lòng đến đúng giờ</p>
                                        </div>
                                    </div>
                                    <h5 ><strong>Chọn dịch vụ :</strong></h5>
                                    <div id="body">
                                        <div class="spa">
                                            <p><strong>Spa :</strong></p>
                                            <form>
                                                <input type="checkbox" name="spa1" value="Spa tắm, vệ sinh">Spa tắm, vệ
                                                sinh<br>
                                                <input type="checkbox" name="spa2" value="Spa, cắt tỉa trọn gói">Spa,
                                                cắt tỉa trọn gói<br>
                                                <input type="checkbox" name="spa3" value="Cắt tỉa, nhuộm lông">Cắt tỉa,
                                                nhuộm lông<br>
                                                <input type="checkbox" name="spa4" value="Cạo lông toàn thân">Cạo lông
                                                toàn thân<br>
                                            </form>
                                        </div>
                                        <div class="ksan">
                                            <p><strong>Khách sạn :</strong></p>
                                            <form>
                                                <input type="radio" name="group-hotel" id="hotel1"><label
                                                    for="hotel1">Khách sạn bình thường</label><br>
                                                <input type="radio" name="group-hotel" id="hotel2"><label
                                                    for="hotel2">Khách sạn phòng VIP A</label><br>
                                                <input type="radio" name="group-hotel" id="hotel3"><label
                                                    for="hotel3">Khách sạn phòng VIP B</label><br>
                                                <input type="radio" name="group-hotel" id="hotel4"><label
                                                    for="hotel4">Khách sạn phòng VIP C</label><br>
                                            </form>
                                        </div>
                                    </div>
                                    <h5 ><strong>Kích thước thú cưng:</strong></h5>
                                    <div id="foot">
                                        <div class="spa">
                                            <p><strong>Spa :</strong></p>
                                            <select name="size" id="size" >
                                                <option value="size1">Dưới 2kg</option>
                                                <option value="size2">Dưới 5kg</option>
                                                <option value="size3">Dưới 10kg</option>
                                                <option value="size4">Dưới 20kg</option>
                                                <option value="size5">Trên 20kg</option>
                                            </select>
                                        </div>
                                        <div class="hotel" >
                                            <div class="hotel-sz">
                                                <p><strong>Khách sạn :</strong></p>
                                                <select name="sz" id="sz" >
                                                    <option value="sz1">Dưới 10kg</option>
                                                    <option value="sz2">Dưới 20kg</option>
                                                    <option value="sz3">Dưới 40kg</option>
                                                </select>
                                            </div>
                                            <div>
                                                <p><strong>Chọn số ngày :</strong></p>
                                                <input  type="number" name="quantity" min="1" placeholder="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <button type="button" class="btn btn-primary">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ma" value="A0001"></td>
                    <td>A0002</td>
                    <td>1</td>
                    <td class="into-money">150000</td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-button">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="form-button"><i class="bi bi-dash-circle"></i></button>
                    </td>
                </tr>
            </table>
            <hr id="dash">
            <div class="calender">
                <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="form-add">
                    <i class="bi bi-plus-circle"></i> Thêm lịch
                </button>
                <hr id="dash1">
                <table class="board">
                    <tr>
                        <td>
                            <h5>Tổng số dịch vụ:</h5>
                        </td>
                        <td>
                            <h5 class="quantity-service">3</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Tổng tiền:</h4>
                        </td>
                        <td>
                            <h4 class="total-price">150000</h4>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Thông tin đặt lịch</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body2">
                            <div id="head">
                                <div class="pet">
                                    <p><strong>Thú cưng</strong></p>
                                    <input type="radio" id="pet1" name="group-radio" /><label
                                        for="pet1">&nbsp;Chó</label>&nbsp;
                                    <input type="radio" id="pet" name="group-radio" /><label
                                        for="pet2">&nbsp;Mèo</label><br>
                                </div>
                                <div>
                                    <p><strong>Ngày đặt lịch</strong></p>
                                    <div class="search-date">
                                        <input type="date" class="sbox" >
                                    </div>
                                </div>
                                <div>
                                    <p><strong>Chọn khung giờ</strong></p>
                                    <select name="time" id="time">
                                        <option value="ca1">Ca1: 7h - 8h30</option>
                                        <option value="ca2">Ca2: 8h30 -10h</option>
                                        <option value="ca3">Ca3: 10h - 11h30</option>
                                        <option value="ca4">Ca4: 1h - 2h30</option>
                                        <option value="ca5">Ca5: 2h30 - 4h</option>
                                        <option value="ca6">Ca6: 4h - 5h30</option>
                                        <option value="ca7">Ca7: 5h30 - 7h</option>
                                    </select>
                                    <p class="pls">*Vui lòng đến đúng giờ</p>
                                </div>
                            </div>
                            <h5 ><strong>Chọn dịch vụ :</strong></h5>
                            <div id="body">
                                <div class="spa">
                                    <p><strong>Spa :</strong></p>
                                    <form>
                                        <input type="checkbox" name="spa1" value="Spa tắm, vệ sinh">Spa tắm, vệ
                                        sinh<br>
                                        <input type="checkbox" name="spa2" value="Spa, cắt tỉa trọn gói">Spa,
                                        cắt tỉa trọn gói<br>
                                        <input type="checkbox" name="spa3" value="Cắt tỉa, nhuộm lông">Cắt tỉa,
                                        nhuộm lông<br>
                                        <input type="checkbox" name="spa4" value="Cạo lông toàn thân">Cạo lông
                                        toàn thân<br>
                                    </form>
                                </div>
                                <div class="ksan">
                                    <p><strong>Khách sạn :</strong></p>
                                    <form>
                                        <input type="radio" name="group-hotel" id="hotel1"><label
                                            for="hotel1">Khách sạn bình thường</label><br>
                                        <input type="radio" name="group-hotel" id="hotel2"><label
                                            for="hotel2">Khách sạn phòng VIP A</label><br>
                                        <input type="radio" name="group-hotel" id="hotel3"><label
                                            for="hotel3">Khách sạn phòng VIP B</label><br>
                                        <input type="radio" name="group-hotel" id="hotel4"><label
                                            for="hotel4">Khách sạn phòng VIP C</label><br>
                                    </form>
                                </div>
                            </div>
                            <h5 ><strong>Kích thước thú cưng:</strong></h5>
                            <div id="foot">
                                <div class ="spa">
                                    <p><strong>Spa :</strong></p>
                                    <select name="size" id="size-spa" >
                                        <option value="size1">Dưới 2kg</option>
                                        <option value="size2">Dưới 5kg</option>
                                        <option value="size3">Dưới 10kg</option>
                                        <option value="size4">Dưới 20kg</option>
                                        <option value="size5">Trên 20kg</option>
                                    </select>
                                </div>
                                <div class="hotel">
                                    <div class="hotel-sz">
                                        <p><strong>Khách sạn :</strong></p>
                                        <select name="sz" id="size-hotel" >
                                            <option value="sz1">Dưới 10kg</option>
                                            <option value="sz2">Dưới 20kg</option>
                                            <option value="sz3">Dưới 40kg</option>
                                        </select>
                                    </div>
                                    <div>
                                        <p><strong>Chọn số ngày :</strong></p>
                                        <input type="number" name="quantity" min="1"
                                            placeholder="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="sub">
            <input type="button" data-bs-toggle="modal" data-bs-target="#bookModal" value="Đặt lịch ngay"
                name="datlich">
        </div>
        <br><br>
        <div id="footer">
            <table>
                <tr>
                    <td id="infor-shop">
                        <h3>Liên hệ</h3>
                        CỬA HÀNG SẢN PHẨM VÀ DỊCH VỤ THÚ CƯNG PET CARE HUB <br>
                        Địa chỉ: 116 Nguyễn Văn Thủ, Phường Đa Kao, Quận 1, Thành phố Hồ Chí Minh, Việt Nam <br>
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
</body>
<script>
    const totalPrice = document.getElementsByClassName('total-price');
    const intoMoney = document.getElementsByClassName('into-money');
    function formatPrice(price) {
        return price.toLocaleString('en-US', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });
    }
    for (let i = 0; i < totalPrice.length; i++) {
        const originalValue = parseInt(totalPrice[i].textContent);
        const price = formatPrice(originalValue);
        totalPrice[i].textContent = price;
    }
    for (let i = 0; i < intoMoney.length; i++) {
        const originalValue = parseInt(intoMoney[i].textContent);
        const price = formatPrice(originalValue);
        intoMoney[i].textContent = price;
    }

</script>
@endsection