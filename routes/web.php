<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QLNVController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HotelServiceController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AppointController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\FootController;
use App\Http\Controllers\DatLichController;
use App\Http\Controllers\SanPhamController;
 
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu', [HomeController::class,'index']);

Route::get('/chinh-sach-doi-tra', [FootController::class,'ChinhSachDoiTra']);
Route::get('/chinh-sach-hoan-tien', [FootController::class,'ChinhSachHoanTien']);
Route::get('/phuong-thuc-thanh-toan', [FootController::class,'PhuongThucThanhToan']);
Route::get('/chinh-sach-bao-mat', [FootController::class,'ChinhSachBaoMat']);

//Page SP
Route::get('/san-pham',[ProductController::class,'pagesanpham']);

//Page Dịch vụ
Route::get('/dich-vu-khach-san',[HotelServiceController::class,'index']);
//dich vu spa
Route::get('/dich-vu-spa', [SpaController::class,'index']);

// admin
Route::get('/admin', [AdminController::class,'trangchu']);
Route::get('/gioi-thieu', [GioithieuController::class,'index']);

//admin danh muc san pham
Route::resource('/danh-muc-san-pham', CategoryProductController::class);
Route::post('/danh-muc-san-pham',[CategoryProductController::class,'store']);
Route::put('/danh-muc-san-pham/{id}', [CategoryProductController::class, 'update']);
Route::delete('/danh-muc-san-pham/{id}', [CategoryProductController::class, 'destroy']);

//admin loai san pham
Route::resource('/loai-san-pham', TypeProductController::class);
Route::post('/loai-san-pham',[TypeProductController::class,'store']);
Route::put('/loai-san-pham/{id}', [TypeProductController::class, 'update']);
Route::delete('/loai-san-pham/{id}', [TypeProductController::class, 'destroy']);

//admin san pham
Route::resource('/quan-ly-san-pham', ProductController::class);
Route::post('/quan-ly-san-pham',[ProductController::class,'store']);
Route::put('/quan-ly-san-pham/{id}', [ProductController::class, 'update']);
Route::delete('/quan-ly-san-pham/{id}', [ProductController::class, 'destroy']);
Route::get('/san-pham/{id}', [ProductController::class, 'getProduct']);
Route::POST('/update_new_status/{id}', [ProductController::class, 'updateNewStatus']);
Route::POST('/update_best_seller_status/{id}', [ProductController::class, 'updateBestSellerStatus']);

//admin employee
Route::resource('/quan-ly-nhan-vien',QLNVController::class);
Route::post('/them-nhan-vien',[QLNVController::class,'store']);
Route::put('/quan-ly-nhan-vien/{id}', [QLNVController::class, 'update']);
Route::delete('/quan-ly-nhan-vien/{id}', [QLNVController::class, 'destroy']);

//admin customer
Route::resource('/quan-ly-khach-hang',CustomerController::class);
Route::put('/quan-ly-khach-hang/{id}', [CustomerController::class, 'update']);
Route::delete('/quan-ly-khach-hang/{id}', [CustomerController::class, 'destroy']);

//admin hoa don
Route::resource('/quan-ly-hoa-don',BillController::class);

//admin don hang
Route::resource('/quan-ly-don-hang',OrderController::class);
Route::put('/quan-ly-don-hang/{id}', [OrderController::class, 'update']);
Route::delete('/quan-ly-don-hang/{id}', [OrderController::class, 'destroy']);

//admin slider
Route::resource('/quan-ly-slider',SliderController::class);
Route::post('/quan-ly-slider',[SliderController::class,'store']);
Route::put('/quan-ly-slider/{id}', [SliderController::class, 'update']);
Route::delete('/quan-ly-slider/{id}', [SliderController::class, 'destroy']);

//admin lich hen
Route::resource('/quan-ly-lich-hen', AppointController::class);
Route::put('/quan-ly-lich-hen/{id}', [AppointController::class, 'update']);
Route::delete('/quan-ly-lich-hen/{id}', [AppointController::class, 'destroy']);

//admin khung gio
Route::get('/khung-gio', [AppointController::class, 'timeslot']);


// 'datlich'
Route::get('/datlich', [DatLichController::class, 'index']);



Route::get('/sanpham', [ProductController::class, 'index']);


Route::post('/luu-thong-tin-dat-lich', [DatLichController::class, 'luuThongTin'])->name('luu-thong-tin-dat-lich');
Route::post('/admin/quanlichlichhen', 'AdminController@xuLyDatLich');

use App\Http\Controllers\LichHenController;


Route::get('/danh-sach-lich-hen', [LichHenController::class, 'index']);