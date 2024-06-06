<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\order;
use App\Models\orderDetail;
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

    
    public function orderDetail(){
        return view('pages.chitietdonhang');
    }

    public function cancelOrder(Request $request, $code)
    {

        $order = Order::find('order_code', $code);

        $order->status = 'Đã hủy';
        $order->cancelllation_reason = $request->reason; 
        $order->save();

        Session::put('message', 'Hủy đơn hàng thành công!');
        return Redirect::to('/cho-xac-nhan');
    }

    public function detail($id){
        $total = DB::table('orders')
                ->select('total')
                ->where('id', $id)
                ->first();
        // dd($total);
        $details = DB::table('orderDetail')
            ->join('product', 'orderDetail.product_id', '=', 'product.id') // Join bảng product
            ->select('orderDetail.*', 'product.image', 'product.name') // Chọn các cột cần lấy
            ->where('order_id', $id)
            ->get();

        return view('pages.chitietdonhanggd', ['total' => $total, 'details' => $details]);
    }
    
}

