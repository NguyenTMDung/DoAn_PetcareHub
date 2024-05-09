<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangphuController;
use App\Http\Controllers\QLNhanVienContronller;


Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu', [HomeController::class,'index']);


// admin
Route::get('/admin', [AdminController::class,'trangchu']);
Route::get('/admin-trang-chu', [AdminController::class,'trangchu']);
Route::get('/admin-quan-ly-nhan-vien', [QLNhanVienContronller::class,'index']);

//doitra
Route::get('/chinh-sach-doi-tra', [TrangphuController::class,'ChinhSachDoiTra']);
Route::get('/chinh-sach-hoan-tien', [TrangphuController::class,'ChinhSachHoanTien']);
Route::get('/phuong-thuc-thanh-toan', [TrangphuController::class,'PhuongThucThanhToan']);
Route::get('/chinh-sach-bao-mat', [TrangphuController::class,'ChinhSachBaoMat']);




