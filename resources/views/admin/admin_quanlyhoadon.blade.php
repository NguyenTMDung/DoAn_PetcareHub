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


@endsection
