<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    use ValidatesRequests;
    public function index(){
        $adminController = new AdminController();
        $check = $adminController->checkadmin();
        if(!$check) {
           return redirect('/admin-login');
        }
        $emps = order::get();
        return view('admin.admin_quanlydonhang')->with('emps', $emps);
    }
    public function destroy($id)
    {
        $adminController = new AdminController();
        $check = $adminController->checkadmin();
        if(!$check) {
            return redirect('/admin-login');
         }
        $emps = order::find($id);
        $emps->delete();

        Session::put('message', 'Đã xóa đơn hàng!');
        return Redirect::to('/quan-ly-don-hang');
    }
    public function show($id)
{
    $order = DB::table('order')
        ->join('users', 'users.id', '=', 'order.user_id')
        ->join('product', 'products.id', '=', 'order.product_id')
        ->where('order.id', '=', $id)
        ->select('order.*', 'users.name as user_name', 'product.name as product_name')
        ->first();

    return response()->json($order);
}

}