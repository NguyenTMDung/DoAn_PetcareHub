@extends('layout_poster')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/sanpham.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="Sanpham-left">
            <form action="" class="tieu_de_loc">
                <b>Kích Thước</b><br />

                <input type="checkbox" id="size_nho" name="size1" value="Nhỏ" />
                <label for="kích thước">Nhỏ</label><br />
                <input type="checkbox" id="size_lon" name="size2" value="Trưởng thành" />
                <label for="Kích thước">Trưởng thành</label><br />
            </form>
            <form class="tieu_de_loc">
                <b> Phân loại</b> <br />
                <input type="checkbox" id="phan_loai_cho" name="Chó" value="Chó" />
                <label for="phân loại">Chó</label><br />
                <input type="checkbox" id="phan_loai_meo" name="Mèo" value="Mèo" />
                <label for="phân loại">Mèo</label><br />
                <input type="checkbox" id="phan_loai_khac" name="Khác" value="Khác" />
                <label for="phân loại">Khác</label><br />
            </form>
            <form class="tieu_de_loc">
                <b>Giá</b><br />

                <td>
                    <input type="number" id="quanlity_tu" name="quanlity" placeholder="Từ" min="0" max="1000000"
                        step="10000" value="Từ" />
                </td>
                <td>
                    <input type="number" id="quanlity_den" name="quanlity" placeholder="Đến" min="0"
                        max="1000000" step="100000" value="Đến" />
                </td>
            </form>

            <form class="tieu_de_loc">
                <b>Sắp xếp theo</b><br />

                <input type="checkbox" id="sap_xep_theo_mac_dinh" name="Mặc định" value="Mặc định" />
                <label for="sắp xếp theo">Mặc định</label><br />
                <input type="checkbox" id="sap_xep_theo_a_den_z" name="A đến Z" value="A đến Z" />
                <label for="sắp xếp theo">A<span>&#10230; </span>Z</label><br />
                <input type="checkbox" id="sap_xep_theo_z_den_a" name="Z đến A" value="Z đến A" />
                <label for="sắp xếp theo">Z<span>&#10230; </span>A</label><br />
                <input type="checkbox" id="sap_xep_theo_giam_dan" name="giảm dần" value="giảm dần" />
                <label for="sắp xếp theo">Giảm dần</label><br />
                <input type="checkbox" id="sap_xep_theo_tang_dan" name="tăng dần" value="tăng dần" />
                <label for="sắp xếp theo">Tăng dần</label><br />
            </form>
        </div>
    </div>
    <div class="container-item">
        <div class="item ">
            <a href="">
                <div>
                    <img src="{{asset('public/frontend/image/chailong.jpg')}}" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number_of_sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="{{asset('public/frontend/image/chailong.jpg')}}" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number_of_sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="{{asset('public/frontend/image/chailong.jpg')}}" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>

        <div class="item ">
            <a href="">
                <div>
                    <img src="image/chailong.jpg" alt="">
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                </div>
            </a>
            <div class="pro-price">
                30.000 VNĐ
            </div>
            <div style="display: flex;">
                <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating">★★★★★</p>
                <p class="number-of-sales">Lượt bán:88</p>
            </div>
        </div>
    </div>
</div>
@endsection