<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelServiceController extends Controller
{
    public function index(){
        return view('pages.dvkhachsan');
    }
}
