<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="javascript/jsHome.php">
    <link rel="stylesheet" href="{{asset('public/frontend/css/datlich.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/styleHome.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lịch</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.css">
    
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
    <br><br>
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

    function sendDataToBackend(action, data) {
  fetch('/path/to/your/backend/script.php', { // Update with your server-side script
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ action: action, data: data })
  })
  .then(response => response.json())
  .then(result => {
    console.log(result);
    if (result.success) {
      // Update table rows with new data from the server
      updateTableRows(result.data); 

      // Redirect to datlich.php (or your desired page)
      if (action === 'add') {
        window.location.href = 'datlich.blade.php'; // Thay 'datlich.php' bằng đường dẫn thực tế
      }
    }
  })
  .catch(error => {
    // Handle errors
    console.error('Error:', error);
  });
}


  // ... (Your existing formatPrice, handleBookNow, and updateTableRows functions)

  // Get elements
  const formAdd = document.querySelector('.form-add');
  const bookNowButton = document.querySelector('input[name="datlich"]');
  const myTable = document.getElementById('myTable');
  const addModalEl = document.getElementById('addModal');
  const exampleModalEl = document.getElementById('exampleModal');
  const addModal = new bootstrap.Modal(addModalEl);
  const exampleModal = new bootstrap.Modal(exampleModalEl);
  const btnAdd = document.getElementById('btnAdd');
  const btnSave = document.getElementById('btnSave');

  // Event listeners
  formAdd.addEventListener('click', handleAddModal);
  bookNowButton.addEventListener('click', handleBookNow);
  myTable.addEventListener('click', handleTableActions);
  btnAdd.addEventListener('click', handleAdd); // Add event listener for btnAdd
  btnSave.addEventListener('click', handleSave); // Add event listener for btnSave
  

  // ... (handleTableActions function - same as before)

  function handleAdd() {
    // Collect data from the addModal form
    const formData = {
      // ... (Lấy dữ liệu từ các trường input của addModal)
    };

    sendDataToBackend('add', formData);

    // Close the modal after adding
    addModal.hide();
  }

  function handleSave() {
    // Collect data from the editModal form
    const formData = {
      // ... (Lấy dữ liệu từ các trường input của exampleModal)
    };

    sendDataToBackend('edit', formData);

    // Close the modal after saving
    exampleModal.hide();
  }

  function sendDataToBackend(action, data) {
    fetch('/path/to/your/backend/script.php', { 
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ action: action, data: data })
    })
    .then(response => response.json())
    .then(result => {
      if (result.success) {
        updateTableRows(result.data); 
      } else {
        alert('Đã xảy ra lỗi: ' + result.message);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Đã xảy ra lỗi khi kết nối đến máy chủ.');
    });
  }


</script>

</html>
<?php
// Database connection...

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requestData = json_decode(file_get_contents('php://input'), true);
    $action = $requestData['action'];
    $data = $requestData['data'];

    if ($action === 'add') {
        // Insert data into the database
        // ... 
        $response = ['success' => true, 'data' => $newBookingData];
    }
    elseif ($action === 'edit') {
        // Update data in the database
        // ...
        $response = ['success' => true, 'data' => $updatedBookingData];
    } elseif ($action === 'delete') {
        // Process delete data
        // ...
        $response = ['success' => true, 'message' => 'Xóa lịch thành công.'];
    } elseif ($action === 'getBookingData') {
        // Get data booking by ID
        // ...
        $response = ['success' => true, 'data' => $bookingData];
    }
    
    else {
        $response = ['success' => false, 'message' => 'Invalid action'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>