<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function trangchu(){
        return view('pages.admin_home');
    }
}
