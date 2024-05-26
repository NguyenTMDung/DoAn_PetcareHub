@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
<div id="head-container">
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

        document.getElementById('status').innerHTML = '<h3>Đơn hàng</h3>'
    </script>
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
});
</script>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xóa hóa đơn</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
           <form  method="POST" id="deleteForm">
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
            <div class="modal-body">
                <input type="hidden" name="_method" value="DELETE">
                <p>Bạn chắc chắc chắn muốn xóa?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary">Xóa!</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
