@extends('admin_layout')
@section('admin_content')
<div id="container">
    <tr>
        <td><button class="add-employee-button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                    class="bi bi-plus-square-fill"></i> Thêm danh mục sản phẩm </button></td>
    </tr>
    <!--------------------------------------------------------------------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{URL::to('/luu-danh-muc-sp')}}"  method="post"> 
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Thêm danh mục</label>
                            <input type="text" class="form-control" id="name"
                                placeholder="Thêm danh mục sản phẩm" name="category_name"></input>
                        </div>
                        <div style="text-align:right">
                            <button type="submit" class="btn btn-primary" name="them">Thêm</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!--------------------------------------------------------------------------->
    <div class="modal fade" id="ModalSua" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{URL::to('/luu-danh-muc-sp')}}"  method="post"> 
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Sửa danh mục</label>
                            <input type="text" class="form-control" id="name"
                                placeholder="Tên danh mục sản phẩm" name="category_name"></input>
                        </div>
                        <div style="text-align:right">
                            <button type="submit" class="btn btn-primary" name="them">Thêm</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!--------------------------------------------------------------------------->

    <?php
        $message = Session::get('message');
        if($message){
            echo '<p class="text-alert" style="color:green; text-align:right"><i>'. $message.'</i></p>';
            Session::put('message',null);
        }
    ?>
    <table id="myTable">
        <tr class="head">
            <th style="width:30%;">Mã danh mục</th>
            <th style="width:30%;">Tên danh mục</th>
            <th style="width:30%;">Thao tác</th>
        </tr>

        @foreach($all_category_product as $key => $cate_pro)
        <tr>
            <td style="width:30%;">{{$cate_pro->id}}</td>
            <td style="width:30%;">{{$cate_pro->name}}</td>
            <td style="width:30%;">
                <a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#ModalSua" style="background-color:green">
                    <i class="bi bi-pencil-square"></i>
                </button></a>
                <a href=""><button class="btn btn-block btn-danger"><i class="bi bi-trash"></i></button></a>
            </td>
        </tr>
        @endforeach
    </table>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
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