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
    // {
    //     $order = DB::table('order')
    //         ->join('users', 'users.id', '=', 'order.user_id')
    //         ->join('product', 'products.id', '=', 'order.product_id')
    //         ->where('order.id', '=', $id)
    //         ->select('order.*', 'users.name as user_name', 'product.name as product_name')
    //         ->first();

    //     return response()->json($order);
    // }

    public function daGiao(){
        $order= Order::where('status','Đã giao ')->orderBy('created_at','desc')->get();
        return view('pages.lichsugiaodich', ['order' => $order]);
    }

    public function choXacNhan(){
        $order= Order::where('status','Chờ xác nhận')->orderBy('created_at','desc')->get();

        return view('pages.lichsugiaodich', ['order' => $order]);
    }

    public function dangGiao(){
        $order= Order::where('status','Đang giao')->orderBy('created_at','desc')->get();
        return view('pages.lichsugiaodich', ['order' => $order]);
    }

    public function daHuy(){
        $order= Order::where('status','Đã hủy')->orderBy('updated_at','desc')->get();
        return view('pages.lichsugiaodich', ['order' => $order]);
    }
    public function orderDetail(){
        return view('pages.chitietdonhang');
    }

}