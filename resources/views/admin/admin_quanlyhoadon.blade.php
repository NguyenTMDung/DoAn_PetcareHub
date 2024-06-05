@extends('admin_layout')
@section('admin_content')
<<<<<<< HEAD
@if (session('dat_lich'))
    <h2>Thông tin đặt lịch mới:</h2>
    <p>Họ tên: {{ session('dat_lich.ho_ten') }}</p>
    <p>Email: {{ session('dat_lich.email') }}</p>
    <p>Ngày đặt: {{ session('dat_lich.ngay_dat') }}</p>
    <p>Dịch vụ: {{ session('dat_lich.dich_vu') }}</p>
@endif

<link rel="stylesheet" href="{{asset('public/frontend/css/styleOrderadmin.css')}}">
=======
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
>>>>>>> a539cf27428891c05c00f97128a3a80c820d0aa6
<div id="head-container">
<<<<<<< HEAD
        <table id="myTable">
            <thead>
                <tr class="head">
                    <th style="width:20%;">Số hóa đơn</th>
                    <th style="width:20%;">Mã khách hàng</th>
                    <th style="width:20%;">Ngày hóa đơn</th>
                    <th style="width:20%;">Tổng tiền</th>
                    <th style="width:10%;">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emps as $empdata)
                <tr>
                    <td style="width:20%;">{{$empdata->id}}</td>
                    <td style="width:20%;">{{$empdata->user_id}}</td>
                    <td style="width:20%;">{{$empdata->updated_at}}</td>
                    <td style="width:20%;">{{$empdata->total}}</td>
                    <td style="width:10%;">
                        <button type="button" class="btn btn-primary edit" data-bs-toggle="modal"
                            data-bs-target="#editModal" style="background-color:green">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger delete" data-bs-toggle="modal"
                        data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
                {{-- <tr>
                    <td class="id-bill">HD03</td>
                    <td class="id-customer">KH03</td>
                    <td class="date-bill">22/12/2023 11:30</td>
                    <td class="total-pay">1000000</td>
                    <td class="update">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#detailBill" style="background-color:green;height: fit-content;">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-block btn-danger" style="height: fit-content;"><i
                                class="bi bi-trash"></i></button>
                    </td>
                </tr> --}}
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<p class="text-alert" style="color:green; text-align:right; margin-right: 2vw"><i>'. $message.'</i></p>';
                    Session::put('message',null);
                }
            ?>
            </table>
            <div class="modal fade" id="detailBill" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Thông tin hóa đơn</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="detail-infor">
                                <ul>
                                    <li>
                                        <h5>Tên khách hàng: </h5>
                                        <p id="deatil-customerName">Nguyễn Dương Tùng</p>
                                    </li>
                                    <li>
                                        <h5>Địa chỉ: </h5>
                                        <p id="address">
                                            Số 6, Tân Lập, Đông Hòa, Dĩ An, Bình Dương</p>
                                    </li>
                                    <li>
                                        <h5>Ngày hóa đơn: </h5>
                                        <p id="date-bill">22/02/2024</p>
                                    </li>
                                </ul>
                            </div>
                            <hr style="border:1px solid rgb(64, 64, 64);">
                            <h4 id="title-table">Chi tiết hóa đơn</h4>
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
                                    <th style="width: 13%;">
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
            
    <scrip>
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
=======
                <div id="arrange">
                    <label for="arrange-price">Sắp xếp theo tổng tiền: </label>
                    <select id="arrange-price">
                        <option value="1">Mặc định</option>
                        <option value="2">Tăng dần</option>
                        <option value="3">Giảm dần</option>
                    </select>
                </div>
            </div>
            <table id="myTable">
                <thead>
                    <tr class="head">
                        <th style="width:20%;">Số hóa đơn</th>
                        <th style="width:20%;">Mã khách hàng</th>
                        <th style="width:20%;">Ngày hóa đơn</th>
                        <th style="width:20%;">Tổng tiền</th>
                        <th style="width:10%;">Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emps as $empdata)
                    <tr>
                        <td style="width:20%;">{{$empdata->id}}</td>
                        <td style="width:20%;">{{$empdata->user_id}}</td>
                        <td style="width:20%;">{{$empdata->updated_at}}</td>
                        <td style="width:20%;">{{$empdata->total}}</td>
                        <td style="width:10%;">
                            <button type="button" class="btn btn-primary edit" data-bs-toggle="modal"
                                data-bs-target="#editModal" style="background-color:green">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-block btn-danger delete" data-bs-toggle="modal"
                            data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
>>>>>>> task1

            </table>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<p class="text-alert" style="color:green; text-align:right; margin-right: 2vw"><i>'. $message.'</i></p>';
                Session::put('message',null);
            }
        ?>
 <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function(){
    try {
        var table = $('#myTable').DataTable();
        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
           console.log('1');
            $('#deleteForm').attr('action','/DoAn_PetcareHub/quan-ly-hoa-don/' + data[0]);
            console.log('2');
            $('#deleteModal').modal('show');
            console.log('3');
        });
    } catch (error) {
        console.error("An error occurred:", error);
    }
    table.on('click', '.edit', function(){
            $('#detail-product tbody').empty();
            console.log('Table body emptied');
            
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            var orderId = data[0];
            console.log(orderId);
            $.ajax({
            url: '/DoAn_PetcareHub/chi-tiet-hoa-don/' + orderId,
             method: 'GET',
            success: function(response) {
                console.log('AJAX call successful');
                console.log(response);
                $('#totalpay').text(response[0].total);
                 $('#fee-transfer').text(response[0].ship_cost);
                $('#total').text(response[0].total - response[0].ship_cost);
               
                $('#deatil-customerName').text(response[0].kh_name);
                $('#date-bill').text(response[0].updated_at);
              
                $('#address').text(response[0].address);
             
             var inum=0;
        
             response.forEach(function(item) {
                console.log('Order Total: ' + item.total);
                console.log('Shipping Cost: ' + item.ship_cost);
                console.log('Product Name: ' + item.product_name);
                console.log('Product Price: ' + item.price);
                console.log('Type Product Name: ' + item.typeproduct_name);
                console.log('Number of Items: ' + item.num);
                inum += item.num;
               
            
                var newRow = $('<tr>');
                    console.log('new row')


                // Thêm các cột vào hàng
                newRow.append('<td><p class="name-product">' + item.product_name + '</p></td>');
                newRow.append('<td><p class="classify">' + item.typeproduct_name + '</p></td>'); // Sử dụng product_id như một ví dụ
                newRow.append('<td><p class="price">' + item.price + '</p></td>'); // Giả sử item có thuộc tính price
                newRow.append('<td><p class="quantity-product">' + item.num + '</p></td>');
                newRow.append('<td><p class="total-price">' + (item.price * item.num) + '</p></td>'); // Giả sử item có thuộc tính price
              
                // Thêm hàng mới vào bảng
                $('#detail-product tbody').append(newRow);
                console.log('append new row')
                // ...
            });
            // $('#quantity').text(inum);
            
        
    }
});
$('#detailBill').modal('show');
});
    $('#arrange-price').change(function() {
        var selectedOption = $(this).val();
        if (selectedOption == '2') {
            // Sắp xếp tăng dần theo cột "Tổng tiền" (cột thứ 4, đếm từ 0)
            table.order([3, 'asc']).draw();
        } else if (selectedOption == '3') {
            // Sắp xếp giảm dần theo cột "Tổng tiền"
            table.order([3, 'desc']).draw();
        } else {
            // Sắp xếp mặc định
            table.order([]).draw();
        }
    });
});
</script>

<div class="modal fade" id="detailBill" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h4>Thông tin hóa đơn</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-content">
            <div class="modal-body">
                <div id="detail-infor">
                    <ul>
                        <li>
                            <h5>Tên khách hàng: </h5>
                            <p id="deatil-customerName"></p>
                        </li>
                        <li>
                            <h5>Địa chỉ: </h5>
                            <p id="address">
                               </p>
                        </li>
                        <li>
                            <h5>Ngày hóa đơn: </h5>
                            <p id="date-bill"></p>
                        </li>
                    </ul>
                </div>
                <hr style="border:1px solid rgb(64, 64, 64);">
                <h4 id="title-table">Chi tiết hóa đơn</h4>
                <table id="detail-product">
                   <thead>
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
                            <th style="width: 13%;">
                                <p>Số lượng</p>
                            </th>
                            <th style="width: 15%;">
                                <p>Tổng tiền</p>
                            </th>
                        </tr>
                   </thead>
                   <tbody>
                    
                   </tbody>
                   
                </table>
              <tfoot>
                    <tr>
                        <td colspan="5">
                            <table id="style-table" style="width: 50%;float: right; border: none;">
                                <tr>
                                    <td>
                                        <p>Tổng cộng</p>
                                    </td>
                                    <td>
                                        <p id="total"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Phí vận chuyển</p>
                                    </td>
                                    <td>
                                        <p id="fee-transfer"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Tổng</h3>
                                    </td>
                                    <td>
                                        <h3 id="totalpay" class="total-pay"></h3>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
              </tfoot>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
