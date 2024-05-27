@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/sanpham.css')}}">
    <div class="poster" style="margin-top: 1vw">
        <img src="{{asset('public/frontend/image/poster.png')}}" alt="poster">
    </div>
    <div>
        <br>
        <br>
        <h3 style="color: #024c81;text-align: center;"> <b>SẢN PHẨM </b></h3>
    </div>
    <div id="container-body">
        <div class="row">

            <form action="" class="tieu_de_loc"> <br>
                <b>Kích Thước</b><br />

                <input type="checkbox" id="size_nho" name="size1" value="Nhỏ" />
                <label for="kích thước">Nhỏ</label><br />
                <input type="checkbox" id="size_lon" name="size2" value="Trưởng thành" />
                <label for="Kích thước">Trưởng thành</label><br />
            </form>
            <form class="tieu_de_loc"> <br>
                <b> Phân loại</b> <br />
                <input type="checkbox" id="phan_loai_cho" name="Chó" value="Chó" />
                <label for="phân loại">Chó</label><br />
                <input type="checkbox" id="phan_loai_meo" name="Mèo" value="Mèo" />
                <label for="phân loại">Mèo</label><br />
            </form>
            <form class="tieu_de_loc"> <br>
                <b>Giá</b><br />

                <td>
                    <input type="number" id="quanlity_tu" name="quanlity" placeholder="Từ" min="0" max="1000000"
                        step="10000" placeholder="Từ" />
                </td>
                <td>
                    <input type="number" id="quanlity_den" name="quanlity" placeholder="Đến" min="0" max="1000000"
                        step="100000" placeholder="Đến" />
                </td>
            </form>

            <form class="tieu_de_loc"> <br>
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
            <button id="loc">Lọc</button>
        </div>
        <!-------------------------------------------------------------------------sản phẩm-------------------------------------------------------------------->
        <div class="container-item">
            @foreach($pro as $prodata)
            <div class="item ">
                <a href="">
                    <div>
                        <img src="{{asset('public/frontend/image/chailong.jp')}}g" alt="">
                        <div class="text-truncate-container">
                            <p>{{$prodata->name}}</p>
                        </div>
                        <div class="pro-price">
                            {{$prodata->price}} VNĐ
                        </div>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: flex;">
                                <p class="star-rating" style="color: #000;">5</p>
                                <p class="star-rating">★★★★★</p>
                            </div>
                            <p class="number-of-sales">Lượt bán: 88</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
