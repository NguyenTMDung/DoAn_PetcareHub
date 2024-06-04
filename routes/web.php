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
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;



Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/api/category', [CategoryProductController::class, 'lay_danh_muc']);

Route::get('/chinh-sach-doi-tra', [FootController::class, 'ChinhSachDoiTra']);
Route::get('/chinh-sach-hoan-tien', [FootController::class, 'ChinhSachHoanTien']);
Route::get('/phuong-thuc-thanh-toan', [FootController::class, 'PhuongThucThanhToan']);
Route::get('/chinh-sach-bao-mat', [FootController::class, 'ChinhSachBaoMat']);

//Page SP
Route::get('/san-pham-{pet}-{cate_id}', [ProductController::class, 'showByPetandCateId']);
Route::get('/chi-tiet-san-pham-{id}', [ProductController::class, 'detailProduct']);
Route::POST('/loc-san-pham-{cate_id}', [ProductController::class, 'filterProduct']);

//Gio hang
Route::get('/gio-hang', [CartController::class, 'index'])->middleware('checkUser');
Route::post('them-vao-gio-hang-{id}', [CartController::class, 'addToCart'])->middleware('checkUser')->name('addToCart');
Route::post('/cart-count', [CartController::class, 'getCartCount'])->middleware('checkUser')->name('cartCount');
Route::post('/update-cart', [CartController::class, 'updateCart']);
Route::post('/delete-cart-item', [CartController::class, 'deleteCartItem'])->name('deleteCartItem');

//Thanh toán
Route::post('/thanh-toan', [CheckoutController::class, 'processCheckout'])->name('checkout');
Route::post('/buy-now', [CheckoutController::class, 'buy']);

//Page Dịch vụ
Route::get('/dich-vu-khach-san', [HotelServiceController::class, 'index']);
//dich vu spa
Route::get('/dich-vu-spa', [SpaController::class, 'index']);

// admin
Route::get('/admin', [AdminController::class, 'trangchu']);
Route::get('/admin-trang-chu', [AdminController::class, 'trangchu']);
Route::get('/admin-login', [AdminController::class, 'Login']);
Route::post('/admin-login', [AdminController::class, 'AuthLogin']);
Route::get('/admin-logout', [AdminController::class, 'Logout']);

Route::get('/gioi-thieu', [GioithieuController::class, 'index']);

//admin danh muc san pham
Route::resource('/danh-muc-san-pham', CategoryProductController::class);
Route::post('/danh-muc-san-pham', [CategoryProductController::class, 'store']);
Route::put('/danh-muc-san-pham/{id}', [CategoryProductController::class, 'update']);
Route::delete('/danh-muc-san-pham/{id}', [CategoryProductController::class, 'destroy']);

//admin loai san pham
Route::resource('/loai-san-pham', TypeProductController::class);
Route::post('/loai-san-pham', [TypeProductController::class, 'store']);
Route::put('/loai-san-pham/{id}', [TypeProductController::class, 'update']);
Route::delete('/loai-san-pham/{id}', [TypeProductController::class, 'destroy']);

//admin san pham
Route::resource('/quan-ly-san-pham', ProductController::class);
Route::post('/quan-ly-san-pham', [ProductController::class, 'store']);
Route::put('/quan-ly-san-pham/{id}', [ProductController::class, 'update']);
Route::delete('/quan-ly-san-pham/{id}', [ProductController::class, 'destroy']);
Route::get('/san-pham/{id}', [ProductController::class, 'getProduct']);
Route::POST('/update_new_status/{id}', [ProductController::class, 'updateNewStatus']);
Route::POST('/update_best_seller_status/{id}', [ProductController::class, 'updateBestSellerStatus']);
Route::post('/quan-ly-san-pham/update-image', [ProductController::class, 'updateImage']);


//admin employee
Route::resource('/quan-ly-nhan-vien', QLNVController::class);
Route::post('/them-nhan-vien', [QLNVController::class, 'store']);
Route::put('/quan-ly-nhan-vien/{id}', [QLNVController::class, 'update']);
Route::delete('/quan-ly-nhan-vien/{id}', [QLNVController::class, 'destroy']);

//admin customer
Route::resource('/quan-ly-khach-hang', CustomerController::class);
Route::put('/quan-ly-khach-hang/{id}', [CustomerController::class, 'update']);
Route::delete('/quan-ly-khach-hang/{id}', [CustomerController::class, 'destroy']);

//admin hoa don
Route::resource('/quan-ly-hoa-don', BillController::class);
Route::delete('/quan-ly-hoa-don/{id}', [BillController::class, 'destroy']);
Route::get('/quan-ly-hoa-don', [BillController::class, 'index']);

//admin don hang
Route::resource('/quan-ly-don-hang', OrderController::class);
Route::put('/quan-ly-don-hang/{id}', [OrderController::class, 'update']);
Route::delete('/quan-ly-don-hang/{id}', [OrderController::class, 'destroy']);
Route::get('/order-detail/{id}', [OrderController::class, 'show']);

//admin slider
Route::resource('/quan-ly-slider', SliderController::class);
Route::post('/quan-ly-slider', [SliderController::class, 'store']);
Route::put('/quan-ly-slider/{id}', [SliderController::class, 'update']);
Route::delete('/quan-ly-slider/{id}', [SliderController::class, 'destroy']);

//admin lich hen
Route::resource('/quan-ly-lich-hen', AppointController::class);
Route::put('/quan-ly-lich-hen/{id}', [AppointController::class, 'update']);
Route::delete('/quan-ly-lich-hen/{id}', [AppointController::class, 'destroy']);

//admin khung gio
Route::get('/khung-gio', [AppointController::class, 'timeslot']);
