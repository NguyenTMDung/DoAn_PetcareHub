<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    use ValidatesRequests;
    public function index(){
         $emps = bill::get();
        return view('admin.admin_quanlyhoadon')->with('emps', $emps);
    }
    public function destroy($id)
    {
        $emps = bill::find($id);
        $emps->delete();

        Session::put('message', 'Đã xóa hóa đơn!');
        return Redirect::to('/quan-ly-hoa-don');
    }
}
