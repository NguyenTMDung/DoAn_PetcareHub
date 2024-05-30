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
        ->join('orderdetail', 'orderdetail.order_id', '=', 'order.id')
        ->join('product', 'product.id', '=', 'orderdetail.product_id')
        ->join('typeproduct','typeproduct.id','=','product.typeProduct_id')
        ->where('order.id', '=', $id)
        ->select( 'order.total as total','order.ship_cost as ship_cost','orderdetail.num as num'
        , 'product.name as product_name','product.price','typeproduct.name as typeproduct_name'
        ,'order.name as kh_name','order.id as id','order.status as status','order.created_at as created_at')
        ->get();
    return response()->json($order);
}

}