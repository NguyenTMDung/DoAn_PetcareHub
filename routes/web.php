<?php
use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangphuController;
use App\Http\Controllers\QLNVController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CustomerController;

Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu', [HomeController::class,'index']);


// admin
Route::get('/admin', [AdminController::class,'trangchu']);
Route::get('/admin-trang-chu', [AdminController::class,'trangchu']);

//ad_min category_sanpham
Route::get('/admin-quan-ly-danh-muc-sp', [CategoryProductController::class,'show_cagetoryProduct']);
// Route::get('/chinh-sua-danh-muc-sp/{id}', [CategoryProductController::class, 'edit_cagetoryProduct']);
// Route::get('/xoa-danh-muc-sp/{id}', [CategoryProductController::class,'delete_cagetoryProduct']);
Route::post('/luu-danh-muc-sp', [CategoryProductController::class,'save_cagetoryProduct']);


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
Route::put('/quan-ly-khach-hang/{id}', [QLNVController::class, 'update']);
Route::delete('/quan-ly-khach-hang/{id}', [QLNVController::class, 'destroy']);


