<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QLNhanVienContronller extends Controller
{
    public function index(){
        return view('admin.admin_quanlynhanvien');
    }
}
