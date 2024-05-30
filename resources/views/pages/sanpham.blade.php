@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/sanpham.css')}}">
    <div class="poster" style="margin-top: 1vw">
        <img src="{{asset('public/frontend/image/banner-gt.png')}}" alt="poster">
    </div>
    <div>
        <br>
        <br>
        <h3 style="color: #024c81;text-align: center;"> <b>SẢN PHẨM </b></h3>
    </div>
    <br>
    <div id="container-body">
            <div class="filter">
                <form action="" class="tieu_de_loc">
                    <p><b>Kích Thước</b></p>
                    <input type="checkbox" id="size_nho" name="size1" value="Nhỏ" />
                    <label for="size_nho">Nhỏ</label><br />
                    <input type="checkbox" id="size_lon" name="size2" value="Trưởng thành" />
                    <label for="size_lon">Trưởng thành</label><br />
                </form>
                <form class="tieu_de_loc">
                    <b> <p>Phân loại</b></p>
                    <input type="checkbox" id="phan_loai_cho" name="Chó" value="Chó" />
                    <label for="phan_loai_cho">Chó</label><br />
                    <input type="checkbox" id="phan_loai_meo" name="Mèo" value="Mèo" />
                    <label for="phan_loai_meo">Mèo</label><br />
                </form>
                <form class="tieu_de_loc">
                    <b><p>Giá</b></p>
                    <td>
                        <input type="number" id="quanlity_tu" name="quanlity" placeholder="Từ" min="0" max="1000000"
                            step="10000" value="Từ" />
                    </td>
                    <td>
                        <input type="number" id="quanlity_den" name="quanlity" placeholder="Đến" min="0" max="1000000"
                            step="100000" value="Đến" />
                    </td>
                </form>

                <form class="tieu_de_loc"> <br>
                    <b><p>Sắp xếp theo</b></p>
                    <input type="radio" id="sap_xep_theo_mac_dinh" name="arrange" value="Mặc định" />
                    <label for="sap_xep_theo_mac_dinh">Mặc định</label><br />
                    <input type="radio" id="sap_xep_theo_a_den_z" name="arrange" value="A đến Z" />
                    <label for="sap_xep_theo_a_den_z">A<span>&#10230; </span>Z</label><br />
                    <input type="radio" id="sap_xep_theo_z_den_a" name="arrange" value="Z đến A" />
                    <label for="sap_xep_theo_z_den_a">Z<span>&#10230; </span>A</label><br />
                    <input type="radio" id="sap_xep_theo_giam_dan" name="arrange" value="giảm dần" />
                    <label for="sap_xep_theo_giam_dan">Giảm dần</label><br />
                    <input type="radio" id="sap_xep_theo_tang_dan" name="arrange" value="tăng dần" />
                    <label for="sap_xep_theo_tang_dan">Tăng dần</label><br />
                </form>
                <button id="loc">Lọc</button>
            </div>
            <!-------------------------------------------------------------------------sản phẩm-------------------------------------------------------------------->
            <div class="container-item">
                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="img-products">
                            <img src="image/best_seller2.png" alt="">
                        </div>
                        <div class="text-truncate-container">
                            <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                        </div>
                        <div class="pro-price">
                            30.000
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
@endsection
