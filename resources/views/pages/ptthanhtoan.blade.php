@extends('layout')
@section('content')
<div id="contain">
    <h1 style="text-align: center; margin: 20px;">Phương thức thanh toán</h1>
    <ul>
        <h5> <i>Pet Care Hub Shop hỗ trợ các phương thức thanh toán sau: </i></h6> <br>
        <h6>1. Thanh toán bằng tiền mặt khi nhận hàng</h6>
        <p>Quý khách sẽ thanh toán bằng tiền mặt khi đơn vị vận chuyển giao hàng tận nơi</p> <br>

        <h6>2. Thanh toán bằng chuyển khoản ngân hàng (Internet banking)</h6>
        <p>Lưu ý: Cần đăng ký Internet Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi thực hiện.</p>
        <p>Quý khách chuyển khoản vào tài khoản Ngân hàng công ty của chúng tôi qua các số tài khoản ngân hàng sau:</p>
        <p>MB Ngân Hàng Quân Đội - MBBANK</p>
        <p>Chi nhánh TP. Hồ Chí Minh</p>
        <p>Số tài khoản: 8800130104</p>
        <p>Chủ tài khoản: Lê Nguyễn Thục Nhi </p> <br>
            
        <h6>3. Ví điện tử Momo và các ví điện tử khác</h6>
        <p>Thông qua cổng thanh toán OnePay. Khách hàng lựa chọn QR Payment With Mobile Apps</p>
        <img src="{{asset('public/frontend/image_task2/cac-cong-thanh-toan.png')}}" alt="" style="width: 500px">
        <br> <br>
        <h6>4. Thẻ tín dụng, thẻ ngân hàng</h6>
        <p>Thông qua cổng thanh toán OnePay. Hỗ trợ thẻ tín dụng  ngân hàng liên kết phổ biến nhất Việt Nam. Áp dụng cho mua sắm tại cửa hàng và cả thanh toán online</p>
    </ul>
</div>
@endsection