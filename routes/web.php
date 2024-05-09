<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu', [HomeController::class,'index']);

// admin
Route::get('/admin', [AdminController::class,'trangchu']);
Route::get('/gioi-thieu', [GioithieuController::class,'index']);

