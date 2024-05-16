<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.admin_sanpham');
    }
    public function pagesanpham(){
        return view('pages.sanpham');
    }
    
}
