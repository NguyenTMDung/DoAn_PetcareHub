@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/styleOrderadmin.css')}}">
<div id="container" >
    <div >
       
    </div>
    
    <table id="myTable">
        <thead>
            <tr class="head">
                <th style="width:10%;">Mã đơn hàng</th>
                <th style="width:10%;">Mã khách hàng</th>
                <th style="width:10%;">Ngày đặt </th>
                <th style="width:10%;">Tổng tiền</th>
                <th style="width:20%;">Cập nhật</th>
                <th style="width:20%;">Trạng thái</th>
                <th style="width:20%;">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($emps as $empdata)
                    <tr>
                        <td style="width:10%;">{{$empdata->id}}</td>
                        <td style="width:12%;">{{$empdata->user_id}}</td>
                        <td style="width:12%;">{{$empdata->created_at}}</td>
                        <td style="width:12%;">{{$empdata->total}}</td>
                        <td style="width:18%;"class="update">
                            </td>
                            <td style="width:15%;">{{$empdata->status}}</td>
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
            </tr>
        </tbody>
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

<script type="text/javascript">

    $(document).ready(function(){
        var table = $('#myTable').DataTable();

        table.on('click', '.edit', function(){
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            var orderId = data[0];
            console.log(orderId);
            $.ajax({
            url: '/order-detail/' + orderId,
            method: 'GET',
            success: function(response) {
             console.log("oke");
            }
        });
            $('#detail-order').modal('show');
        });
        try {
       
        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
           console.log('1');
            $('#deleteForm').attr('action','/DoAn_PetcareHub/quan-ly-don-hang/' + data[0]);
            console.log('2');
            $('#deleteModal').modal('show');
            console.log('3');
        });
    } catch (error) {
        console.error("An error occurred:", error);
    }
    })

</script>
<div class="modal fade" id="detail-order" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Thông tin đơn hàng</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
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
    
@endsection