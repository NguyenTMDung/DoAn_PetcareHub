<?php
use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangphuController;
use App\Http\Controllers\QLNVController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HotelServiceController;


Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu', [HomeController::class,'index']);

//Page SP
Route::get('/san-pham',[ProductController::class,'index']);

//Page Dịch vụ
Route::get('/dich-vu-khach-san',[HotelServiceController::class,'index']);

// admin
Route::get('/admin', [AdminController::class,'trangchu']);
Route::get('/admin-trang-chu', [AdminController::class,'trangchu']);

//ad_min category_sanpham
Route::resource('/danh-muc-san-pham', CategoryProductController::class);
Route::post('/danh-muc-san-pham',[CategoryProductController::class,'store']);
Route::put('/danh-muc-san-pham/{id}', [CategoryProductController::class, 'update']);
Route::delete('/danh-muc-san-pham/{id}', [CategoryProductController::class, 'destroy']);


//doitra
Route::get('/chinh-sach-doi-tra', [TrangphuController::class,'ChinhSachDoiTra']);
Route::get('/chinh-sach-hoan-tien', [TrangphuController::class,'ChinhSachHoanTien']);
Route::get('/phuong-thuc-thanh-toan', [TrangphuController::class,'PhuongThucThanhToan']);
Route::get('/chinh-sach-bao-mat', [TrangphuController::class,'ChinhSachBaoMat']);

//employee
Route::resource('/quan-ly-nhan-vien',QLNVController::class);
Route::post('/them-nhan-vien',[QLNVController::class,'store']);
Route::put('/quan-ly-nhan-vien/{id}', [QLNVController::class, 'update']);
Route::delete('/quan-ly-nhan-vien/{id}', [QLNVController::class, 'destroy']);

//customer
Route::resource('/quan-ly-khach-hang',CustomerController::class);
Route::put('/quan-ly-khach-hang/{id}', [CustomerController::class, 'update']);
Route::delete('/quan-ly-khach-hang/{id}', [CustomerController::class, 'destroy']);


