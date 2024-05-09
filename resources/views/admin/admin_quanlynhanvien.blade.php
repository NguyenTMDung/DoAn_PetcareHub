@extends('admin_layout')
@section('admin_content')
<div id="container">
    <tr><td>
        <button class="add-employee-button" data-bs-toggle="modal" data-bs-target="#ModalThemNV">
            <i class="bi bi-plus-square-fill"></i> Thêm nhân viên 
        </button>
        <div class="modal fade" id="ModalThemNV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- body them nv --}}
                <div class="modal-body">
                    <p><strong>Tên nhân viên </strong></p>
                    <div class="search-contain">
                        <input type="text" class="sbox" placeholder="Nhập tên nhân viên">
                    </div>
                    <p><strong>Ngày sinh </strong></p>
                    <div class="search-contain">
                        <input type="text" class="sbox" placeholder="01/01/1999">
                    </div>
                    <p><strong>Số điện thoại nhân viên </strong></p>
                    <div class="search-contain">
                        <input type="text" class="sbox" placeholder="Nhập số điện thoại">
                    </div>
                    <p><strong>Email</strong></p>
                    <div class="search-contain">
                        <input type="text" class="sbox" placeholder="Nhập địa chỉ email">
                    </div>
                    <p><strong>Ngày vào làm </strong></p>
                    <div class="search-contain">
                        <input type="text" class="sbox" placeholder="01/06/2024">
                    </div>
                    <p><strong>Ảnh</strong></p>
                    <div class="search-contain">
                        <button class="sbutton"><strong>Chọn tệp</strong></button>
                        <input type="search" class="sbox" >
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                  <button type="button" class="btn btn-primary">Lưu</button>
                </div>
              </div>
            </div>
          </div>
    </td></tr>
    <div class="search-container">
        <button class="search-button"><strong>Search</strong></button>
        <input type="search" class="search-box" placeholder="Search...">
    </div>
    
    <table id="myTable">
        <tr class="head">
            <th style="width:10%;">Hồ sơ</th>
            <th style="width:30%;">Hình ảnh</th>
            <th style="width:20%;">Vị trí</th>
            <th style="width:20%;">Ngày tạo</th>
            <th style="width:20%;">Sửa</th>
            <th></th>
        </tr>
        <tr class="banner" >
            <td style="width:10%;">01</td>
            <td style="width:30%;"><img src="{{asset('public/frontend/image/Pet Care Hub (1).png')}}" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner Trang chủ</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ... kkkkk
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </td>
        </tr>
        <tr class="bannerc" >
            <td style="width:10%;">02</td>
            <td style="width:30%;"><img src="image/banner2.png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner Trang chủ</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="banner" >
            <td style="width:10%;">03</td>
            <td style="width:30%;"><img src="image/banner3.png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner Trang chủ</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="bannerc" >
            <td style="width:10%;">04</td>
            <td style="width:30%;"><img src="image/slide-show-3.png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner Trang chủ</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="banner" >
            <td style="width:10%;">05</td>
            <td style="width:30%;"><img src="image/cat_banner.webp" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner cho Mèo</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="bannerc" >
            <td style="width:10%;">06</td>
            <td style="width:30%;"><img src="image/dog_banner.webp" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner cho Chó</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="banner" >
            <td style="width:10%;">07</td>
            <td style="width:30%;"><img src="image/img_shop1.webp" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner Cửa hàng</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="bannerc" >
            <td style="width:10%;">08</td>
            <td style="width:30%;"><img src="image/img_shop2.webp" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner Cửa hàng</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
        <tr class="banner" >
        <td style="width:10%;">09</td>
            <td style="width:30%;"><img src="image/Pet Care Hub (1).png" alt="Hình Ảnh"></td>
            <td style="width:20%;">Banner giới thiệu</td>
            <td style="width:20%;">22/03/2024</td>
            <td style="width:20%;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </td>
        </tr>
    </table>
    <nav aria-label="Page navigation example" style="margin-top: 3vw; display: flex;justify-content: end; margin-right: 2vw; border: none;">
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