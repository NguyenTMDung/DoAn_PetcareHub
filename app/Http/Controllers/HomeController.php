<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function ChinhSachDoiTra(){
        return view('pages.doitra');
    }
    public function ChinhSachHoanTien(){
        return view('pages.hoantien');
    }
    public function PhuongThucThanhToan(){
        return view('pages.ptthanhtoan');
    }
    public function ChinhSachBaoMat(){
        return view('pages.baomat');
    }
}
