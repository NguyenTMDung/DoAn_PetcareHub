<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



use App\Models\ProductSize;

class CheckoutController extends Controller
{
    public function processCheckout(Request $request)
    {
        // Lấy danh sách các id_cart đã chọn từ giỏ hàng
        $selectedItems = $request->input('selected_items');

        $selectedItemsArray = explode(',', $selectedItems);


        $cartItems = Cart::select('carts.*', 'product.name', 'product.image', 'product_sizes.price')
        ->join('product', 'carts.product_id', '=', 'product.id')
        ->join('product_sizes', function ($join) {
            $join->on('carts.product_id', '=', 'product_sizes.product_id')
                ->whereColumn('carts.size', '=', 'product_sizes.size');
        })
        ->whereIn('carts.id', $selectedItemsArray)
        ->orderBy('carts.id', 'desc')
        ->get();

        return view('pages.thanhtoan', compact('cartItems'));
    }

    public function buy(Request $request){

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'phone' => 'required|string|max:15',
        //     'email' => 'required|email|max:255',
        //     'note' => 'nullable|string',
        //     // 'location' => 'required|in:1,2',
        //     'method_payment' => 'required|in:1,2',
        //     'total_price' => 'required|integer',
        // ]);

        if (auth()->check()) {
            $user_id = auth()->id();
        }else{
            $user_id = session()->get('user_id', '');
        }
        DB::transaction(function () use ($request, $user_id) {
            $orderData = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'note' => $request->note,
                'method_payment' => $request->method_payment,
                'total' => $request->total_price*1000,
            ];
            
            if ($user_id) {
                $orderData['user_id'] = $user_id;
            }
            if ($request->has('city') && $request->has('district') && $request->has('ward') && $request->has('addressDetail')) {
                $orderData['address'] = implode('.', [$request->addressDetail, $request->ward, $request->district, $request->city]);
            }
    
            $order = Order::create($orderData);

            foreach ($request->products as $productData) {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $productData['product_id'],
                    'size' => $productData['size'],
                    'num' => $productData['num'],
                    'price' => $productData['price']
                ]);

                Cart::where('id', $productData['id'])->delete();
            }

        });

        return Redirect::to('/trang-chu');
    }
}
