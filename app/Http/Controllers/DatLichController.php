<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatLichController extends Controller
{
    public function index()
    {
        return view('pages.datlich'); 
    }
    public function luuThongTin(Request $request)
    {
        $data = $request->all(); // Lấy tất cả dữ liệu từ form

        // Xử lý dữ liệu dịch vụ (chuyển mảng thành chuỗi)
        $dichVu = implode(', ', $data['dich_vu']);

        // Lưu vào session
        session()->flash('dat_lich', [
            'ho_ten' => $data['ho_ten'],
            'email' => $data['email'],
            'ngay_dat' => $data['ngay_dat'],
            'dich_vu' => $dichVu,
        ]);

        return redirect()->route('admin.quanlylichhen');
    }

}

