@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
<div id="container" >
    <div >
        <!--------------------------------------------------------------------------->
        {{-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xem đơn hàng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                <form action="{{URL::to('/quan-ly-nhan-vien')}}" method="POST" id="editForm">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Tên khách hàng</label>
                            <input type="text" class="form-control" id="nameEdit"
                                placeholder="Nhập tên nhân viên" name="name"></input>
                        </div>
                        <div class="mb-3">
                            <label for="email-text" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="emailEdit"
                                placeholder="Nhập địa chỉ email sinh viên" name="email"></input>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phoneEdit"
                                placeholder="Nhập số điện thoại" name="phone"></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div> --}}
        <!------------------------------------------------------------------------------->
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
        <tfoot>
            <tr>
                <th style="width:10%;">Mã đơn hàng</th>
                <th style="width:10%;">Mã khách hàng</th>
                <th style="width:10%;">Ngày đặt </th>
                <th style="width:10%;">Tổng tiền</th>
                <th style="width:20%;">Cập nhật</th>
                <th style="width:20%;">Trạng thái</th>
                <th style="width:20%;">Chi tiết</th>
            </tr>
        </thfoot>
        <tbody>
            <tr>
                <td style="width:10%;">DH01</td>
                <td style="width:10%;">KH01</td>
                <td style="width:10%;">11/02/2024</td>
                <td style="width:10%;">1000000</td>
                <td style="width:20%;">
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
                <td style="width:20%;">Chờ xác nhận</td>
                <td style="width:20%;">
                    <button type="button" class="btn btn-primary edit" data-bs-toggle="modal"
                        data-bs-target="#editModal" style="background-color:green">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-block btn-danger delete" data-bs-toggle="modal"
                    data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td style="width:10%;">DH01</td>
                <td style="width:10%;">KH01</td>
                <td style="width:10%;">11/02/2024</td>
                <td style="width:10%;">1000000</td>
                <td style="width:20%;">
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
                <td style="width:20%;">Chờ xác nhận</td>
                <td style="width:20%;">
                    <button type="button" class="btn btn-primary edit" data-bs-toggle="modal"
                        data-bs-target="#editModal" style="background-color:green">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-block btn-danger delete" data-bs-toggle="modal"
                    data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

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
            console.log(data);
            $('#nameEdit').val(data[2]);
            $('#emailEdit').val(data[3]);
            $('#phoneEdit').val(data[4]);

            $('#editForm').attr('action','/DoAn_PetcareHub/quan-ly-khach-hang/' + data[0]);
            $('#editModal').modal('show');
        });
        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);
           
            $('#deleteForm').attr('action','/DoAn_PetcareHub/quan-ly-khach-hang/' + data[0]);
            $('#deleteModal').modal('show');
        });
    })

</script>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa nhân viên</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
            <form action="{{URL::to('/quan-ly-khach-hang')}}" method="POST" id="deleteForm">
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