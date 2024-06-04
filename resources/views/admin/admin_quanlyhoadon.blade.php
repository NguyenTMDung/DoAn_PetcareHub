@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
<div id="head-container">
                <div id="arrange">
                    <label for="arrange-price">Sắp xếp theo tổng tiền: </label>
                    <select id="arrange-price">
                        <option value="1">Mặc định</option>
                        <option value="2">Tăng dần</option>
                        <option value="3">Giảm dần</option>
                    </select>
                </div>
                <div class="search">
                    <button class="search-button" style="height: fit-content;"><strong>Search</strong></button>
                    <input type="search" class="search-box" placeholder="Search...">
                </div>
            </div>
            <table id="myTable">
                <tr class="head">
                    <th style="width:10%;"> Mã đơn hàng</th>
                    <th style="width:12%;">Mã khách hàng</th>
                    <th style="width:15%;">Ngày đặt</th>
                    <th style="width:15%;">Tổng tiền</th>
                    <th style="width:18%;">Cập nhật</th>
                    <th style="width:15%;">Trạng thái</th>
                    <th style="width:10%;">Chi tiết</th>
                </tr>
                <tr>
                    <td class="id-order">001</td>
                    <td class="id-customer">Kh01</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button class="confirm">
                            <i class="fas fa-check-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(0, 181, 0);"></i>
                            <p>Xác nhận</p>
                        </button>
                        <button class="cancel">
                            <i class="fas fa-times-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(216, 0, 0);"></i>
                            <p>Hủy</p>
                        </button>
                    </td>
                    <td class="status">Chờ xác nhận</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">002</td>
                    <td class="id-customer">Kh02</td>
                    <td class="date-order">10/04/2024</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">

                    </td>
                    <td class="status">Đã giao</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">003</td>
                    <td class="id-customer">Kh04</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">

                    </td>
                    <td class="status">Chờ giao hàng</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">004</td>
                    <td class="id-customer">Kh04</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button class="confirm">
                            <i class="fas fa-check-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(0, 181, 0);"></i>
                            <p>Xác nhận</p>
                        </button>
                        <button class="cancel">
                            <i class="fas fa-times-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(216, 0, 0);"></i>
                            <p>Hủy</p>
                        </button>
                    </td>
                    <td class="status">Chờ xác nhận</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">005</td>
                    <td class="id-customer">Kh05</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">

                    </td>
                    <td class="status">Đã hủy</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">006</td>
                    <td class="id-customer">Kh06</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">

                    </td>
                    <td class="status">Đã giao</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">007</td>
                    <td class="id-customer">Kh07</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button class="confirm">
                            <i class="fas fa-check-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(0, 181, 0);"></i>
                            <p>Xác nhận</p>
                        </button>
                        <button class="cancel">
                            <i class="fas fa-times-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(216, 0, 0);"></i>
                            <p>Hủy</p>
                        </button>
                    </td>
                    <td class="status">Chờ xác nhận</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">008</td>
                    <td class="id-customer">Kh08</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">

                    </td>
                    <td class="status">Đã giao</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">009</td>
                    <td class="id-customer">Kh09</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">

                    </td>
                    <td class="status">Đã hủy</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">010</td>
                    <td class="id-customer">Kh10</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button class="confirm">
                            <i class="fas fa-check-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(0, 181, 0);"></i>
                            <p>Xác nhận</p>
                        </button>
                        <button class="cancel">
                            <i class="fas fa-times-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(216, 0, 0);"></i>
                            <p>Hủy</p>
                        </button>
                    </td>
                    <td class="status">Chờ xác nhận</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">011</td>
                    <td class="id-customer">Kh11</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button class="confirm">
                            <i class="fas fa-check-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(0, 181, 0);"></i>
                            <p>Xác nhận</p>
                        </button>
                        <button class="cancel">
                            <i class="fas fa-times-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(216, 0, 0);"></i>
                            <p>Hủy</p>
                        </button>
                    </td>
                    <td class="status">Chờ xác nhận</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="id-order">012</td>
                    <td class="id-customer">Kh12</td>
                    <td class="date-order">22/12/2023</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button class="confirm">
                            <i class="fas fa-check-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(0, 181, 0);"></i>
                            <p>Xác nhận</p>
                        </button>
                        <button class="cancel">
                            <i class="fas fa-times-circle"
                                style="margin-top: 5px;margin-right: 0.5vw;color: rgb(216, 0, 0);"></i>
                            <p>Hủy</p>
                        </button>
                    </td>
                    <td class="status">Chờ xác nhận</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detail-order" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            </table>
            <div class="modal fade" id="detail-order" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Thông tin đơn hàng</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="detai">
                                    <div id="detail-infor">
                                        <ul>
                                            <li>
                                                <h5>Mã đơn hàng: </h5>
                                                <p id="deatil-orderid">001</p>
                                            </li>
                                            <li>
                                                <h5>Tên khách hàng: </h5>
                                                <p id="name-customer">Nguyễn Dương Tùng</p>
                                            </li>
                                            <li>
                                                <h5>Ngày đặt: </h5>
                                                <p id="detail-date">22/12/2023</p>
                                            </li>
                                            <li>
                                                <h5>Số lượng: </h5>
                                                <p id="quantity">5</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <h5>Tổng tiền: </h5>
                                                <p class="total-pay">1000000</p>
                                            </li>
                                            <li>
                                                <h5>Trạng thái thanh toán: </h5>
                                                <p id="status-pay">Đã thanh toán</p>
                                            </li>
                                            <li>
                                                <h5>Trạng thái đơn hàng: </h5>
                                                <p id="status-order">Chờ xác nhận</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr style="border:1px solid rgb(64, 64, 64);">
                                    <h4 id="title-table">Chi tiết đơn hàng</h4>
                                    <table id="detail-product">
                                        <tr>
                                            <th style="width: 30%;">
                                                <p>Tên sản phẩm</p>
                                            </th>
                                            <th style="width: 15%;">
                                                <p>Phân loại</p>
                                            </th>
                                            <th style="width: 15%;">
                                                <p>Giá</p>
                                            </th>
                                            <th style="width: 10%;">
                                                <p>Số lượng</p>
                                            </th>
                                            <th style="width: 15%;">
                                                <p>Tổng tiền</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="name-product">Thức ăn cho chó</p>
                                            </td>
                                            <td>
                                                <p class="classify">Vị bò rau củ</p>
                                            </td>
                                            <td>
                                                <p class="price">100000 </p>
                                            </td>
                                            <td>
                                                <p class="quantity-product"> 3 </p>
                                            </td>
                                            <td>
                                                <p class="total-price">300000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="name-product">Pate thùng lớn</p>
                                            </td>
                                            <td>
                                                <p class="classify">Vị bò</p>
                                            </td>
                                            <td>
                                                <p class="price">160000</p>
                                            </td>
                                            <td>
                                                <p class="quantity-product"> 1 </p>
                                            </td>
                                            <td>
                                                <p class="total-price">160000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="name-product">Nhà thú cưng màu xám</p>
                                            </td>
                                            <td>
                                                <p class="classify">Size XXL</p>
                                            </td>
                                            <td>
                                                <p class="price">300000</p>
                                            </td>
                                            <td>
                                                <p class="quantity-product"> 1 </p>
                                            </td>
                                            <td>
                                                <p class="total-price">300000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="name-product">Combo sữa tắm cho chó</p>
                                            </td>
                                            <td>
                                                <p class="classify"></p>
                                            </td>
                                            <td>
                                                <p class="price">200000</p>
                                            </td>
                                            <td>
                                                <p class="quantity-product"> 1 </p>
                                            </td>
                                            <td>
                                                <p class="total-price">200000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <table id="style-table" style="width: 50%;float: right; border: none;">
                                                    <tr>
                                                        <td>
                                                            <p>Tổng cộng</p>
                                                        </td>
                                                        <td>
                                                            <p id="total">960000</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Phí vận chuyển</p>
                                                        </td>
                                                        <td>
                                                            <p id="fee-transfer">40000</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h3>Tổng</h3>
                                                        </td>
                                                        <td>
                                                            <h3 class="total-pay">1000000</h3>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example" id="page">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
    <script>
        const totalPay = document.getElementsByClassName('total-pay');
        const totalPrice = document.getElementsByClassName('total-price');
        const price = document.getElementsByClassName('price');
        function formatPrice(price) {
            return price.toLocaleString('en-US', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0,
            });
        }
        for (let i = 0; i < totalPay.length; i++) {
            const originalValue = parseInt(totalPay[i].textContent);
            const price = formatPrice(originalValue);
            totalPay[i].textContent = price;
        }
        for (let i = 0; i < totalPrice.length; i++) {
            const originalValue = parseInt(totalPrice[i].textContent);
            const price = formatPrice(originalValue);
            totalPrice[i].textContent = price;
        }
        for (let i = 0; i < price.length; i++) {
            const originalValue = parseInt(price[i].textContent);
            const price1 = formatPrice(originalValue);
            price[i].textContent = price1;
        }
        const totalPro = document.getElementById("total");
        const total = totalPro.textContent;
        const formattedNumber = Number(total).toLocaleString();
        totalPro.textContent = formattedNumber;
        //
        const TransFee = document.getElementById("fee-transfer");
        const fee = TransFee.textContent;
        const formatted = Number(fee).toLocaleString();
        TransFee.textContent = formatted;

        document.getElementById('status').innerHTML = '<h3>Đơn hàng</h3>'
    </script>
@endsection
