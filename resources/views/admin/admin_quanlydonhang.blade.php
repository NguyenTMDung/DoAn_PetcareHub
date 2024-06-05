@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleOrderadmin.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
    <table id="myTable">
        <thead>
            <tr class="head">
                <th style="width:10%;">Mã đơn hàng</th>
                <th style="width:10%;">Mã khách hàng</th>
                <th style="width:10%;">Ngày đặt </th>
                <th style="width:10%;">Tổng tiền</th>
                <th style="width:18%;">Cập nhật</th>
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
            $('#detail-product tbody').empty();
            
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            var orderId = data[0];
            console.log(orderId);
            $.ajax({
            url: '/DoAn_PetcareHub/chi-tiet-don-hang/' + orderId,
             method: 'GET',
            success: function(response) {
                console.log(response);
                $('#total-pay').text(response[0].total);
                 $('#fee-transfer').text(response[0].ship_cost);
                $('#total').text(response[0].total - response[0].ship_cost);
                $('#detail-orderid').text(response[0].id);
                $('#name-customer').text(response[0].kh_name);
                $('#detail-date').text(response[0].created_at);
                $('#status-order').text(response[0].status);
                $('#totalpay').text(response[0].total);


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

                // Thêm các cột vào hàng
                newRow.append('<td><p class="name-product">' + item.product_name + '</p></td>');
                newRow.append('<td><p class="classify">' + item.typeproduct_name + '</p></td>'); // Sử dụng product_id như một ví dụ
                newRow.append('<td><p class="price">' + item.price + '</p></td>'); // Giả sử item có thuộc tính price
                newRow.append('<td><p class="quantity-product">' + item.num + '</p></td>');
                newRow.append('<td><p class="total-price">' + (item.price * item.num) + '</p></td>'); // Giả sử item có thuộc tính price

                // Thêm hàng mới vào bảng
                $('#detail-product tbody').append(newRow);
   
                // ...
            });
            $('#quantity').text(inum);
            
        
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
        });
        
</script>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa đơn hàng</h5>
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
<div class="modal fade" id="detail-order" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Thông tin đơn hàng</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="detail">
                                <div id="detail-infor">
                                    <ul>
                                        <li>
                                            <h5>Mã đơn hàng: </h5>
                                            <p id="detail-orderid"></p>
                                        </li>
                                        <li>
                                            <h5>Tên khách hàng: </h5>
                                            <p id="name-customer"></p>
                                        </li>
                                        <li>
                                            <h5>Ngày đặt: </h5>
                                            <p id="detail-date"></p>
                                        </li>
                                        <li>
                                            <h5>Số lượng: </h5>
                                            <p id="quantity"></p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <h5>Tổng tiền: </h5>
                                            <p id ="totalpay" class="total-pay"></p>
                                        </li>
                                        <li>
                                            <h5>Trạng thái thanh toán: </h5>
                                            <p id="status-pay"></p>
                                        </li>
                                        <li>
                                            <h5>Trạng thái đơn hàng: </h5>
                                            <p id="status-order"></p>
                                        </li>
                                    </ul>
                                </div>
                                <hr style="border:1px solid rgb(64, 64, 64);">
                                <h4 id="title-table">Chi tiết đơn hàng</h4>
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
                                            <th style="width: 10%;">
                                                <p>Số lượng</p>
                                            </th>
                                            <th style="width: 15%;">
                                                <p>Tổng tiền </p>
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
                                                        <h3 id="total-pay"></h3>
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