<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    use ValidatesRequests;
    public function index(){
        $adminController = new AdminController();
        $check = $adminController->checkadmin();
        if(!$check) {
            return redirect('/admin-login');
        }
        $emps = bill::where('status', 'đã giao')->get();
        return view('admin.admin_quanlyhoadon')->with('emps', $emps);
    }
    public function destroy($id)
    {
        $adminController = new AdminController();
        $check = $adminController->checkadmin();
        if(!$check) {
            return redirect('/admin-login');
         }
        $emps = bill::find($id);
        $emps->delete();

        Session::put('message', 'Đã xóa hóa đơn!');
        return Redirect::to('/quan-ly-hoa-don');
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
            ,'order.name as kh_name','order.id as id','order.status as status','order.updated_at as updated_at'
            ,'order.address as address')
            ->get();
        return response()->json($order);
    }
    
}
