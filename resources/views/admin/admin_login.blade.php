@extends('layout')
@section('content')
        <link rel="stylesheet" href="{{asset('public/frontend/css/SigninAdmin.css')}}">

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
                  
                    <input
                        type="submit"
                        name="submit"
                        id="submit"
                        value="Đăng Nhập"
                    />
                </form>
            </div>
        </div>
    </body>
</html>
@endsection