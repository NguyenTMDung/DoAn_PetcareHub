@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/frontend/css/quanlynhanvien.css')}}">
<div id="container">
    <div>
        <button class="add-employee-button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class="bi bi-plus-square-fill"></i> Thêm sản phẩm </button>
        <!--------------------------------------------------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{URL::to('/quan-ly-san-pham')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name">Nhập tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name"></input>
                            </div>
                            <div class="mb-3">
                                <label for="pet">Chọn loài</label>
                                <select id="pet" name="pet" placeholder="Chọn loài">
                                    <option value=""></option>
                                    <option value="Chó">Chó</option>
                                    <option value="Mèo">Mèo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="typeProduct_name">Chọn loại sản phẩm</label>
                                <select id="typeProduct_name" name="typeProduct_name" placeholder="Chọn loại sản phẩm">
                                    <option value=""></option>
                                    @foreach($typ as $typdata)
                                    <option value="{{$typdata->name}}">{{$typdata->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="price">Nhập giá</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá"></input>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="col-form-label">Ảnh</label>
                                <input type="file" class="form-control" id="image" name="image"></input>
                            </div>
                            <div class="mb-3">
                                <label for="inventory" class="col-form-label">Số lượng</label>
                                <input type="number" class="form-control" id="inventory" placeholder="Nhập số lượng" name="inventory"></input>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="col-form-label">Mô tả</label>
                                <textarea type="number" class="form-control" id="description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <!--------------------------------------------------------------------------->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                <form action="{{URL::to('/quan-ly-san-pham')}}" method="POST" id="editForm">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Nhập tên sản phẩm</label>
                            <input type="text" class="form-control" id="nameEdit" placeholder="Nhập tên sản phẩm" name ="name"></input>
                        </div>
                        <div class="mb-3">
                            <label for="pet">Chọn loài</label>
                            <select id="petEdit" name="pet" placeholder="Chọn loài">
                                <option value=""></option>
                                <option value="Chó">Chó</option>
                                <option value="Mèo">Mèo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="typeProduct_name">Chọn loại sản phẩm</label>
                            <select id="typeProduct_nameEdit" name="typeProduct_name" placeholder="Chọn loại sản phẩm">
                                <option value=""></option>
                                @foreach($typ as $typdata)
                                <option value="{{$typdata->name}}">{{$typdata->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price">Nhập giá</label>
                            <input type="number" class="form-control" id="priceEdit" name="price" placeholder="Nhập giá"></input>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="col-form-label">Ảnh</label>
                            <input type="file" class="form-control" id="imageEdit" name="image"></input>
                        </div>
                        <div class="mb-3">
                            <label for="inventory" class="col-form-label">Số lượng</label>
                            <input type="number" class="form-control" id="inventoryEdit" placeholder="Nhập số lượng" name="inventory"></input>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="col-form-label">Mô tả</label>
                            <textarea type="number" class="form-control" id="descriptionEdit" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
        <!------------------------------------------------------------------------------->
    </div>
    <br>
    <?php
        $message = Session::get('message');
        if($message){
            echo '<p class="text-alert" style="color:green; text-align:right; margin-right: 2vw"><i>'. $message.'</i></p>';
            Session::put('message',null);
        }
    ?>
    <table id="myTable">
        <thead>
            <tr class="head">
                <th style="width:5%;"> ID</th>
                <th style="width:10%;">Bán chạy</th>
                <th style="width:10%;">Mới</th>
                <th style="width:10%;">Tên sản phẩm</th>
                <th style="width:15%;">Ảnh </th>
                <th style="width:10%;">Số lượng</th>
                <th style="width:10%;">Giá</th>
                <th style="width:10%;">Loại sản phẩm</th>
                <th style="width:20%;">Thao tác</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th style="width:5%;"> ID</th>
                <th style="width:10%;">Bán chạy</th>
                <th style="width:10%;">Sản phẩm mới</th>
                <th style="width:10%;">Tên sản phẩm</th>
                <th style="width:15%;">Ảnh </th>
                <th style="width:10%;">Số lượng</th>
                <th style="width:10%;">Giá</th>
                <th style="width:10%;">Loại sản phẩm</th>
                <th style="width:20%;">Thao tác</th>
            </tr>
        </thfoot>
        <tbody>
            @foreach ($pro as $prodata)
            <tr>
                <td>{{$prodata->id}}</td>
                <td><input type="checkbox" class= "bestseller" name="bestseller" style="width: 100%;" data-id="{{$prodata->id }}"
                    {{$prodata->bestseller == 1 ? 'checked': ''}}>
                </td>
                <td><input type="checkbox" class="new" name="new" style="width: 100%;" data-id="{{$prodata->id }}"
                    {{$prodata->new == 1 ? 'checked': ''}}></td>
                <td>{{$prodata->name}}</td>
                <td ><img src="{{$prodata->image}}" alt="Hình Ảnh"></td>
                <td>{{$prodata->inventory}}</td>
                <td>{{$prodata->price}}</td>
                <td>{{$prodata->typeProduct_name}}</td>
                <td >
                    <button type="button" class="btn btn-primary edit" data-bs-toggle="modal"
                        data-bs-target="#editModal" style="background-color:green" data-id="{{ $prodata->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-block btn-danger delete" data-bs-toggle="modal"
                    data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
        var table = $('#myTable').DataTable();

        $('.edit').on('click', function() {
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: 'san-pham/' + id,
                type: 'GET',
                success: function(data) {
                    $('#nameEdit').val(data.name);
                    $('#petEdit').val(data.pet);
                    $('#typeProduct_nameEdit').val(data.typeProduct_name);
                    $('#priceEdit').val(data.price);
                    $('#inventoryEdit').val(data.inventory);
                    $('#descriptionEdit').val(data.description);

                    $('#editForm').attr('action','/DoAn_PetcareHub/quan-ly-san-pham/' + id);
                    $('#editModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error('Không tải được dữ liệu sản phẩm: ', error);
                }
            });

        });

        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr')
            if($($tr).hasClass('Child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);
           
            $('#deleteForm').attr('action','/DoAn_PetcareHub/quan-ly-san-pham/' + data[0]);
            $('#deleteModal').modal('show');
        });

        $('.new').on('change', function() {
            var isChecked = $(this).prop('checked');
            var id = $(this).data('id'); 

            console.log(id);

            $.ajax({
                url: 'update_new_status/' + id,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { new: isChecked ? 1 : 0 },
                success: function(response) {
                    console.log('Cập nhật thành công!');
                },
                error: function(xhr, status, error) {
                    console.error('Lỗi khi cập nhật trạng thái mới: ', error);
                }
            });
        });
        
        $('.bestseller').on('change', function() {
            var isChecked = $(this).prop('checked');
            var id = $(this).data('id'); 

            console.log(id);

            $.ajax({
                url: 'update_best_seller_status/' + id,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { bestseller: isChecked ? 1 : 0 },
                success: function(response) {
                    console.log('Cập nhật thành công!');
                },
                error: function(xhr, status, error) {
                    console.error('Lỗi khi cập nhật trạng thái mới: ', error);
                }
            });
        });
    });

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
            <form action="{{URL::to('/quan-ly-nhan-vien')}}" method="POST" id="deleteForm">
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