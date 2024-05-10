@extends('admin_layout')
@section('admin_content')
<div id="container">
    <div style="display: flex; justify-content: space-between; margin-top: 1vw;">
        <button class="add-employee-button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class="bi bi-plus-square-fill"></i> Thêm nhân viên </button></td>
        <!--------------------------------------------------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Tên nhân viên</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Nhập tên nhân viên"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="email-text" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" id="email-text"
                                        placeholder="Nhập địa chỉ email sinh viên"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="datetime" class="col-form-label">Ngày vào làm</label>
                                    <input type="date" class="form-control" id="datetime"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="staff-image" class="col-form-label">Hình ảnh nhân viên</label>
                                    <input type="file" class="form-control" id="staff-image"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Vị trí</label>
                                    <input type="text" class="form-control" id="message-text"
                                        placeholder="Nhập vị trí nhân viên"></input>
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
            <div class="modal fade" id="suaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa nhân viên</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                    <form action="{{URL::to('/them-nhan-vien')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Tên nhân viên</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Nhập tên nhân viên"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="email-text" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" id="email-text"
                                        placeholder="Nhập địa chỉ email sinh viên"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="datetime" class="col-form-label">Ngày vào làm</label>
                                    <input type="date" class="form-control" id="datetime"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="staff-image" class="col-form-label">Hình ảnh nhân viên</label>
                                    <input type="file" class="form-control" id="staff-image"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Vị trí</label>
                                    <input type="text" class="form-control" id="message-text"
                                        placeholder="Nhập vị trí nhân viên"></input>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------->
        <div class="search-container">
            <button class="search-button"><strong>Search</strong></button>
            <input type="search" class="search-box" placeholder="Search...">
        </div>
    </div>
    <table id="myTable">
        <tr class="head">
            <th style="width:10%;">Hồ sơ</th>
            <th style="width:20%;">Tên nhân viên </th>
            <th style="width:20%;">Email</th>
            <th style="width:10%;">Vị trí</th>
            <th style="width:15%;">Ngày vào làm</th>
            <th style="width:25%;">Chi tiết</th>
        </tr>
        <tr>
            <td style="width:10%;"><img src="image_task2/hoso.png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Nguyễn Văn An</td>
            <td style="width:20%;">anngv@gmail.com</td>
            <td style="width:10%;">Quản lý</td>
            <td style="width:15%;">22/04/2024</td>
            <td style="width:25%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#suaModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
            </td>
            </td>
        </tr>
        </tr>
        <tr>
            <td style="width:10%;"><img src="image_task2/hoso.png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Nguyễn Văn An</td>
            <td style="width:20%;">anngv@gmail.com</td>
            <td style="width:10%;">Quản lý</td>
            <td style="width:15%;">22/04/2024</td>
            <td style="width:25%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#suaModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
        <tr>
            <td style="width:10%;"><img src="image_task2/hoso.png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Nguyễn Văn An</td>
            <td style="width:20%;">anngv@gmail.com</td>
            <td style="width:10%;">Quản lý</td>
            <td style="width:15%;">22/04/2024</td>
            <td style="width:25%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#suaModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
    </table>
    <nav aria-label="Page navigation example"
        style="margin-top: 3vw; display: flex;justify-content: end; margin-right: 2vw; border: none;">
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
</div>
@endsection