<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLNVController extends Controller
{
    
    public function index(){
        return view('admin.admin_quanlynhanvien');
    }
    public function create(){
        // Code xử lý hiển thị form tạo mới nhân viên
    }

    public function store(Request $request){
        
    }

    public function show($id){
        // Code xử lý hiển thị thông tin chi tiết nhân viên có ID là $id
    }

    public function edit($id){
        // Code xử lý hiển thị form chỉnh sửa thông tin nhân viên có ID là $id
    }

    public function update(Request $request, $id){
        // Code xử lý cập nhật thông tin nhân viên có ID là $id
    }

    public function destroy($id){
        // Code xử lý xóa nhân viên có ID là $id
    }
}
