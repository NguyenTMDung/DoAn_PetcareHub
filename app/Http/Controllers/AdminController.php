<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function trangchu(){
        return view('admin.admin_home');
    }

    public function xuLyDatLich(Request $request)
{
    // Validate dữ liệu
    $validatedData = $request->validate([
        'fullname' => 'required',
        // ... (các quy tắc validate khác)
    ]);

    // Lưu vào database
    Appointment::create($validatedData);

    // Trả về phản hồi (nếu cần)
    return response()->json(['message' => 'Đặt lịch thành công']);
}


}
