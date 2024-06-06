@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/styleSignin.css')}}">
    <div id="container">
        <div id="title-header">
            <a href="{{URL::to('/login')}}" class="set-active">Đăng Nhập</a>
            <a href="{{URL::to('/signin')}}" class="set-active active">Đăng Kí</a>
        </div>
        <hr style="width: 35%;border: 1px solid rgb(0, 0, 0);margin: auto; margin-top: 1vw;opacity: 1;">
        <div id="infor-customer">
            <form id="" action="{{ url('/signin') }}" method="POST">
                @csrf
                <p>Họ và tên</p>
                <input type="text" name="name" id="name-customer" placeholder="Hãy nhập đầy đủ Họ và Tên của bạn"><br>
                {{-- <p>Ngày sinh</p>
                <input type="date" name="birthday" id="birthday-time" pattern="\d{2}-\d{2}-\d{4}"> --}}
                <p>Số điện thoại</p>
                <input type="tel" name="phone" id="tel-customer" placeholder="Hãy nhập số điện thoại của bạn"><br>
                @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                 @endif

                <p>Email</p>
                <input type="email" name="email" id="email-customer" placeholder="Hãy nhập email của bạn">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                 @endif
                <p>Mật Khẩu</p>
                <input type="password" name="password" id="password-customer" placeholder="Hãy nhập mật khẩu của bạn">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <input type="submit" name="submit" id="submit" value="Đăng ký">
            </form>
        </div>
    </div>
    @endsection