<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;


Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu', [HomeController::class,'index']);

//dich vu spa
Route::get('/dich-vu-spa', [SpaController::class,'index']);

// admin
Route::get('/admin', [AdminController::class,'trangchu']);
Route::get('/gioi-thieu', [GioithieuController::class,'index']);

