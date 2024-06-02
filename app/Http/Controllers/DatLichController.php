<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatLichController extends Controller
{
    public function index()
    {
        return view('pages.datlich'); 
    }
}
