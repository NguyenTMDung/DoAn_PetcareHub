@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/dvspa.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/dichvukhachsan.css')}}">
<div class="title">
    <h3><strong>DỊCH VỤ KHÁCH SẠN THÚ CƯNG</strong></h3>
</div>
    <div class="form-container">
        <div class="form-column1">
            <h4><b>🥇 DỊCH VỤ TRÔNG GIỮ CHÓ MÈO UY TÍN </b></h4>
            <hr style="border: 1px solid black;opacity: 1;">
            <p><strong>Pet Care Hub - Nơi yêu thương được tiếp nối</strong></p>
            <p>Pet Care Hub là điểm đến tin cậy cho chất lượng dịch vụ chuyên nghiệp, tiện
                ích và mô hình phòng ốc hiện đại. Với sứ mệnh mang lại trải nghiệm tuyệt vời nhất cho thú cưng,
                chúng tôi cung cấp dịch vụ Pet Hotel tại TP. Hồ Chí Minh.</p>
            <p><strong>Cam kết của Pet Care Hub:</strong></p>
            <ul>
                <p>- Môi trường sống lý tưởng, vệ sinh cao, tiêu chuẩn 5 sao.</p>
                <p>- Giám sát liên tục 24/7 bằng hệ thống camera hiện đại, đảm bảo an toàn
                    tuyệt đối.</p>
            </ul>
            <p><b>Hãy liên hệ với chúng tôi để đặt phòng cho thú cưng của bạn!</b></p>
        </div>
        <div class="form-column2">
            <img src="{{asset('public/frontend/image_task2/img-hotel1.png')}}">
        </div>
    </div>
    <br><br><br>

    <div class="form-container" id="style-responsive">
        <div class="form-column1">
            <img src="{{asset('public/frontend/image_task2/img-hotel2.png')}}">
        </div>
        <div class="form-column2">
            <h4><strong>🦮 MÔ HÌNH CHĂM SÓC VÀ HOẠT ĐỘNG</strong></h4>
            <hr style="border: 1px solid black;opacity: 1;">
            <p><strong>Chế độ dinh dưỡng:</strong></p>
            <p>Khung giờ ăn uống khoa học, đảm bảo phù hợp với nhu cầu sinh học của từng
                        bé.</p>
            <p>Thực đơn cân bằng, đầy đủ dinh dưỡng, được thiết kế riêng cho từng độ
                        tuổi và giống loài.</p>
            <p>Cung cấp thức ăn hạt hỗn hợp từ các thương hiệu uy tín, đảm bảo chất
                        lượng cao.</p>
            <p><strong>Chế độ vui chơi thể thao:</strong></p>
            <p>Hoạt động thường xuyên giúp tăng cường thể lực, cải thiện tiêu hóa và
                        tăng cường giao lưu với các bạn thú cưng khác (chỉ áp dụng cho chó).</p>
            <p>Khu vui chơi rộng rãi, an toàn với nhiều trò chơi thú vị.</p>
        </div>
    </div>
    <br><br><br>
    <div class="form-container">
        <div class="form-column1">
            <h4><b>🎯 KHÁCH SẠN THÚ CƯNG PET CARE HUB CÓ GÌ? </b></h4>
            <hr style="border: 1px solid black;opacity: 1;">
            <p><strong>Hệ thống phòng ốc hiện đại và tiện nghi:</strong></p>
            <p>Các phòng được ngăn bằng tấm nhựa lõi thép và kính cường lực, đảm bảo an
                    toàn cho thú cưng.</p>
            <p>Sàn nhà được trải thảm cách điện, cách nhiệt, tạo cảm giác êm ái và ấm
                    áp.</p>
            <p>Hệ thống hút khử mùi hoạt động 15 phút/lần giúp khử mùi hôi, tạo môi trường thông thoáng, dễ chịu cho thú cưng.</p>
            <p><strong>Đội ngũ nhân viên chuyên nghiệp:</strong></p>
            <p>Chúng tôi thường xuyên tổ chức đào tạo cho nhân viên để nâng cao kiến
                    thức và kỹ năng chăm sóc thú cưng.</p>
            <p>Đội ngũ nhân viên đều có tình yêu thương động vật, luôn ân cần, chu đáo
                    và quan tâm đến từng bé thú cưng.</p>
        </div>
        <div class="form-column2">
            <img src="{{asset('public/frontend/image_task2/img-hotel3.png')}}">
        </div>
    </div>
    <br><br><br>
    <div class="banner">
        <h4><br><b>💲 BẢNG GIÁ PHÒNG KHÁCH SẠN THÚ CƯNG</b></h4>
        <hr style="border: 1px solid black;opacity: 1;">
        <div class="menu-hotel">
            <div class="product-card1">
                <div class="card-info">
                    <img src="{{asset('public/frontend/image_task2/chuongm.png')}}" alt="" width="100%">
                    <p style="color: #103559;">Chuồng M <br>(Dành cho thú cưng tối đa 10kg)</p>
                    <b class="mau" style="color: #103559;">150k/ngày</b><br>
                    <button class="chi-tiet" onclick="toggleDetails1()">(Xem chi tiết)</button>
                </div>
                <div class=" card-detail">
                    <p style="color:black;text-align:left;">1. Chuồng: Kích thước 70 x 50 x 50 cm <br>
                    2. Lót chuồng: làm từ mùn cưa, khăn mềm hoặc thảm được thay lót chuồng thường xuyên <br>
                    3. Đồ chơi: phù hợp với kích thước và độ tuổi của thú cưng.<br>
                    4. Cây cào móng (cho mèo): giúp mèo cào móng, tránh làm hỏng đồ đạc trong nhà. <br>
                    5. Dịch vụ tắm rửa, sấy lông miễn phí.</p>
                    <button onclick="toggleDetails1()" class="gia">Ẩn</button>
                </div>
            </div>
            <div class="product-card2">
                <div class="card-info">
                    <img src="{{asset('public/frontend/image_task2/chuongl.png')}}" alt="" width="100%">
                    <p style="color: #103559;">Chuồng L <br>(Dành cho thú cưng tối đa 20kg)</p>
                    <b class="mau" style="color: #103559;">150k/ngày</b><br>
                    <button class="chi-tiet" onclick="toggleDetails2()">(Xem chi tiết)</button>
                </div>
                <div class=" card-detail">
                    <p style="color:black;text-align:left;">1. Chuồng: Kích thước 100 x 70 x 80 cm <br>
                        2. Lót chuồng: làm từ mùn cưa, khăn mềm hoặc thảm được thay lót chuồng thường xuyên. <br>
                        3. Đồ chơi: phù hợp với kích thước và độ tuổi của thú cưng. <br>
                        4. Cây cào móng (cho mèo): giúp mèo cào móng, tránh làm hỏng đồ đạc trong nhà. <br>
                        5. Dịch vụ tắm rửa, sấy lông miễn phí.</p>
                    <button onclick="toggleDetails2()" class="gia">Ẩn</button>
                </div>
            </div>
            <div class="product-card3">
                <div class="card-info">
                    <img src="{{asset('public/frontend/image_task2/chuongxl.png')}}" alt="" width="100%">
                    <p style="color: #103559;">Chuồng XL <br>(Dành cho thú cưng tối đa 40kg)</p>
                    <b class="mau" style="color: #103559;">150k/ngày</b><br>
                    <button class="chi-tiet" onclick="toggleDetails3()">(Xem chi tiết)</button>
                </div>
                <div class=" card-detail">
                    <p style="color:black;text-align:left;">1. Chuồng: Kích thước 120 x 80 x 100 cm. <br>
                        2. Lót chuồng: làm từ mùn cưa, khăn mềm hoặc thảm được thay lót chuồng thường xuyên. <br>
                        3. Đồ chơi: phù hợp với kích thước và độ tuổi của thú cưng <br>
                        4. Cây cào móng (cho mèo): giúp mèo cào móng, tránh làm hỏng đồ đạc trong nhà. <br>
                        5. Dịch vụ tắm rửa, sấy lông miễn phí.</p>
                    <button onclick="toggleDetails3()" class="gia">Ẩn</button>
                </div>
            </div>
            <div class="product-card4">
                <div class="card-info">
                    <img src="{{asset('public/frontend/image_task2/vipc.png')}}" alt="" width="100%">
                    <p style="color: #103559;">Phòng VIP C <br>(Dành cho thú cưng tối đa 10kg)</p>
                    <b class="mau" style="color: #103559;">150k/ngày</b><br>
                    <button class="chi-tiet" onclick="toggleDetails4()">(Xem chi tiết)</button>
                </div>
                <div class=" card-detail">
                    <p style="color:black;text-align:left;">
                        1. Tặng voucher giảm giá 5% cho dịch vụ spa: Bao gồm các dịch vụ như cắt tỉa lông, vệ sinh răng miệng. (Voucher có hiệu lực trong vòng 3 tháng.) <br>
                        2.Dịch vụ spa, cắt tỉa lông, vệ sinh răng miệng. <br>
                        3.Dịch vụ đưa đón thú cưng (Áp dụng cho khách hàng đặt phòng VIP trong bán kính 10km từ cơ sở Pet Care Hub). 
                        </p>
                    <button onclick="toggleDetails4()" class="gia">Ẩn</button>
                </div>
            </div>
            <div class="product-card5">
                <div class="card-info">
                    <img src="{{asset('public/frontend/image_task2/vipb.png')}}" alt="" width="100%">
                    <p style="color: #103559;">Phòng VIP B <br>(Dành cho thú cưng tối đa 20kg)</p>
                    <b class="mau" style="color: #103559;">150k/ngày</b><br>
                    <button class="chi-tiet" onclick="toggleDetails5()">(Xem chi tiết)</button>
                </div>
                <div class=" card-detail">
                    <p style="color:black;text-align:left;">
                        1. Tặng voucher giảm giá 5% cho dịch vụ spa: Bao gồm các dịch vụ như cắt tỉa lông, vệ sinh răng miệng. (Voucher có hiệu lực trong vòng 3 tháng.) <br>
                        2.Dịch vụ spa, cắt tỉa lông, vệ sinh răng miệng. <br>
                        3.Dịch vụ đưa đón thú cưng (Áp dụng cho khách hàng đặt phòng VIP trong bán kính 10km từ cơ sở Pet Care Hub). 
                        </p>
                    <button onclick="toggleDetails5()" class="gia">Ẩn</button>
                </div>
            </div>
            <div class="product-card6">
                <div class="card-info">
                    <img src="{{asset('public/frontend/image_task2/vipa.png')}}" alt="" width="100%">
                    <p style="color: #103559;">Phòng VIP A <br>(Dành cho thú cưng tối đa 40kg)</p>
                    <b class="mau" style="color: #103559;">150k/ngày</b><br>
                    <button class="chi-tiet" onclick="toggleDetails6()">(Xem chi tiết)</button>
                </div>
                <div class=" card-detail">
                    <p style="color:black;text-align:left;">
                        1. Tặng voucher giảm giá 5% cho dịch vụ spa: Bao gồm các dịch vụ như cắt tỉa lông, vệ sinh răng miệng. (Voucher có hiệu lực trong vòng 3 tháng.) <br>
                        2.Dịch vụ spa, cắt tỉa lông, vệ sinh răng miệng. <br>
                        3.Dịch vụ đưa đón thú cưng (Áp dụng cho khách hàng đặt phòng VIP trong bán kính 10km từ cơ sở Pet Care Hub). 
                        </p>
                    <button onclick="toggleDetails6()" class="gia">Ẩn</button>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="voucher">
        <div>
            <h4 class="form-column"><b>🎁 CÁC CHƯƠNG TRÌNH ƯU ĐÃI KHUYẾN MÃI</b></h4>
            <hr style="border: 1px solid black;opacity: 1;">

            <div class="column">
                <div class="contents">
                    <h4 style="text-align: center;"><strong>🔖 Ưu đãi hàng tuần</strong> </h4>
                    <p style="text-align: center;">Thú cưng gửi khách sạn 1 tuần</p>
                    <p style="text-align: center;"><strong>Tặng miễn phí 1 ngày</strong></p>
                </div>
                <div class="contents">
                    <h4 style="text-align: center;"><strong>🔖 Ưu đãi hàng tháng </strong></h4>
                    <p style="text-align: center;">Thú cưng gửi khách sạn 1 tháng </p>
                    <p style="text-align: center;"><strong>Tặng miễn phí 5 ngày</strong></p>
                </div>
                <div class="contents">
                    <h4 style="text-align: center;"><strong>🔖 Ưu đãi đặc biệt</strong></h4>
                    <p style="text-align: center;">Thú cưng gửi khách sạn 3 ngày</p>
                    <p style="text-align: center;"><strong>Tặng 1 lần miễn phí tắm spa</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div id="sub">
     <a href="{{ url('/datlich') }}" style="color:aliceblue">
        <input type="Submit" value="Đặt lịch ngay" name="Submit">
</a> </div>
    <br><br><br>
    <div class="form-container">
        <div class="form-column1">
            <h4><b>📸 GỬI ẢNH THÚ CƯNG CẬP NHẬT MỖI NGÀY</b></h4>
            <hr style="border: 1px solid black;opacity: 1;">
            <p><strong>Pet Care Hub - Nơi an toàn và vui vẻ cho thú cưng của bạn!</strong></p>
            <p><strong>Yên tâm khi đi chơi xa:</strong></p>
            <p>Hệ thống camera giám sát 24/7 giúp bạn theo dõi thú cưng mọi lúc mọi nơi.</p>
            <p><strong>Nơi lưu trú lý tưởng:</strong></p>
            <p>Môi trường an toàn, thoải mái, giúp thú cưng tận hưởng thời gian vui chơi
                    tự do.</p>
            <p>Cung cấp nhiều gói dịch vụ phù hợp với nhu cầu của từng bé.</p>
            <p><strong>Tiện lợi và linh hoạt:</strong></p>
            <p>Cho phép mang theo thức ăn riêng hoặc sử dụng thức ăn của khách sạn.</p>
            <p>Cam kết không tăng giá dịch vụ tất cả các ngày lễ tết</p>
        </div>
        <div class="form-column2">
            <img src="{{asset('public/frontend/image_task2/img-hotel4.png')}}">
        </div>
    </div>
    <br><br><br>
    <div class="contain1">
        <h4><b>ĐỪNG QUÊN CHĂM SÓC THÚ CƯNG SAU KHI LÀM DỊCH VỤ!</b></h4>
        <hr style="border: 1px solid black;opacity: 1;">
        <p>Mặc dù việc gần như thường xuyên ghé thăm cửa hàng của chúng tôi để sử dụng dịch vụ sẽ giúp thú cưng của
            bạn sạch sẽ và đẹp hơn. Nhưng đừng quên việc chải lông, vệ sinh tai hàng ngày cho các bé khi ở nhà. Việc
            đó sẽ giúp cho thú cưng luôn duy trì được sự sạch sẽ, khỏe mạnh. Hãy tham khảo các mẹo và sản phẩm mà
            chúng tôi sử dụng để chăm sóc cho thú cưng của bạn tại nhà.</p>
        <div class="products-list">
            <div class="item">
                <a href="">
                    <div class="img-products">
                        <img src="{{asset('public/frontend/image/sp1.jpg')}}" alt="">
                    </div>
                    <div class="text-truncate-container">
                        <p>Sữa tắm Oliver cho chó mèo dưỡng mượt lông khử mùi 450ml</p>
                    </div>
                    <div class="pro-price">
                        30.000 VND
                    </div>
                    <div class="sales">
                        <p>Lượt bán:</p> 
                        <p class="number-of-sales"> 1232</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="img-products">
                        <img src="{{asset('public/frontend/image/sp2.jpg')}}" alt="" >
                    </div>
                    <div class="text-truncate-container">
                        <p>Dung Dịch Vệ Sinh Tai, Nước Rửa Tai Cho Chó Mèo TRIXIE Ear Care 50ML</p>
                    </div>
                    <div class="pro-price">
                        59.000 VND
                    </div>
                    <div class="sales">
                        <p>Lượt bán:</p> 
                        <p class="number-of-sales"> 1232</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="img-products">
                        <img src="{{asset('public/frontend/image/sp3.jpg')}}" alt="">
                    </div>
                    <div class="text-truncate-container">
                        <p>Lược chải lông thú cưng tẩy lông cho mèo và chó</p>
                    </div>
                    <div class="pro-price">
                        37.000 VND
                    </div>
                    <div class="sales">
                        <p>Lượt bán:</p> 
                        <p class="number-of-sales"> 1232</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="img-products">
                        <img src="{{asset('public/frontend/image/sp5.jpg')}}" alt="">
                    </div>
                    <div class="text-truncate-container">
                        <p>Khăn Tắm Siêu Thấm Hút Cho Chó Mèo Kích Thước 44x32cm</p>
                    </div>
                    <div class="pro-price">
                        35.000 VND
                    </div>
                    <div class="sales">
                        <p>Lượt bán:</p> 
                        <p class="number-of-sales"> 1232</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
   
    <div id="sub">
    <a href="{{ url('/sanpham') }}" style="color:aliceblue">
        <input type="Submit" value="Sản phẩm"> 
    </a>
</div>
    <br><br><br>
    <div class="review-section">
        <h4><b>📮 ĐÁNH GIÁ CỦA KHÁCH HÀNG</b></h4>
        <hr style="border: 1px solid black;opacity: 1;">
        <h4 style="color: red;"><strong>PET CARE HUB</strong></h4>
        <div class="star-rating">★★★★★</div>
        <p>Based on 3 reviews</p>
        <hr style="border: 1px solid black;opacity: 1;">
        <div class="review">
            <h5>Trịnh Thiên Hoàng</h5>
            <div class="star-rating">★★★★★</div>
            <p>Dịch vụ chăm sóc thú cưng mà mình thích nhất luôn. Như cái siêu thị thu nhỏ cho cún mèo vậy.</p>
        </div>

        <div class="review">
            <h5>Nguyễn Huy Hoàng</h5>
            <div class="star-rating">★★★★★</div>
            <p>Shop bán hàng cực kì có tâm luôn nè, giá cả hợp lý và sản phẩm chất lượng.</p>
        </div>

        <div class="review">
            <h5>Lê Hà My Ngọc</h5>
            <div class="star-rating">★★★★★</div>
            <p>Nhân viên rất chuyên nghiệp và tận tình. Chó nhà tôi luôn trở về với bộ lông bóng mượt và thơm tho.
                Dịch vụ tuyệt vời!</p>
        </div>
    </div>
    <br><br><br>
</div>
</body>

<script>
function toggleDetails1() {
    var productCard = document.querySelector('.product-card1');
    productCard.classList.toggle('show-details');
}
function toggleDetails2() {
    var productCard = document.querySelector('.product-card2');
    productCard.classList.toggle('show-details');
}
function toggleDetails3() {
    var productCard = document.querySelector('.product-card3');
    productCard.classList.toggle('show-details');
}
function toggleDetails4() {
    var productCard = document.querySelector('.product-card4');
    productCard.classList.toggle('show-details');
}
function toggleDetails5() {
    var productCard = document.querySelector('.product-card5');
    productCard.classList.toggle('show-details');
}
function toggleDetails6() {
    var productCard = document.querySelector('.product-card6');
    productCard.classList.toggle('show-details');
}
</script>
@endsection