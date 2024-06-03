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

            <form action="{{URL::to('/loc-san-pham-'.$cate_id)}}" class="tieu_de_loc" method="POST" id="filterForm"> 
                {{ csrf_field() }}
                <b>Loại Sản phẩm</b><br> <br>
                @foreach( $types as $typPro)
                    <label>
                        <input type="checkbox" 
                        name="typeProduct[]" value="{{$typPro->id}}" style="margin-right:1vw"/>{{$typPro->name}} 
                    </label><br>  
                @endforeach
                <br>
                <b>Phân loại pet</b> <br> <br>
                <label>
                    <input type="checkbox" name="pett[]" value="Chó" style="margin-right:1vw"/>Chó
                </label><br />
                <label>
                    <input type="checkbox" name="pett[]" value="Mèo" style="margin-right:1vw"/>Mèo
                </label><br> <br>

                <b>Giá</b><br>
                <td>
                    <input type="number" id="quanlity_tu" name="min_price" placeholder="Từ" min="0" 
                        placeholder="Từ" value="0" oninput="validateMinMaxPrice()"/>
                </td>
                <td>
                    <input type="number" id="quanlity_den" name="max_price" placeholder="Đến" min="0" max="1000000"
                        step="100000" placeholder="Đến" value="500000" oninput="validateMinMaxPrice()"/>
                </td><br><br> <br>
                <b>Sắp xếp theo</b><br />

                <input type="radio" id="sap_xep_theo_mac_dinh" name="sap_xep" value="Mặc định" checked />
                <label for="sap_xep_theo_mac_dinh">Mặc định</label><br />

                <input type="radio" id="sap_xep_theo_a_den_z" name="sap_xep" value="A đến Z" />
                <label for="sap_xep_theo_a_den_z">A<span>&#10230; </span>Z</label><br />

                <input type="radio" id="sap_xep_theo_z_den_a" name="sap_xep" value="Z đến A" />
                <label for="sap_xep_theo_z_den_a">Z<span>&#10230; </span>A</label><br />

                <input type="radio" id="sap_xep_theo_giam_dan" name="sap_xep" value="Giảm dần" />
                <label for="sap_xep_theo_giam_dan">Giảm dần</label><br />

                <input type="radio" id="sap_xep_theo_tang_dan" name="sap_xep" value="Tăng dần" />
                <label for="sap_xep_theo_tang_dan">Tăng dần</label><br><br> <br>

                <button id="loc" type="submit">Lọc</button>
            </form>
        </div>
        <!-------------------------------------------------------------------------sản phẩm-------------------------------------------------------------------->
        <div class="container-item">
            @foreach($pro as $prodata)
            <div class="item ">
                <a href="{{URL::to('/chi-tiet-san-pham-' . $prodata->id)}}" method="GET">
                    <div>
                        <img src="{{asset('public/storage/products/' . $prodata->image)}}" alt="{{$prodata->name}}">
                        <div class="text-truncate-container">
                            <p>{{$prodata->name}}</p>
                        </div>
                        <div class="pro-price">
                            @if ($prodata->min_price == $prodata->max_price)
                                {{ number_format($prodata->min_price, 0, '.', '.') }} VNĐ
                            @else
                                {{ number_format($prodata->min_price, 0, '.', '.') }} - {{ number_format($prodata->max_price, 0, '.', '.') }} VNĐ
                            @endif                        
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
    <script>
        function validateMinMaxPrice() {
            var minPrice = parseFloat(document.getElementById("min_price").value);
            var maxPrice = parseFloat(document.getElementById("max_price").value);
    
            if (maxPrice < minPrice) {
                document.getElementById("max_price").value = minPrice;
            }
        }
    </script>
@endsection
