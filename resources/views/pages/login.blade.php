@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleSignin.css')}}">
<div id="container">
    <div id="title-header">
        <a href="{{URL::to('/login')}}" class="set-active active">Đăng Nhập</a>
    <a href="{{URL::to('/signin')}}" class="set-active">Đăng Kí</a>
    </div>
    <hr/>
    <div id="infor-customer">
        <form action="{{ url('/login') }}" method="POST">
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
                <a href="{{ url('/forget') }} ">Quên mật khẩu</a>
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
               

@endsection

