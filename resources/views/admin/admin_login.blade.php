@extends('layout')
@section('content')
        <link rel="stylesheet" href="{{asset('public/frontend/css/styleSignin.css')}}">

    <body>
        
        <div id="container">
            <div id="title-header">
                <a href="{{URL::to('/admin-login')}}" class="set-active">Đăng Nhập</a>
            {{-- <a href="{{URL::to('/admin-signin')}}" class="set-active">Đăng Kí</a> --}}
            </div>
            <hr
                style="
                    width: 35%;
                    border: 1px solid rgb(0, 0, 0);
                    margin: auto;
                    margin-top: 1vw;
                    opacity: 1;
                "
            />
            <div id="infor-customer">
                <form action="{{ url('/admin-login') }}" method="POST">
                    @csrf
                    <p>Email</p>
                    <input
                        type="email"
                        name="email"
                        id="email-customer"
                        placeholder="Hãy nhập địa chỉ email tài khoản của bạn"
                    /><br />
                    <p>Mật Khẩu</p>
                    <input
                    name="password"
                        type="password"
                        id="password-customer"
                        placeholder="Hãy nhập mật khẩu của bạn"
                    />
                    @if ($errors->any())
                    <div class="alert alert-danger" style=" height: 30px;
                    display: flex;
                    align-items: center;
                    margin-top:10px
                    ">
                        <ul style=" margin-top:10px">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div id="forgot-password">
                        <a href="#">Quên mật khẩu</a>
                    </div>
                    <input
                        type="submit"
                        name="submit"
                        id="submit"
                        value="Đăng Nhập"
                    />
                </form>
            </div>
        </div>
        <div id="footer">
            <table>
                <tr>
                    <td id="infor-shop">
                        <h3>Liên hệ</h3>
                        CỬA HÀNG SẢN PHẨM VÀ DỊCH VỤ THÚ CƯNG PET CARE HUB Địa
                        chỉ: Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố
                        Hồ Chí Minh, Việt Nam. <br />
                        <a href="#hotline"
                            ><i class="fas fa-phone-alt"></i>Hotline:+84
                            9123123123</a
                        ><br />
                        <a href="#shop_email"
                            ><i class="bi bi-envelope-fill"></i>Email:
                            abc@gmail.com</a
                        >
                        <div id="connect_shop">
                            <a href="#tiktok"
                                ><i class="fa-brands fa-tiktok"></i
                            ></a>
                            <a href="#facebook" id="facebook"
                                ><i class="fa-brands fa-facebook-f"></i
                            ></a>
                            <a href="#youtube" id="youtube"
                                ><i class="fa-brands fa-youtube"></i
                            ></a>
                        </div>
                    </td>
                    <td style="width: 30%">&nbsp;</td>
                    <td id="policy">
                        <h3>Chính sách khách hàng</h3>
                        <a href="#">Chính sách đổi trả.</a><br />
                        <a href="#">Chính sách bảo mật.</a><br />
                        <a href="#">Phương thức thanh toán.</a><br />
                        <a href="#">Chính sách hoàn tiền</a><br />
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center" class="logo">
                        <img src="image/logo.png" alt="logo" />
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
@endsection